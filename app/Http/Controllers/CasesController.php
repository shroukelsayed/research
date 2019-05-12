<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Input;
use Form;
use Html;
use DB;
use App\Cases;
use App\Children;
use App\Rooms;
use App\Partners;
use App\Roommates;
use App\Income;
use App\Support;
use App\Debts;
use App\CaseStatuses;

use App\Governorate;
use App\City;
use App\District;
use App\Following;

class CasesController extends Controller
{

    public function index()
    {
        $cases = Cases::orderBy('id', 'desc')->paginate(10);
        return view('partials.case.index', compact('cases'));
    }

    public function view($id)
    {
        $case = Cases::find($id);
        // var_dump($case->assets_pets);
        // die();
        $governorate = !empty($case->governorate) ? DB::table('governorates')->where('code' , '=', $case->governorate)->first()->name:'';
        $city = !empty($case->city) ? DB::table('cities')->where('code' , '=', $case->city)->first()->name:'';
        $district = !empty($case->district) ? DB::table('districts')->where('code' , '=', $case->district)->first()->name:'';
        $following = !empty($case->following) ? DB::table('followings')->where('code' , '=', $case->following)->first()->name:'';

        return view('partials.case.show', compact('case','governorate','city','district','following'));
    }

    public function printView($id){
        $case = Cases::find($id);
        return view('partials.case.print', compact('case'));
    }

    public function create()
    {
        $govs = Governorate::pluck('name','code');
        $cities = City::pluck('name','code');
        $districts = District::pluck('name','code');
        $followings = Following::pluck('name','code');

        return view('partials.case.create',compact('govs','cities','districts','followings'));
    }

    public function edit($id)
    {
        $case = Cases::find($id);
        $case_status = array();

        $case_status_date = array();

        foreach ($case->caseStatus as $key => $value) {
            array_push($case_status, $value->status);
            $case_status_date[$value->status][] = $value->date;
        }

        $govs = Governorate::pluck('name','code');
        $cities = City::where('governorate_id', $case->governorate)->pluck('name','code');
        $districts = District::where('city_id', $case->city)->pluck('name','code');
        $followings = Following::where('district_id', $case->district)->pluck('name','code');

        return view('partials.case.edit', compact('case','case_status','case_status_date','govs','cities','districts','followings'));
    }


    /**
     * store main data
     * store children data [array] of childrens
     * store rooms data [array] of rooms
     * store partner data [array] of partners
     * store how stay with case in the same room
     * store incomes data
     * store debts
     */
    public function store(Request $request)
    {
        // var_dump(count($request->case_status));
        var_dump(json_encode($request->case_assets_pets));
        die;
       if(isset($request->debts_stay)){
         $sum_of_debts_stay = array_sum($request->debts_stay);
        }
        
        if($request->input('case_national_id') !== null && $request->input('case_phone') !== null){
            $validator = Validator::make($request->all(), [
                'case_typer_id' => 'required|exists:users,id',
                'case_name' => 'required',
                // 'case_status' => 'required',
                'case_national_id' => 'unique:cases,national_id|digits:14',
                'case_phone'=>'digits:11',
                'access_code' => 'required|in:Y5LbAN9ei6pgovLybld6Qmslrskm8h0eg6ErA7kYAFA', 
            ]);
        }elseif($request->input('case_phone') !== null){
            $validator = Validator::make($request->all(), [
                'case_typer_id' => 'required|exists:users,id',
                'case_name' => 'required',
                // 'case_status' => 'required',
                'case_phone'=>'digits:11',
                'access_code' => 'required|in:Y5LbAN9ei6pgovLybld6Qmslrskm8h0eg6ErA7kYAFA', 
            ]);
        }elseif($request->input('case_national_id') !== null){
            $validator = Validator::make($request->all(), [
                'case_typer_id' => 'required|exists:users,id',
                'case_name' => 'required',
                // 'case_status' => 'required',
                'case_national_id' => 'unique:cases,national_id|digits:14',
                'access_code' => 'required|in:Y5LbAN9ei6pgovLybld6Qmslrskm8h0eg6ErA7kYAFA', 
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'case_typer_id' => 'required|exists:users,id',
                'case_name' => 'required',
                // 'case_status' => 'required',
                'access_code' => 'required|in:Y5LbAN9ei6pgovLybld6Qmslrskm8h0eg6ErA7kYAFA', 
            ]);
        }

        
        if(isset($request->case_debts_total)&&$request->case_debts_total > $sum_of_debts_stay){
            $validator->after(function($validator) {
            $validator->errors()->add('اجمال الديون ', 'case debts total must be less than or equal debts_stay ');
           });
            // dd($sum_of_debts_stay = array_sum($request->debts_stay)) ;
        };

        if(count($request->case_status) == 1 && $request->case_status[0] == null){
            $validator->after(function($validator) {
                $validator->errors()->add('case_status', 'Case Status required');
            });
        }

        if ($validator->fails()) {
            if(!Auth::check()){
                $response = [
                    'message' => 'Validation Error',
                    'result'  => $validator->errors(),
                ];
                return response()->json($response, 402);
            }
            return back()->withErrors($validator->errors())->withInput();
        }

        DB::Transaction(function() use(
            $request ,
            &$storestatusesData ,
            &$storePartnersData ,
            &$storeChildrenData ,
            &$storeRoommatesData ,
            &$storeIncomeData ,
            &$storeSupportData ,
            &$storeDebtsData ,
            &$storeRoomsData
        ) {

            $storeCase = $this->storeCase($request);
            $storestatusesData = $this->storeStatusesData($request , $storeCase);
            $storePartnersData = $this->storePartnersData($request , $storeCase);
            $storeChildrenData = $this->storeChildrenData($request , $storeCase);
            $storeRoommatesData = $this->storeRoommatesData($request , $storeCase);
            $storeIncomeData = $this->storeIncomeData($request , $storeCase);
            $storeSupportData = $this->storeSupportData($request , $storeCase);
            $storeDebtsData = $this->storeDebtsData($request , $storeCase);
            $storeRoomsData = $this->storeRoomsData($request , $storeCase);

        });

        if(!Auth::check()){
            $result = Cases::orderBy('created_at', 'DESC')->take(1)->first();
            $response = [
                'message' => 'Case Created Successfully',
                'result'  => $result,
            ];
            return response()->json($response, 200);
        }
        return $this->index();
    }

    public function storeBase64(Request $request){
        $image = base64_decode($request->string);
        $fp = fopen($request->path,'wb+');
        fwrite($fp,$image);
        fclose($fp);
        return "OK";
    }
    /**
     * store main data for case
     */
    private function storeCase (Request $request)
    {
         
            // var_dump($request->case_assets_farm_space);die;
   
        if (!is_null($request->case_name) && !empty($request->case_name)){
            // $support_count = 0 ;
            // if(!is_null($request->support_source_category)){
            //     foreach ($request->support_source_category as $key => $value) {
            //         if(!is_null($value))
            //             $support_count ++;
            //     }
            // }

            if (strpos($request->case_national_id_front, 'base64')) {
               
                list($type, $request->case_national_id_front) = explode(';', $request->case_national_id_front);
                list(, $request->case_national_id_front)      = explode(',', $request->case_national_id_front);
                $request->case_national_id_front = base64_decode($request->case_national_id_front);
                $fileName = uniqid () . "_" . date ( 'Y_m_d' ) . '_' . $request->case_name . '.jpg' ;
                file_put_contents(public_path()."/uploads/cases/national_id_front/".$fileName, $request->case_national_id_front);

                $case_national_id_front = "cases/national_id_front/".$fileName;
            }else
                $case_national_id_front = null;
            if (strpos($request->case_national_id_back, 'base64')) {
                list($type, $request->case_national_id_back) = explode(';', $request->case_national_id_back);
                list(, $request->case_national_id_back)      = explode(',', $request->case_national_id_back);
                $request->case_national_id_back = base64_decode($request->case_national_id_back);

                $fileName = uniqid () . "_" . date ( 'Y_m_d' ) . '_' . $request->case_name . '.jpg' ;

                file_put_contents(public_path()."/uploads/cases/national_id_back/".$fileName, $request->case_national_id_back);
                
                $case_national_id_back = "cases/national_id_back/".$fileName;
            }else
                $case_national_id_back = null;

            // var_dump($request->support_source_category);
            // var_dump(!empty($request->support_source_category[0]));die;
                
                $case = Cases::create([
                    'typer_id' => (Auth::check())? Auth::id() : $request->case_typer_id,
                    'researcher_name' => $request->case_researcher_name,
                    'governorate' => $request->case_governorate,
                    'city' => $request->case_city,
                    'district' => $request->case_district,
                    'following' => $request->case_following,
                    'real_date' => $request->case_real_date,
                    'name' => $request->case_name,
                    'gender' => $request->case_gender,
                    'age' => $request->case_age,
                    'national_id' => $request->case_national_id,
                    'relationship_status' => $request->case_relationship_status,
                    'education_status' => $request->case_education_status,
                    'work_status' => $request->case_work_status,
                    'profession' => $request->case_profession,
                    'national_id_front' => $request->file('case_national_id_front') ? $request->file('case_national_id_front')->store('/cases/national_id_front') : $case_national_id_front,
                    'national_id_back' => $request->file('case_national_id_back') ? $request->file('case_national_id_back')->store('/cases/national_id_back') : $case_national_id_back,
                    'phone' => $request->case_phone,
                    'is_ill' => $request->case_is_ill,
                    'illness_type' => json_encode($request->case_illness_type),
                    'illness_description' => $request->case_illness_description,
                    'illness_prevent_movement' => $request->case_illness_prevent_movement,
                    'need_monthly_treatment' => $request->case_illness_need_monthly_treatment,
                    'has_national_support' => $request->case_illness_is_national_support,
                    'treatment_monthly_amount' => $request->case_illness_treatment_monthly_amount,
                    'treatment_affordable' => $request->case_treatment_affordable,
                    'need_operation' => $request->case_need_operation,
                    'income_amount' => $request->case_income_amount,
                    'income_amount_category' => $request->case_income_amount_category,
                    'income_source_count' => !empty($request->income_source_type)? count($request->income_source_type):0,
                    'support_count' => !empty($request->support_source_category[0]) ? count($request->support_source_category):0,
                    'debts_total' => $request->case_debts_total,
                    'debts_total_range' => $request->case_debts_total_range,
                    'expenses_house_rent' => $request->case_expenses_house_rent,
                    'expenses_farm_rent' => $request->case_expenses_farm_rent,
                    'expenses_treatment' => $request->case_expenses_treatment,
                    'expenses_detergent' => $request->case_expenses_detergent,
                    'expenses_school_subscription' => $request->case_expenses_school_subscription,
                    'expenses_child_course' => $request->case_expenses_child_course,
                    'expenses_water_receipt' => $request->case_expenses_water_receipt,
                    'expenses_electricity_receipt' => $request->case_expenses_electricity_receipt,
                    'expenses_clothes' => $request->case_expenses_clothes,
                    'expenses_phone_credit' => $request->case_expenses_phone_credit,
                    'expenses_debts' => $request->case_expenses_debts,
                    'expenses_transportation' => $request->case_expenses_transportation,
                    'expenses_pets_food' => $request->case_expenses_pets_food,
                    'expenses_smoking' => $request->case_expenses_smoking,
                    'expenses_food' => $request->case_expenses_food,
                    'expenses_other' => $request->case_expenses_other,
                    'expenses_total_category' => $request->case_expenses_total_category,
                    'expenses_total' => $request->case_expenses_total,
                    'assets_house_type' => $request->case_assets_house_type,
                    'assets_house_status' => $request->case_assets_house_status,
                    'assets_house_price' => $request->case_assets_house_price,
                    'assets_house_paying_source' => $request->case_assets_house_paying_source,
                    'assets_electric_meter' => $request->case_assets_electric_meter,
                    'case_assets_electric_meter_other' => $request->case_assets_electric_meter_other,
                    'assets_water_meter' => $request->case_assets_water_meter,
                    'assets_water_alternative' => $request->case_assets_water_alternative,
                    'assets_farm' => $request->case_assets_farm,
                    'assets_pets' => json_encode($request->case_assets_pets),
                    'assets_farm_space' => $request->case_assets_farm_space,
                    'case_assets_pets_alternative' => $request->case_assets_pets_alternative,
                    'assets_vehicle' => $request->case_assets_vehicle,
                    'case_assets_vehicle_alternative' => $request->case_assets_vehicle_alternative,
                    'assets_house_alternative_status' => $request->case_assets_house_alternative_status,
                    'assets_house_alternative_resident' => $request->case_assets_house_alternative_resident,
                    'assets_house_alternative_leave' => $request->case_assets_house_alternative_leave,
                    'assets_house_construction' => $request->case_assets_house_construction,
                    'assets_house_floors_count' => $request->case_assets_house_floors_count,
                    'assets_house_rooms_count' => !empty($request->room_type) ? count($request->room_type):0,
                    'has_bathroom' => $request->case_has_bathroom,
                    'bathroom_has_door' => $request->case_bathroom_has_door,
                    'bathroom_has_basin' => $request->case_bathroom_has_basin,
                    'bathroom_has_toilet' => $request->case_bathroom_has_toilet,
                    'bathroom_roof' => $request->case_bathroom_roof,
                    'bathroom_wall' => $request->case_bathroom_wall,
                    'bathroom_floor' => $request->case_bathroom_floor,
                    'amenities_mattress' => $request->case_amenities_mattress,
                    'amenities_bed' => $request->case_amenities_bed,
                    'amenities_fans' => $request->case_amenities_fans,
                    'amenities_blankets' => $request->case_amenities_blankets,
                    'amenities_stove' => $request->case_amenities_stove,
                    'amenities_oven' => $request->case_amenities_oven,
                    'amenities_flame' => $request->case_amenities_flame,
                    'amenities_heater' => $request->case_amenities_heater,
                    'amenities_fridge' => $request->case_amenities_fridge,
                    'amenities_washer' => $request->case_amenities_washer,
                    'amenities_cupbord' => $request->case_amenities_cupbord,
                    'amenities_nish' => $request->case_amenities_nish,
                    'amenities_arika' => $request->case_amenities_arika,
                    'amenities_table' => $request->case_amenities_table,
                    'amenities_television' => $request->case_amenities_television,
                    'amenities_receiver' => $request->case_amenities_receiver,
                    'amenities_computer' => $request->case_amenities_computer,
                    'need_water' => $request->case_need_water,
                    'need_bathroom' => $request->case_need_bathroom,
                    'need_roof' => $request->case_need_roof,
                    'need_blankets' => $request->case_need_blankets,
                    'need_construction' => $request->case_need_construction,
                    'need_education' => $request->case_need_education,
                    'need_food' => $request->case_need_food,
                    'case_need_project' => $request->case_need_project,
                    'case_need_project_desc' => $request->case_need_project_desc,
                    'additional_notes' => $request->case_additional_notes,
                ]);
            if (!$case){
                return back();
            }
            return $case->id;
        }
        return back();
    }

    /**
     * store case case status data
     */
    private function storeStatusesData (Request $request , $caseId)
    {
        
        $statusDates = array();
        foreach ($request->case_status as $status_key => $status_value) {
            foreach ($request->status_date as $date_key => $date_value) {
                if($status_key == $date_key){
                    foreach ($date_value as $key => $value) {
                        if(!is_null($value)){
                            $statusDates[$value] = $status_value; 
                        }
                    }
                }
            }
        }
        // echo "<pre>";
        // var_dump($request->case_status);
        // var_dump($request->status_date);
        // var_dump($statusDates);
        // die();
        foreach ($statusDates as $key => $value) {
            $status = CaseStatuses::create([
                                'case_id' => $caseId ,
                                'status' => $value,
                                'date' => $key,
                                ]);
        }
        return 'done status date';
    }
    
    private function storePartnersData (Request $request , $caseId)
    {
        if(is_array($request->partner_name) && !empty($request->partner_name)){
            for ($i = 0; $i < count($request->partner_name); $i++) {
                if ($request->partner_name[$i]!==null && !empty($request->partner_name)){
                    if (strpos($request->partner_national_id_front[$i], 'base64')) {
                        $data = $request->partner_national_id_front[$i];
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);

                        $fileName = uniqid () . "_" . date ( 'Y_m_d' ) . '_' . $request->case_name . '.jpg' ;

                        file_put_contents(public_path()."/uploads/partners/national_id_front/".$fileName, $data);

                        $partner_national_id_front[$i] = "partners/national_id_front/".$fileName;
                    }else
                        $partner_national_id_front[$i] = null;

                    if (strpos($request->partner_national_id_back[$i], 'base64')) {
                        $data = $request->partner_national_id_back[$i];
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);

                        $fileName = uniqid () . "_" . date ( 'Y_m_d' ) . '_' . $request->case_name . '.jpg' ;

                        file_put_contents(public_path()."/uploads/partners/national_id_back/".$fileName, $data);

                        $partner_national_id_back[$i] = "partners/national_id_back/".$fileName;
                    }else
                        $partner_national_id_back[$i] = null;
     
                    $partner = Partners::create([
                        'case_id' => $caseId,
                        'name' => $request->partner_name[$i],
                        'gender' => $request->partner_gender[$i],
                        'age' => $request->partner_age[$i],
                        'national_id' => $request->partner_national_id[$i],
                        'relationship_status' => $request->partner_relationship_status[$i],
                        'education_status' => $request->partner_education_status[$i],
                        'work_status' => $request->partner_work_status[$i],
                        'profession' => $request->partner_profession[$i],
                        'national_id_front' => $request->file('partner_national_id_front')[$i] ? $request->file('partner_national_id_front')[$i]->store('/partners/national_id_front') : $partner_national_id_front[$i],
                        'national_id_back' => $request->file('partner_national_id_back')[$i] ? $request->file('partner_national_id_back')[$i]->store('/partners/national_id_back') : $partner_national_id_back[$i],
                        'phone' => $request->partner_phone[$i],
                        'is_ill' => $request->partner_is_ill[$i],
                        'illness_type' =>json_encode($request->partner_illness_type[$i]) ,
                        'illness_description' => $request->partner_illness_description[$i],
                        'illness_prevent_movement' => $request->partner_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->partner_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->partner_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->partner_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->partner_treatment_affordable[$i],
                        'need_operation' => $request->partner_need_operation[$i],
                    ]);
                }
            }
        }
        return 'done partners';
    }

    /**
     * store case childrens data
     */
    private function storeChildrenData (Request $request , $caseId)
    {
        if(is_array($request->child_name) && !empty($request->child_name)){
               // echo "<pre>";
                // var_dump($request->child_illness_type);
                // die;
            for ($i = 0; $i < count($request->child_name); $i++) {
                if ($request->child_name[$i]!==null && !empty($request->child_name)){
                    $child = Children::create([
                        'case_id' => $caseId,
                        'name' => $request->child_name[$i],
                        'gender' => $request->child_gender[$i],
                        'age' => $request->child_age[$i],
                        'relationship_status' => $request->child_relationship_status[$i],
                        'education_status' => $request->child_education_status[$i],
                        'work_status' => $request->child_work_status[$i],
                        'profession' => $request->child_profession[$i],
                        'is_ill' => $request->child_is_ill[$i],
                        'illness_type' => !empty($request->child_illness_type[$i]) ?  json_encode($request->child_illness_type[$i]) : null ,
                        'illness_description' => $request->child_illness_description[$i],
                        'illness_prevent_movement' => $request->child_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->child_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->child_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->child_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->child_treatment_affordable[$i],
                        'need_operation' => $request->child_need_operation[$i],
                ]);
                }
            }
            // die;
        }
      return 'done children';
    }

    /**
     * store case roommates data
     */
    private function storeRoommatesData (Request $request , $caseId)
    {
        if(is_array($request->roommate_name) && !empty($request->roommate_name)){
            for ($i = 0; $i < count($request->roommate_name); $i++) {
                if ($request->roommate_name[$i]!==null && !empty($request->roommate_name)){
                    $roommate = Roommates::create([
                        'case_id' => $caseId,
                        'name' => $request->roommate_name[$i],
                        'gender' => $request->roommate_gender[$i],
                        'age' => $request->roommate_age[$i],
                        'relationship_status' => $request->roommate_relationship_status[$i],
                        'education_status' => $request->roommate_education_status[$i],
                        'work_status' => $request->roommate_work_status[$i],
                        'profession' => $request->roommate_profession[$i],
                        'relativity' => ($request->roommate_relativity[$i] == 'أخرى')? $request->roommate_relativity_other : $request->roommate_relativity[$i],
                        'is_ill' => $request->roommate_is_ill[$i],
                        'illness_type' => json_encode($request->roommate_illness_type[$i]),
                        'illness_description' => $request->roommate_illness_description[$i],
                        'illness_prevent_movement' => $request->roommate_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->roommate_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->roommate_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->roommate_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->roommate_treatment_affordable[$i],
                        'need_operation' => $request->roommate_need_operation[$i],
                    ]);
                }
            }
        }
        return 'done roommates';
    }


    /**
     * store incomes
     */
    private function storeIncomeData (Request $request , $caseId)
    {
        if(is_array($request->income_source_type) && !empty($request->income_source_type)){
            for ($i = 0; $i < count($request->income_source_type); $i++) {
                if (!is_null($request->income_source_type[$i])&& !empty($request->income_source_type)){
                    $income = Income::create([
                    'case_id' => $caseId,
                    'source_type' => $request->income_source_type[$i],
                    'notes' => $request->income_notes[$i],
                    'monthly_amount' => $request->income_monthly_amount[$i],
                    'source_flow' => $request->income_source_flow[$i],
                ]);
                }
            }
        }
        return 'done income';
    }
 
    /**
     * store Support data
     */
    private function storeSupportData (Request $request , $caseId)
    {
        // var_dump($request->all());die;
        if(is_array($request->support_source_category ) && !empty($request->support_source_category)){
            for ($i = 0; $i < count($request->support_source_category); $i++) {
                if ($request->support_source_category[$i]!==null && !empty($request->support_source_category)){
                    $support = Support::create([
                        'case_id' => $caseId,
                        'source_category' => ($request->support_source_category[$i] !== "أخرى") ? $request->support_source_category[$i] : $request->support_source_category_other[$i],
                        'source_name' => ($request->support_source_name[$i] !== "أخرى") ? $request->support_source_name[$i] : $request->support_source_name_other[$i],
                        'type' => ($request->support_type[$i] !== "أخرى") ? $request->support_type[$i] : $request->support_type_other[$i],
                        'period' => ($request->support_period[$i] !== "أخرى") ? $request->support_period[$i] : $request->support_period_other[$i],
                    ]);
                }
            }
        }
        return 'done support';
    }

     /**
     * store debts
     */
     private function storeDebtsData (Request $request , $caseId)
    {
        if(is_array($request->debts_amount) && !empty($request->debts_amount)){
            for ($i = 0; $i < count($request->debts_amount); $i++) {
                if ($request->debts_amount[$i]!==null && !empty($request->debts_amount[$i])) {
                    $debts = Debts::create([
                        'case_id' => $caseId,
                        'amount' => $request->debts_amount[$i],
                        'stay' => $request->debts_stay[$i],
                        'reason' => $request->debts_reason[$i],
                        'refund_method' => $request->debts_refund_method[$i],
                        'monthly_amount' => $request->debts_monthly_amount[$i],
                    ]);
                }
            }
        }
        return 'done debts';
    }

    /**
     * store rooms data
     */
    private function storeRoomsData (Request $request , $caseId)
    {
        if(is_array($request->room_type) && !empty($request->room_type)){
            for ($i = 0; $i < count($request->room_type); $i++) {
                if ($request->room_type[$i]!==null && !empty($request->room_type)) {
                    $room = Rooms::create([
                    "case_id" => $caseId,
                    'type' => $request->room_type[$i],
                    'roof_type' => $request->room_roof_type[$i],
                    'roof_status' => $request->room_roof_status[$i],
                    'paint' => $request->room_paint[$i],
                    'notes' => $request->room_notes[$i],
                ]);
                }
            }
        }
        return 'done rooms';
    }


    public function update(Request $request, $caseId)
    {
        // echo "<pre>";
        // var_dump($request->all());
        // die();
        

        if($request->input('case_national_id') !== null && $request->input('case_phone') !== null){
            $validator = Validator::make($request->all(), [
               // 'case_typer_id' => 'required|exists:users,id',
                'case_name' => 'required',
                'case_status' => 'required',
                'case_national_id' => 'numeric|digits:14',
                'case_phone'=>'digits:11',
            ]);
        }elseif($request->input('case_phone') !== null){
            $validator = Validator::make($request->all(), [
                'case_name' => 'required',
                'case_status' => 'required',
                'case_phone'=>'digits:11',
            ]);
        }elseif($request->input('case_national_id') !== null){
            $validator = Validator::make($request->all(), [
                'case_name' => 'required',
                'case_status' => 'required',
                'case_national_id' => 'numeric|digits:14',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'case_name' => 'required',
                'case_status' => 'required',
            ]);
        }



        if ($validator->fails()) {
            if(!Auth::check()){
                $response = [
                    'message' => 'You are not authorized for that action',
                    'result'  => '',
                ];
                return response()->json($response, 402);
            }
            return back()->withErrors($validator->errors());
        }

        DB::Transaction(function() use(
            $caseId ,
            &$request ,
            &$updatePartnersData ,
            &$updateChildrenData ,
            &$updateRoommatesData ,
            &$updateIncomeData ,
            &$updateSupportData ,
            &$updateDebtsData ,
            &$updateRoomsData
        ) {

            $updateCase = $this->updateCase($request, $caseId);
            $updateStatus = $this->updateStatusesData($request,$updateCase);
            $updatePartnersData = $this->updatePartnersData($request , $updateCase);
            $updateChildrenData = $this->updateChildrenData($request , $updateCase);
            $updateRoommatesData = $this->updateRoommatesData($request , $updateCase);
            $updateIncomeData = $this->updateIncomeData($request , $updateCase);
            $updateSupportData = $this->updateSupportData($request , $updateCase);
            $updateDebtsData = $this->updateDebtsData($request , $updateCase);
            $updateRoomsData = $this->updateRoomsData($request , $updateCase);

        });

        if(!Auth::check()){
            $result = Cases::orderBy('created_at', 'DESC')->take(1)->first();
            $response = [
                'message' => 'Case Updated Successfully',
                'result'  => $result,
            ];
            return response()->json($response, 200);
        }
        return $this->index();
    }

    public function updateCase(Request $request, $id)
    {
        
        if (!is_null($request->case_name) && !empty($request->case_name)){
            // $support_count = 0 ;
            // foreach ($request->support_source_category as $key => $value) {
            //     if(!is_null($value))
            //         $support_count ++;
            // }
            $case = Cases::find($id);
            // var_dump($request->case_assets_farm_space);die;
            $case->update([
               // 'typer_id' => (Auth::check())? Auth::id() : $request->case_typer_id,
                // 'status' => $request->case_status,
                'researcher_name' => $request->case_researcher_name,
                'governorate' => $request->case_governorate,
                'city' => $request->case_city,
                'district' => $request->case_district,
                'following' => $request->case_following,
                'real_date' => $request->case_real_date,
                'name' => $request->case_name,
                'gender' => $request->case_gender,
                'age' => $request->case_age,
                'national_id' => $request->case_national_id,
                'relationship_status' => $request->case_relationship_status,
                'education_status' => $request->case_education_status,
                'work_status' => $request->case_work_status,
                'profession' => $request->case_profession,
                'national_id_front' => (!is_null($request->file('case_national_id_front'))) ? $request->file('case_national_id_front')->store('/cases/national_id_front') : $case->national_id_front,
                'national_id_back' => (!is_null($request->file('case_national_id_back'))) ? $request->file('case_national_id_back')->store('/cases/national_id_back') : $case->national_id_back,
                'phone' => $request->case_phone,
                'is_ill' => $request->case_is_ill,
                'illness_type' => json_encode($request->case_illness_type),
                'illness_description' => $request->case_illness_description,
                'illness_prevent_movement' => $request->case_illness_prevent_movement,
                'need_monthly_treatment' => $request->case_need_monthly_treatment,
                'has_national_support' => $request->case_has_national_support,
                'treatment_monthly_amount' => $request->case_treatment_monthly_amount,
                'treatment_affordable' => $request->case_treatment_affordable,
                'need_operation' => $request->case_need_operation,
                'income_amount' => $request->case_income_amount,
                'income_amount_category' => $request->case_income_amount_category,
                'income_source_count' => !empty($request->income_source_type) ? count($request->income_source_type):0,
                'support_count' => !empty($request->support_source_category[0]) ? count($request->support_source_category):0,
                'debts_total' => $request->case_debts_total,
                'debts_total_range' => $request->case_debts_total_range,
                'expenses_house_rent' => $request->expenses_house_rent,
                'expenses_farm_rent' => $request->expenses_farm_rent,
                'expenses_treatment' => $request->case_expenses_treatment,
                'expenses_detergent' => $request->case_expenses_detergent,
                'expenses_school_subscription' => $request->case_expenses_school_subscription,
                'expenses_child_course' => $request->case_expenses_child_course,
                'expenses_water_receipt' => $request->case_expenses_water_receipt,
                'expenses_electricity_receipt' => $request->case_expenses_electricity_receipt,
                'expenses_clothes' => $request->case_expenses_clothes,
                'expenses_phone_credit' => $request->case_expenses_phone_credit,
                'expenses_debts' => $request->case_expenses_debts,
                'expenses_transportation' => $request->case_expenses_transportation,
                'expenses_pets_food' => $request->case_expenses_pets_food,
                'expenses_smoking' => $request->case_expenses_smoking,
                'expenses_food' => $request->case_expenses_food,
                'expenses_other' => $request->case_expenses_other,
                'expenses_total_category' => $request->case_expenses_total_category,
                'expenses_total' => $request->case_expenses_total,
                'assets_house_type' => $request->case_assets_house_type,
                'assets_house_status' => $request->case_assets_house_status,
                'assets_house_price' => $request->case_assets_house_price,
                'assets_house_paying_source' => $request->case_assets_house_paying_source,
                'assets_electric_meter' => $request->case_assets_electric_meter,
                'assets_water_meter' => $request->case_assets_water_meter,
                'assets_water_alternative' => $request->case_assets_water_alternative,
                'assets_farm' => $request->case_assets_farm,
                'assets_farm_space' => $request->case_assets_farm_space,
                'assets_pets' => json_encode($request->case_assets_pets),
                'assets_vehicle' => $request->case_assets_vehicle,
                'assets_house_alternative_status' => $request->case_assets_house_alternative_status,
                'assets_house_alternative_resident' => $request->case_assets_house_alternative_resident,
                'assets_house_alternative_leave' => $request->case_assets_house_alternative_leave,
                'assets_house_construction' => $request->case_assets_house_construction,
                'assets_house_floors_count' => $request->case_assets_house_floors_count,
                'assets_house_rooms_count' => !empty($request->room_type) ? count($request->room_type): 0,
                'has_bathroom' => $request->case_has_bathroom,
                'bathroom_has_door' => $request->case_bathroom_has_door,
                'bathroom_has_basin' => $request->case_bathroom_has_basin,
                'bathroom_has_toilet' => $request->case_bathroom_has_toilet,
                'bathroom_roof' => $request->case_bathroom_roof,
                'bathroom_wall' => $request->case_bathroom_wall,
                'bathroom_floor' => $request->case_bathroom_floor,
                'amenities_mattress' => $request->case_amenities_mattress,
                'amenities_bed' => $request->case_amenities_bed,
                'amenities_fans' => $request->case_amenities_fans,
                'amenities_blankets' => $request->case_amenities_blankets,
                'amenities_stove' => $request->case_amenities_stove,
                'amenities_oven' => $request->case_amenities_oven,
                'amenities_flame' => $request->case_amenities_flame,
                'amenities_heater' => $request->case_amenities_heater,
                'amenities_fridge' => $request->case_amenities_fridge,
                'amenities_washer' => $request->case_amenities_washer,
                'amenities_cupbord' => $request->case_amenities_cupbord,
                'amenities_nish' => $request->case_amenities_nish,
                'amenities_arika' => $request->case_amenities_arika,
                'amenities_table' => $request->case_amenities_table,
                'amenities_television' => $request->case_amenities_television,
                'amenities_receiver' => $request->case_amenities_receiver,
                'amenities_computer' => $request->case_amenities_computer,
                'need_water' => $request->case_need_water,
                'need_bathroom' => $request->case_need_bathroom,
                'need_roof' => $request->case_need_roof,
                'need_blankets' => $request->case_need_blankets,
                'need_construction' => $request->case_need_construction,
                'need_education' => $request->case_need_education,
                'need_food' => $request->case_need_food,
                'additional_notes' => $request->case_additional_notes,
                'case_need_project' => $request->case_need_project,
                'case_need_project_desc' => $request->case_need_project_desc,
                'case_assets_electric_meter_other' => $request->case_assets_electric_meter_other,
                'case_assets_pets_alternative' => $request->case_assets_pets_alternative,
                'case_assets_vehicle_alternative' => $request->case_assets_vehicle_alternative,
            ]);
        }
        return $case->id;
    }

    /**
     * update case status data
     */
    private function updateStatusesData (Request $request , $caseId)
    {

        // if(isset($request->status_date) && is_array($request->status_date)){

            $cases = CaseStatuses::where('case_id',$caseId)->get();

            foreach ($cases as $k => $case ) {
            //     if(!in_array($case['status'],$request->case_status) ){
                    $case->delete();
            //     }
            }
            
            $request->old_status_date = (is_array($request->old_status_date)) ? $request->old_status_date : [];
            $statusDates = array();
            foreach ($request->case_status as $status_key => $status_value) {
                $new_date = (isset($request->status_date) && is_array($request->status_date))? array_merge($request->old_status_date,$request->status_date) : $request->old_status_date ;
                foreach ($new_date as $date_key => $date_value) {
                    if($status_key == $date_key){
                        foreach ($date_value as $key => $value) {
                            if(!is_null($value)){
                                $statusDates[$value] = $status_value; 
                            }
                        }
                    }
                }
            }

            // var_dump(array_diff($request->case_status, $request->old_case_status));
            // var_dump($request->case_status);
            // var_dump($request->old_case_status);

            // // var_dump(array_merge($request->old_case_status,$request->case_status));
            // var_dump(array_merge($request->old_status_date,$request->status_date));
            // var_dump($request->status_date);
            // var_dump($request->old_status_date);

            // var_dump($statusDates);
            // die;


            foreach ($statusDates as $key => $value) {
                $status = CaseStatuses::create([
                                    'case_id' => $caseId ,
                                    'status' => $value,
                                    'date' => $key,
                                    ]);
            }
        // }
        return 'done status date';
    }

    /**
     * store case Partners data
     */
    private function updatePartnersData (Request $request , $caseId)
    {
        $partners = Partners::where('case_id', $caseId)->get();

        if(sizeof($partners)>0){
            for ($i = 0; $i < count($request->partner_name); $i++) {
                if (!isset($partners[$i])){    
                    if (strpos($request->partner_national_id_front[$i], 'base46')) {
                        $request->partner_national_id_front[$i] = base64_decode($request->partner_national_id_front[$i]);
                    }
                    if (strpos($request->partner_national_id_back[$i], 'base46')) {
                        $request->partner_national_id_back[$i] = base64_decode($request->partner_national_id_back[$i]);
                    }
                    $partner = Partners::create([
                        'case_id' => $caseId,
                        'name' => $request->partner_name[$i],
                        'gender' => $request->partner_gender[$i],
                        'age' => $request->partner_age[$i],
                        'national_id' => $request->partner_national_id[$i],
                        'relationship_status' => $request->partner_relationship_status[$i],
                        'education_status' => $request->partner_education_status[$i],
                        'work_status' => $request->partner_work_status[$i],
                        'profession' => $request->partner_profession[$i],
                        'national_id_front' => $request->partner_national_id_front[$i] ? $request->partner_national_id_front[$i]->store('/partners/national_id_front') : null,
                        'national_id_back' => $request->partner_national_id_back[$i] ? $request->partner_national_id_back[$i]->store('/partners/national_id_back') : null,
                        'phone' => $request->partner_phone[$i],
                        'is_ill' => $request->partner_is_ill[$i],
                        'illness_type' =>json_encode($request->partner_illness_type[$i]),
                        'illness_description' => $request->partner_illness_description[$i],
                        'illness_prevent_movement' => $request->partner_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->partner_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->partner_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->partner_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->partner_illness_affordable[$i],
                        'need_operation' => $request->partner_illness_need_operation[$i],
                        ]);

                }elseif (isset($partners[$i])&&!is_null($partners[$i]) && !empty($partners[$i])){
                    $partners[$i]->update([
                        'case_id' => $caseId,
                        'name' => $request->partner_name[$i],
                        'gender' => $request->partner_gender[$i],
                        'age' => $request->partner_age[$i],
                        'national_id' => $request->partner_national_id[$i],
                        'relationship_status' => $request->partner_relationship_status[$i],
                        'education_status' => $request->partner_education_status[$i],
                        'work_status' => $request->partner_work_status[$i],
                        'profession' => $request->partner_profession[$i],
                        'national_id_front' => $request->partner_national_id_front[$i] ? $request->partner_national_id_front[$i]->store('/partners/national_id_front') : $partners[$i]->national_id_front,
                        'national_id_back' => $request->partner_national_id_back[$i] ? $request->partner_national_id_back[$i]->store('/partners/national_id_back') : $partners[$i]->national_id_back,
                        'phone' => $request->partner_phone[$i],
                        'is_ill' => $request->partner_is_ill[$i],
                        'illness_type' => json_encode($request->partner_illness_type[$i]),
                        'illness_description' => $request->partner_illness_description[$i],
                        'illness_prevent_movement' => $request->partner_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->partner_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->partner_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->partner_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->partner_illness_affordable[$i],
                        'need_operation' => $request->partner_illness_need_operation[$i],
                    ]);
                }
        
            }

            // Removing Partner while updating case -> by shrouk
            if ( sizeof($partners) > count($request->partner_name)){
                $c = sizeof($partners) - count($request->partner_name);
                for ($j=0; $j < $c; $j++) { 
                    $partner = Partners::find($partners[count($request->partner_name)+$j]->id);
                    $partner->delete();
                }
                
            }

        }elseif (sizeof($partners)==0 &&!is_null($request->partner_name) && !empty($request->partner_name)){
            for ($i = 0; $i < count($request->partner_name); $i++) {
                if (!is_null($request->partner_name) && !empty($request->partner_name)){
                    if (strpos($request->partner_national_id_front[$i], 'base46')) {
                        $request->partner_national_id_front[$i] = base64_decode($request->partner_national_id_front[$i]);
                    }
                    if (strpos($request->partner_national_id_back[$i], 'base46')) {
                        $request->partner_national_id_back[$i] = base64_decode($request->partner_national_id_back[$i]);
                    }
                    $partner = Partners::create([
                        'case_id' => $caseId,
                        'name' => $request->partner_name[$i],
                        'gender' => $request->partner_gender[$i],
                        'age' => $request->partner_age[$i],
                        'national_id' => $request->partner_national_id[$i],
                        'relationship_status' => $request->partner_relationship_status[$i],
                        'education_status' => $request->partner_education_status[$i],
                        'work_status' => $request->partner_work_status[$i],
                        'profession' => $request->partner_profession[$i],
                        'national_id_front' => $request->partner_national_id_front[$i] ? $request->partner_national_id_front[$i]->store('/partners/national_id_front') : null,
                        'national_id_back' => $request->partner_national_id_back[$i] ? $request->partner_national_id_back[$i]->store('/partners/national_id_back') : null,
                        'phone' => $request->partner_phone[$i],
                        'is_ill' => $request->partner_is_ill[$i],
                        'illness_type' => json_encode($request->partner_illness_type[$i]),
                        'illness_description' => $request->partner_illness_description[$i],
                        'illness_prevent_movement' => $request->partner_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->partner_illness_need_monthly_treatment[$i],
                        'has_national_support' => $request->partner_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->partner_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->partner_illness_affordable[$i],
                        'need_operation' => $request->partner_illness_need_operation[$i],
                    ]);
                }
            }
        }
     
        return 'done partners';
    }

    /**
     * update case childrens data
     */
    private function updateChildrenData (Request $request , $caseId)
    {
        $children = Children::where('case_id', $caseId)->get();

        if(sizeof($children)>0){
            for ($i = 0; $i < count($request->child_name); $i++) {
                if (!isset($children[$i])){    
                    if ($request->child_name[$i]!==null && !empty($request->child_name)){
                        $child = Children::create([
                        'case_id' => $caseId,
                        'name' => $request->child_name[$i],
                        'gender' => $request->child_gender[$i],
                        'age' => $request->child_age[$i],
                        'relationship_status' => $request->child_relationship_status[$i],
                        'education_status' => $request->child_education_status[$i],
                        'work_status' => $request->child_work_status[$i],
                        'profession' => $request->child_profession[$i],
                        'is_ill' => $request->child_is_ill[$i],
                        'illness_type' => !empty($request->child_illness_type[$i]) ?  json_encode($request->child_illness_type[$i]) : null ,
                        'illness_description' => $request->child_illness_description[$i],
                        'illness_prevent_movement' => $request->child_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->child_illness_need_monthly_support[$i],
                        'has_national_support' => $request->child_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->child_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->child_illness_affordable[$i],
                        'need_operation' => $request->child_illness_need_operation[$i],
                       ]);
                    }
                }elseif (isset($children[$i])&&!is_null($children[$i]) && !empty($children[$i])){
               
                    $children[$i]->update([
                        'case_id' => $caseId,
                        'name' => $request->child_name[$i],
                        'gender' => $request->child_gender[$i],
                        'age' => $request->child_age[$i],
                        'relationship_status' => $request->child_relationship_status[$i],
                        'education_status' => $request->child_education_status[$i],
                        'work_status' => $request->child_work_status[$i],
                        'profession' => $request->child_profession[$i],
                        'is_ill' => $request->child_is_ill[$i],
                        'illness_type' => !empty($request->child_illness_type[$i]) ?  json_encode($request->child_illness_type[$i]) : null ,
                        'illness_description' => $request->child_illness_description[$i],
                        'illness_prevent_movement' => $request->child_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->child_illness_need_monthly_support[$i],
                        'has_national_support' => $request->child_illness_is_national_support[$i],
                        'treatment_monthly_amount' => $request->child_illness_treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->child_illness_affordable[$i],
                        'need_operation' => $request->child_illness_need_operation[$i],
                    ]);
                }
            }

            // Removing Child while updating case -> by shrouk
            if ( sizeof($children) > count($request->child_name)){
                $c = sizeof($children) - count($request->child_name);
                for ($j=0; $j < $c; $j++) { 
                    $child = Children::find($children[count($request->child_name)+$j]->id);
                    $child->delete();
                }
                
            }
        }elseif (sizeof($children)==0 &&!is_null($request->child_name) && !empty($request->child_name)){
            for ($i = 0; $i < count($request->child_name); $i++) {
                $child = Children::create([
                    'case_id' => $caseId,
                    'name' => $request->child_name[$i],
                    'gender' => $request->child_gender[$i],
                    'age' => $request->child_age[$i],
                    'relationship_status' => $request->child_relationship_status[$i],
                    'education_status' => $request->child_education_status[$i],
                    'work_status' => $request->child_work_status[$i],
                    'profession' => $request->child_profession[$i],
                    'is_ill' => $request->child_is_ill[$i],
                    'illness_type' => !empty($request->child_illness_type[$i]) ?  json_encode($request->child_illness_type[$i]) : null ,
                    'illness_description' => $request->child_illness_description[$i],
                    'illness_prevent_movement' => $request->child_illness_prevent_movement[$i],
                    'need_monthly_treatment' => $request->child_illness_need_monthly_support[$i],
                    'has_national_support' => $request->child_illness_is_national_support[$i],
                    'treatment_monthly_amount' => $request->child_illness_treatment_monthly_amount[$i],
                    'treatment_affordable' => $request->child_illness_affordable[$i],
                    'need_operation' => $request->child_illness_need_operation[$i],
                   ]);
            }
        }

        
        return 'done children';
    }

    /**
     * update case roommates data
     */
    private function updateRoommatesData (Request $request , $caseId)
    {
        $roommates = Roommates::where('case_id', $caseId)->get();
        if(sizeof($roommates)>0){
            for ($i = 0; $i < count($request->roommate_name); $i++) {
                if (!isset($roommates[$i])){    

                         # code...
                    if ($request->roommate_name[$i]!==null && !empty($request->roommate_name)){
                        $roommate = Roommates::create([
                           'case_id' => $caseId,
                            'name' => $request->roommate_name[$i],
                            'gender' => $request->roommate_gender[$i],
                            'age' => $request->roommate_age[$i],
                            'relationship_status' => $request->roommate_relationship_status[$i],
                            'education_status' => $request->roommate_education_status[$i],
                            'work_status' => $request->roommate_work_status[$i],
                            'profession' => $request->roommate_profession[$i],
                            'relativity' => ($request->roommate_relativity[$i] == 'أخرى')? $request->roommate_relativity_other : $request->roommate_relativity[$i],
                            'is_ill' => $request->roommate_is_ill[$i],
                            'illness_type' => json_encode($request->roommate_illness_type[$i]),
                            'illness_description' => $request->roommate_illness_description[$i],
                            'illness_prevent_movement' => $request->roommate_illness_prevent_movement[$i],
                            'need_monthly_treatment' => $request->roommate_illness_need_monthly_support[$i],
                            'has_national_support' => $request->has_national_support[$i],
                            'treatment_monthly_amount' => $request->treatment_monthly_amount[$i],
                            'treatment_affordable' => $request->treatment_affordable[$i],
                            'need_operation' => $request->roommate_illness_need_operation[$i],
                        ]);
                    }
                }elseif (isset($roommates[$i])&&!is_null($roommates[$i]) && !empty($roommates[$i])){
               
                    $roommates[$i]->update([
                        'case_id' => $caseId,
                        'name' => $request->roommate_name[$i],
                        'gender' => $request->roommate_gender[$i],
                        'age' => $request->roommate_age[$i],
                        'relationship_status' => $request->roommate_relationship_status[$i],
                        'education_status' => $request->roommate_education_status[$i],
                        'work_status' => $request->roommate_work_status[$i],
                        'profession' => $request->roommate_profession[$i],
                        'relativity' => ($request->roommate_relativity[$i] == 'أخرى')? $request->roommate_relativity_other : $request->roommate_relativity[$i],
                        'is_ill' => $request->roommate_is_ill[$i],
                        'illness_type' => json_encode($request->roommate_illness_type[$i]),
                        'illness_description' => $request->roommate_illness_description[$i],
                        'illness_prevent_movement' => $request->roommate_illness_prevent_movement[$i],
                        'need_monthly_treatment' => $request->roommate_illness_need_monthly_support[$i],
                        'has_national_support' => $request->has_national_support[$i],
                        'treatment_monthly_amount' => $request->treatment_monthly_amount[$i],
                        'treatment_affordable' => $request->treatment_affordable[$i],
                        'need_operation' => $request->roommate_illness_need_operation[$i],
                    ]);
                }
            }

            // Removing Rommate while updating case -> by shrouk
            if ( sizeof($roommates) > count($request->roommate_name)){
                $c = sizeof($roommates) - count($request->roommate_name);
                for ($j=0; $j < $c; $j++) { 
                    $partner = Roommates::find($roommates[count($request->roommate_name)+$j]->id);
                    $partner->delete();
                }
                
            }
        }elseif (sizeof($roommates)==0 &&!is_null($request->roommate_name) && !empty($request->roommate_name)){
            for ($i = 0; $i < count($request->roommate_name); $i++) {

                $roommate = Roommates::create([
                    'case_id' => $caseId,
                    'name' => $request->roommate_name[$i],
                    'gender' => $request->roommate_gender[$i],
                    'age' => $request->roommate_age[$i],
                    'relationship_status' => $request->roommate_relationship_status[$i],
                    'education_status' => $request->roommate_education_status[$i],
                    'work_status' => $request->roommate_work_status[$i],
                    'profession' => $request->roommate_profession[$i],
                    'relativity' => ($request->roommate_relativity[$i] == 'أخرى')? $request->roommate_relativity_other : $request->roommate_relativity[$i],
                    'is_ill' => $request->roommate_is_ill[$i],
                    'illness_type' => json_encode($request->roommate_illness_type[$i]),
                    'illness_description' => $request->roommate_illness_description[$i],
                    'illness_prevent_movement' => $request->roommate_illness_prevent_movement[$i],
                    'need_monthly_treatment' => $request->roommate_illness_need_monthly_support[$i],
                    'has_national_support' => $request->has_national_support[$i],
                    'treatment_monthly_amount' => $request->treatment_monthly_amount[$i],
                    'treatment_affordable' => $request->treatment_affordable[$i],
                    'need_operation' => $request->roommate_illness_need_operation[$i],
                ]);
            }
        }
        
        return 'done roommates';
    }


    /**
     * update incomes
     */
    private function updateIncomeData (Request $request , $caseId)
    {
        $income = Income::where('case_id', $caseId)->get();
        if(sizeof($income)>0){
            for ($i = 0; $i < count($request->income_source_type); $i++) {
                if (!isset($income[$i])){  
                    if (!is_null($request->income_source_type[$i])&& !empty($request->income_source_type)){
                        $income1 = Income::create([
                            'case_id' => $caseId,
                            'source_type' => $request->income_source_type[$i],
                            'notes' => $request->income_notes[$i],
                            'monthly_amount' => $request->income_monthly_amount[$i],
                            'source_flow' => $request->income_source_flow[$i],
                        ]);
                    }
                }elseif (isset($income[$i])&&!is_null($income[$i]) && !empty($income[$i])){
                    $income[$i]->update([
                        'case_id' => $caseId,
                        'source_type' => $request->income_source_type[$i],
                        'notes' => $request->income_notes[$i],
                        'monthly_amount' => $request->income_monthly_amount[$i],
                        'source_flow' => $request->income_source_flow[$i],
                    ]);
                }
            }

            // Removing Income while updating case -> by shrouk
            if ( sizeof($income) > count($request->income_source_type)){
                $c = sizeof($income) - count($request->income_source_type);
                for ($j=0; $j < $c; $j++) { 
                    $income = Income::find($income[count($request->income_source_type)+$j]->id);
                    $income->delete();
                }
                
            }

        }elseif (sizeof($income)==0 &&!is_null($request->income_source_type) && !empty($request->income_source_type)){
            for ($i = 0; $i < count($request->income_source_type); $i++) {
                $income = Income::create([
                    'case_id' => $caseId,
                    'source_type' => $request->income_source_type[$i],
                    'notes' => $request->income_notes[$i],
                    'monthly_amount' => $request->income_monthly_amount[$i],
                    'source_flow' => $request->income_source_flow[$i],
                ]);
            }
        }
            
        return 'done income';
    }

    /**
     * update Support data
     */
    private function updateSupportData (Request $request , $caseId)
    {
        $support = Support::where('case_id', $caseId)->get();
        if(sizeof($support)>0){
            for ($i = 0; $i < count($request->support_source_category); $i++) {
                if (!isset($support[$i])){  
                    if ($request->support_source_category[$i]!==null && !empty($request->support_source_category)){
                        $support1 = Support::create([
                            'case_id' => $caseId,
                            'source_category' => ($request->support_source_category[$i] !== "أخرى") ? $request->support_source_category[$i] : $request->support_source_category_other[$i],
                            'source_name' => ($request->support_source_name[$i] !== "أخرى") ? $request->support_source_name[$i] : $request->support_source_name_other[$i],
                            'type' => ($request->support_type[$i] !== "أخرى") ? $request->support_type[$i] : $request->support_type_other[$i],
                            'period' => ($request->support_period[$i] !== "أخرى") ? $request->support_period[$i] : $request->support_period_other[$i],
                        ]);
                    }    

                }elseif (isset($support[$i])&&!is_null($support[$i]) && !empty($support[$i])){
                    if($request->support_source_category[$i]!==null){
                        $support[$i]->update([
                            'case_id' => $caseId,
                            'source_category' => ($request->support_source_category[$i] !== "أخرى") ? $request->support_source_category[$i] : $request->support_source_category_other[$i],
                            'source_name' => ($request->support_source_name[$i] !== "أخرى") ? $request->support_source_name[$i] : $request->support_source_name_other[$i],
                            'type' => ($request->support_type[$i] !== "أخرى") ? $request->support_type[$i] : $request->support_type_other[$i],
                            'period' => ($request->support_period[$i] !== "أخرى") ? $request->support_period[$i] : $request->support_period_other[$i],
                        ]);
                    }else{
                        $support[$i]->delete();
                    }
                }
            }

            // Removing Support while updating case -> by shrouk
            if ( sizeof($support) > count($request->support_source_category)){
                $c = sizeof($support) - count($request->support_source_category);
                for ($j=0; $j < $c; $j++) { 
                    $support = Support::find($support[count($request->support_source_category)+$j]->id);
                    $support->delete();
                }
            }

        }elseif (sizeof($support)==0 &&!is_null($request->support_source_category) && !empty($request->support_source_category)){
              for ($i = 0; $i < count($request->support_source_category); $i++) {
                if ($request->support_source_category[$i]!==null && !empty($request->support_source_category)){
                    $support = Support::create([
                    'case_id' => $caseId,
                    'source_category' => ($request->support_source_category[$i] !== "أخرى") ? $request->support_source_category[$i] : $request->support_source_category_other[$i],
                    'source_name' => ($request->support_source_name[$i] !== "أخرى") ? $request->support_source_name[$i] : $request->support_source_name_other[$i],
                    'type' => ($request->support_type[$i] !== "أخرى") ? $request->support_type[$i] : $request->support_type_other[$i],
                    'period' => ($request->support_period[$i] !== "أخرى") ? $request->support_period[$i] : $request->support_period_other[$i],
                ]);
                }            
            }
        }
        return 'done support';
    }

    /**
     * update debts
     */
    private function updateDebtsData (Request $request , $caseId)
    {
        $debts = Debts::where('case_id', $caseId)->get();
        if(sizeof($debts)>0){
            for ($i = 0; $i < count($request->debts_amount); $i++) {
                if (!isset($debts[$i])){ 
                    if (!is_null($request->debts_amount[$i])&& !empty($request->debts_amount)){
                        $debt = Debts::create([
                            'case_id' => $caseId,
                            'amount' => $request->debts_amount[$i],
                            'stay' => $request->debts_stay[$i],
                            'reason' => $request->debts_reason[$i],
                            'refund_method' => $request->debts_refund_method[$i],
                            'monthly_amount' => $request->debts_monthly_amount[$i],
                        ]);
                    }
                }elseif (isset($debts[$i])&&!is_null($debts[$i]) && !empty($debts[$i])){
                    $debts[$i]->update([
                        'case_id' => $caseId,
                        'amount' => $request->debts_amount[$i],
                        'stay' => $request->debts_stay[$i],
                        'reason' => $request->debts_reason[$i],
                        'refund_method' => $request->debts_refund_method[$i],
                        'monthly_amount' => $request->debts_monthly_amount[$i],
                    ]);
                }
            }

            // Removing Debt while updating case -> by shrouk
            if ( sizeof($debts) > count($request->debts_amount)){
                $c = sizeof($debts) - count($request->debts_amount);
                for ($j=0; $j < $c; $j++) { 
                    $partner = Debts::find($debts[count($request->debts_amount)+$j]->id);
                    $partner->delete();
                }
                
            }
        }elseif (sizeof($debts)==0 &&!is_null($request->debts_amount) && !empty($request->debts_amount)){
             for ($i = 0; $i < count($request->debts_amount); $i++) {
                    $debts = Debts::create([
                        'case_id' => $caseId,
                        'amount' => $request->debts_amount[$i],
                        'stay' => $request->debts_stay[$i],
                        'reason' => $request->debts_reason[$i],
                        'refund_method' => $request->debts_refund_method[$i],
                        'monthly_amount' => $request->debts_monthly_amount[$i],
                    ]);
                
            }
        }
        return 'done debts';
    }

    /**
     * update rooms data
     */
    private function updateRoomsData (Request $request , $caseId)
    {
        $rooms = Rooms::where('case_id', $caseId)->get();
        if(sizeof($rooms)>0){
            for ($i = 0; $i < count($request->room_type); $i++) {
                if (!isset($rooms[$i])){ 
                    if (!is_null($request->room_type[$i])&& !empty($request->room_type)){
                        $room = Rooms::create([
                            "case_id" => $caseId,
                            'type' => $request->room_type[$i],
                            'roof_type' => $request->room_roof_type[$i],
                            'roof_status' => $request->room_roof_status[$i],
                            'paint' => $request->room_paint[$i],
                            'notes' => $request->room_notes[$i],
                        ]);
                    }
                }elseif (isset($rooms[$i])&&!is_null($rooms[$i]) && !empty($rooms[$i])){
                    $rooms[$i]->update([
                        "case_id" => $caseId,
                        'type' => $request->room_type[$i],
                        'roof_type' => $request->room_roof_type[$i],
                        'roof_status' => $request->room_roof_status[$i],
                        'paint' => $request->room_paint[$i],
                        'notes' => $request->room_notes[$i],
                    ]);
                }
            }

            // Removing Room while updating case -> by shrouk
            if ( sizeof($rooms) > count($request->room_type)){
                $c = sizeof($rooms) - count($request->room_type);
                for ($j=0; $j < $c; $j++) { 
                    $room = Rooms::find($rooms[count($request->room_type)+$j]->id);
                    $room->delete();
                }
                
            }
        }elseif (sizeof($rooms)==0 &&!is_null($request->room_type) && !empty($request->room_type)){
            for ($i = 0; $i < count($request->room_type); $i++) {
                $room = Rooms::create([
                    "case_id" => $caseId,
                    'type' => $request->room_type[$i],
                    'roof_type' => $request->room_roof_type[$i],
                    'roof_status' => $request->room_roof_status[$i],
                    'paint' => $request->room_paint[$i],
                    'notes' => $request->room_notes[$i],
                ]);  
            }
        }
        return 'done rooms';
    }

    public function destroy(Request $request, $id)
    {

         $case = Cases::find($id);
         $case->delete();
         return back();
    }

    
}
