<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Form;
use Html;
use DB;
use App\Cases;
use App\Children;
use App\Partners;
use App\Roommates;
use App\Income;
use App\Support;
use App\Debts;
use App\Rooms;

class SearchController extends Controller
{

	public function index()
	{
		return view('partials.search.index');
	}

	function search(Request $request)
	{
        $choices = [];
        $temp = $request->inputs_data;
        foreach ($temp as $choice){
            if ($choice != ''){
                $elements =  explode(':',$choice);
                $choices[$elements[0]] = $elements[1];
            }
        }

//        return $choices;
		$html = '';
        $results = Cases::orderBy('created_at', 'DESC')->with(['partners', 'children', 'roommates', 'income', 'support', 'debts', 'rooms']);

        if(isset($choices['case_status']) && !is_null($choices['case_status']) && !empty($choices['case_status'])){
		    $results = $results->where('status', $choices['case_status']);
        }

        if(isset($choices['case_governorate']) && !is_null($choices['case_governorate']) && !empty($choices['case_governorate'])){
		    $results = $results->where('governorate', $choices['case_governorate']);
        }

        if(isset($choices['case_city']) && !is_null($choices['case_city']) && !empty($choices['case_city'])){
		    $results = $results->where('city',  $choices['case_city']);
        }
        if(isset($choices['case_district']) && !is_null($choices['case_district']) && !empty($choices['case_district'])){
		    $results = $results->where('district', $choices['case_district']);
        }
        if(isset($choices['case_following']) && !is_null($choices['case_following']) && !empty($choices['case_following'])){
		    $results = $results->where('following', 'LIKE', "%{$choices['case_following']}%");
        }

        if(isset($choices['case_real_date']) && !is_null($choices['case_real_date']) && !empty($choices['case_real_date'])){
		    $results = $results->where('real_date', $choices['case_real_date']);
        }

        if(isset($choices['case_name']) && !is_null($choices['case_name']) && !empty($choices['case_name'])){
            $results = $results->where('name', 'LIKE',"%{$choices['case_name']}%");
        }
        if(isset($choices['case_gender']) && !is_null($choices['case_gender']) && !empty($choices['case_gender'])){
		    $results = $results->where('gender', $choices['case_gender']);
        }
        if(isset($choices['case_age']) && !is_null($choices['case_age']) && !empty($choices['case_age'])){
		    $results = $results->where('age', $choices['case_age']);
        }
        if(isset($choices['case_national_id']) && !is_null($choices['case_national_id']) && !empty($choices['case_national_id'])){
		    $results = $results->where('national_id', $choices['case_national_id']);
        }
        if(isset($choices['case_relationship_status']) && !is_null($choices['case_relationship_status']) && !empty($choices['case_relationship_status'])){
		    $results = $results->where('relationship_status', $choices['case_relationship_status']);
        }
        if(isset($choices['case_education_status']) && !is_null($choices['case_education_status']) && !empty($choices['case_education_status'])){
		    $results = $results->where('education_status', $choices['case_education_status']);
        }
        if(isset($choices['case_profession']) && !is_null($choices['case_profession']) && !empty($choices['case_profession'])){
		    $results = $results->where('profession', 'LIKE', "%{$choices['case_profession']}%");
        }
        if(isset($choices['case_phone']) && !is_null($choices['case_phone']) && !empty($choices['case_phone'])){
		    $results = $results->where('phone', $choices['case_phone']);
        }
        if(isset($choices['case_is_ill']) && !is_null($choices['case_is_ill']) && !empty($choices['case_is_ill'])){
		    $results = $results->where('is_ill', $choices['case_is_ill']);
        }
        if(isset($choices['case_illness_type']) && !is_null($choices['case_illness_type']) && !empty($choices['case_illness_type'])){
		    $results = $results->where('illness_type', $choices['case_illness_type']);
        }
        if(isset($choices['case_illness_prevent_movement']) && !is_null($choices['case_illness_prevent_movement']) && !empty($choices['case_illness_prevent_movement'])){
		    $results = $results->where('illness_prevent_movement', $choices['case_illness_prevent_movement']);
        }
        if(isset($choices['case_need_monthly_treatment']) && !is_null($choices['case_need_monthly_treatment']) && !empty($choices['case_need_monthly_treatment'])){
		    $results = $results->where('need_monthly_treatment', $choices['case_need_monthly_treatment']);
        }
        if(isset($choices['case_has_national_support']) && !is_null($choices['case_has_national_support']) && !empty($choices['case_has_national_support'])){
		    $results = $results->where('has_national_support', $choices['case_has_national_support']);
        }
        if(isset($choices['case_treatment_monthly_amount']) && !is_null($choices['case_treatment_monthly_amount']) && !empty($choices['case_treatment_monthly_amount'])){
		    $results = $results->where('treatment_monthly_amount', $choices['case_treatment_monthly_amount']);
        }
        if(isset($choices['case_treatment_affordable']) && !is_null($choices['case_treatment_affordable']) && !empty($choices['case_treatment_affordable'])){
		    $results = $results->where('treatment_affordable', $choices['case_treatment_affordable']);
        }
        if(isset($choices['case_need_operation']) && !is_null($choices['case_need_operation']) && !empty($choices['case_need_operation'])){
		    $results = $results->where('need_operation', $choices['case_need_operation']);
        }

        if(isset($choices['case_income_amount']) && !is_null($choices['case_income_amount']) && !empty($choices['case_income_amount'])){
		    $results = $results->where('income_amount', 'LIKE', "%{$choices['case_income_amount']}%");
        }
        if(isset($choices['case_income_amount_category']) && !is_null($choices['case_income_amount_category']) && !empty($choices['case_income_amount_category'])){
		    $results = $results->where('income_amount_category', $choices['case_income_amount_category']);
        }
        if(isset($choices['case_income_source_count']) && !is_null($choices['case_income_source_count']) && !empty($choices['case_income_source_count'])){
		    $results = $results->where('income_source_count', $choices['case_income_source_count']);
        }
        if(isset($choices['case_support_count']) && !is_null($choices['case_support_count']) && !empty($choices['case_support_count'])){
		    $results = $results->where('support_count', $choices['case_support_count']);
        }
        if(isset($choices['case_debts_total']) && !is_null($choices['case_debts_total']) && !empty($choices['case_debts_total'])){
		    $results = $results->where('debts_total', 'LIKE', "%{$choices['case_debts_total']}%");
        }
        if(isset($choices['case_debts_total_range']) && !is_null($choices['case_debts_total_range']) && !empty($choices['case_debts_total_range'])){
		    $results = $results->where('debts_total_range', $choices['case_debts_total_range']);
        }
        if(isset($choices['case_expenses_house_rent']) && !is_null($choices['case_expenses_house_rent']) && !empty($choices['case_expenses_house_rent'])){
		    $results = $results->where('expenses_house_rent', $choices['case_expenses_house_rent']);
        }
        if(isset($choices['case_expenses_farm_rent']) && !is_null($choices['case_expenses_farm_rent']) && !empty($choices['case_expenses_farm_rent'])){
		    $results = $results->where('expenses_farm_rent', $choices['case_expenses_farm_rent']);
        }
        if(isset($choices['case_expenses_treatment']) && !is_null($choices['case_expenses_treatment']) && !empty($choices['case_expenses_treatment'])){
		    $results = $results->where('expenses_treatment', $choices['case_expenses_treatment']);
        }
        if(isset($choices['case_expenses_detergent']) && !is_null($choices['case_expenses_detergent']) && !empty($choices['case_expenses_detergent'])){
		    $results = $results->where('expenses_detergent', $choices['case_expenses_detergent']);
        }
        if(isset($choices['case_expenses_school_subscription']) && !is_null($choices['case_expenses_school_subscription']) && !empty($choices['case_expenses_school_subscription'])){
		    $results = $results->where('expenses_school_subscription', $choices['case_expenses_school_subscription']);
        }
        if(isset($choices['case_expenses_child_course']) && !is_null($choices['case_expenses_child_course']) && !empty($choices['case_expenses_child_course'])){
		    $results = $results->where('expenses_child_course', $choices['case_expenses_child_course']);
        }
        if(isset($choices['case_expenses_water_receipt']) && !is_null($choices['case_expenses_water_receipt']) && !empty($choices['case_expenses_water_receipt'])){
		    $results = $results->where('expenses_water_receipt', $choices['case_expenses_water_receipt']);
        }
        if(isset($choices['case_expenses_electricity_receipt']) && !is_null($choices['case_expenses_electricity_receipt']) && !empty($choices['case_expenses_electricity_receipt'])){
		    $results = $results->where('expenses_electricity_receipt', $choices['case_expenses_electricity_receipt']);
        }
        if(isset($choices['case_expenses_clothes']) && !is_null($choices['case_expenses_clothes']) && !empty($choices['case_expenses_clothes'])){
		    $results = $results->where('expenses_clothes', $choices['case_expenses_clothes']);
        }
        if(isset($choices['case_expenses_phone_credit']) && !is_null($choices['case_expenses_phone_credit']) && !empty($choices['case_expenses_phone_credit'])){
		    $results = $results->where('expenses_phone_credit', $choices['case_expenses_phone_credit']);
        }
        if(isset($choices['case_expenses_debts']) && !is_null($choices['case_expenses_debts']) && !empty($choices['case_expenses_debts'])){
		    $results = $results->where('expenses_debts', $choices['case_expenses_debts']);
        }
        if(isset($choices['case_expenses_transportation']) && !is_null($choices['case_expenses_transportation']) && !empty($choices['case_expenses_transportation'])){
		    $results = $results->where('expenses_transportation', $choices['case_expenses_transportation']);
        }
        if(isset($choices['case_expenses_pets_food']) && !is_null($choices['case_expenses_pets_food']) && !empty($choices['case_expenses_pets_food'])){
		    $results = $results->where('expenses_pets_food', $choices['case_expenses_pets_food']);
        }
        if(isset($choices['case_expenses_smoking']) && !is_null($choices['case_expenses_smoking']) && !empty($choices['case_expenses_smoking'])){
		    $results = $results->where('expenses_smoking', $choices['case_expenses_smoking']);
        }
        if(isset($choices['case_expenses_food']) && !is_null($choices['case_expenses_food']) && !empty($choices['case_expenses_food'])){
		    $results = $results->where('expenses_food', $choices['case_expenses_food']);
        }
        if(isset($choices['case_expenses_other']) && !is_null($choices['case_expenses_other']) && !empty($choices['case_expenses_other'])){
		    $results = $results->where('expenses_other', $choices['case_expenses_other']);
        }
        if(isset($choices['case_expenses_total_category']) && !is_null($choices['case_expenses_total_category']) && !empty($choices['case_expenses_total_category'])){
		    $results = $results->where('expenses_total_category', $choices['case_expenses_total_category']);
        }
        if(isset($choices['case_expenses_total']) && !is_null($choices['case_expenses_total']) && !empty($choices['case_expenses_total'])){
		    $results = $results->where('expenses_total', $choices['case_expenses_total']);
        }
        if(isset($choices['case_assets_house_type']) && !is_null($choices['case_assets_house_type']) && !empty($choices['case_assets_house_type'])){
		    $results = $results->where('assets_house_type', $choices['case_assets_house_type']);
        }
        if(isset($choices['case_assets_house_status']) && !is_null($choices['case_assets_house_status']) && !empty($choices['case_assets_house_status'])){
		    $results = $results->where('assets_house_status', $choices['case_assets_house_status']);
        }
        if(isset($choices['case_assets_house_price']) && !is_null($choices['case_assets_house_price']) && !empty($choices['case_assets_house_price'])){
		    $results = $results->where('assets_house_price', $choices['case_assets_house_price']);
        }
        if(isset($choices['case_assets_house_paying_source']) && !is_null($choices['case_assets_house_paying_source']) && !empty($choices['case_assets_house_paying_source'])){
		    $results = $results->where('assets_house_paying_source', $choices['case_assets_house_paying_source']);
        }
        if(isset($choices['case_assets_electric_meter']) && !is_null($choices['case_assets_electric_meter']) && !empty($choices['case_assets_electric_meter'])){
		    $results = $results->where('assets_electric_meter', $choices['case_assets_electric_meter']);
        }
        if(isset($choices['case_assets_water_meter']) && !is_null($choices['case_assets_water_meter']) && !empty($choices['case_assets_water_meter'])){
		    $results = $results->where('assets_water_meter', $choices['case_assets_water_meter']);
        }
        if(isset($choices['case_assets_water_alternative']) && !is_null($choices['case_assets_water_alternative']) && !empty($choices['case_assets_water_alternative'])){
		    $results = $results->where('assets_water_alternative', $choices['case_assets_water_alternative']);
        }
        if(isset($choices['case_assets_farm']) && !is_null($choices['case_assets_farm']) && !empty($choices['case_assets_farm'])){
		    $results = $results->where('assets_farm', $choices['case_assets_farm']);
        }
        if(isset($choices['case_assets_pets']) && !is_null($choices['case_assets_pets']) && !empty($choices['case_assets_pets'])){
		    $results = $results->where('assets_pets', $choices['case_assets_pets']);
        }
        if(isset($choices['case_assets_vehicle']) && !is_null($choices['case_assets_vehicle']) && !empty($choices['case_assets_vehicle'])){
		    $results = $results->where('assets_vehicle', $choices['case_assets_vehicle']);
        }
        if(isset($choices['case_assets_house_alternative_status']) && !is_null($choices['case_assets_house_alternative_status']) && !empty($choices['case_assets_house_alternative_status'])){
		    $results = $results->where('assets_house_alternative_status', $choices['case_assets_house_alternative_status']);
        }
        if(isset($choices['case_assets_house_alternative_resident']) && !is_null($choices['case_assets_house_alternative_resident']) && !empty($choices['case_assets_house_alternative_resident'])){
		    $results = $results->where('assets_house_alternative_resident', 'LIKE', "%{$choices['case_assets_house_alternative_resident']}%");
        }
        if(isset($choices['case_assets_house_alternative_leave']) && !is_null($choices['case_assets_house_alternative_leave']) && !empty($choices['case_assets_house_alternative_leave'])){
		    $results = $results->where('assets_house_alternative_leave', 'LIKE', "%{$choices['case_assets_house_alternative_leave']}%");
        }
        if(isset($choices['case_assets_house_construction']) && !is_null($choices['case_assets_house_construction']) && !empty($choices['case_assets_house_construction'])){
		    $results = $results->where('assets_house_construction', $choices['case_assets_house_construction']);
        }
        if(isset($choices['case_assets_house_floors_count']) && !is_null($choices['case_assets_house_floors_count']) && !empty($choices['case_assets_house_floors_count'])){
		    $results = $results->where('assets_house_floors_count', $choices['case_assets_house_floors_count']);
        }
        if(isset($choices['case_assets_house_rooms_count']) && !is_null($choices['case_assets_house_rooms_count']) && !empty($choices['case_assets_house_rooms_count'])){
		    $results = $results->where('assets_house_rooms_count', $choices['case_assets_house_rooms_count']);
        }
        if(isset($choices['case_has_bathroom']) && !is_null($choices['case_has_bathroom']) && !empty($choices['case_has_bathroom'])){
		    $results = $results->where('has_bathroom', $choices['case_has_bathroom']);
        }
        if(isset($choices['case_bathroom_has_door']) && !is_null($choices['case_bathroom_has_door']) && !empty($choices['case_bathroom_has_door'])){
		    $results = $results->where('bathroom_has_door', $choices['case_bathroom_has_door']);
        }
        if(isset($choices['case_bathroom_has_basin']) && !is_null($choices['case_bathroom_has_basin']) && !empty($choices['case_bathroom_has_basin'])){
		    $results = $results->where('bathroom_has_basin', $choices['case_bathroom_has_basin']);
        }
        if(isset($choices['case_bathroom_has_toilet']) && !is_null($choices['case_bathroom_has_toilet']) && !empty($choices['case_bathroom_has_toilet'])){
		    $results = $results->where('bathroom_has_toilet', $choices['case_bathroom_has_toilet']);
        }
        if(isset($choices['case_bathroom_roof']) && !is_null($choices['case_bathroom_roof']) && !empty($choices['case_bathroom_roof'])){
		    $results = $results->where('bathroom_roof', $choices['case_bathroom_roof']);
        }
        if(isset($choices['case_bathroom_wall']) && !is_null($choices['case_bathroom_wall']) && !empty($choices['case_bathroom_wall'])){
		    $results = $results->where('bathroom_wall', $choices['case_bathroom_wall']);
        }
        if(isset($choices['case_bathroom_floor']) && !is_null($choices['case_bathroom_floor']) && !empty($choices['case_bathroom_floor'])){
		    $results = $results->where('bathroom_floor', $choices['case_bathroom_floor']);
        }
        if(isset($choices['case_amenities_mattress']) && !is_null($choices['case_amenities_mattress']) && !empty($choices['case_amenities_mattress'])){
		    $results = $results->where('amenities_mattress', $choices['case_amenities_mattress']);
        }
        if(isset($choices['case_amenities_bed']) && !is_null($choices['case_amenities_bed']) && !empty($choices['case_amenities_bed'])){
		    $results = $results->where('amenities_bed', $choices['case_amenities_bed']);
        }
        if(isset($choices['case_amenities_fans']) && !is_null($choices['case_amenities_fans']) && !empty($choices['case_amenities_fans'])){
		    $results = $results->where('amenities_fans', $choices['case_amenities_fans']);
        }
        if(isset($choices['case_amenities_blankets']) && !is_null($choices['case_amenities_blankets']) && !empty($choices['case_amenities_blankets'])){
		    $results = $results->where('amenities_blankets', $choices['case_amenities_blankets']);
        }
        if(isset($choices['case_amenities_stove']) && !is_null($choices['case_amenities_stove']) && !empty($choices['case_amenities_stove'])){
		    $results = $results->where('amenities_stove', $choices['case_amenities_stove']);
        }
        if(isset($choices['case_amenities_oven']) && !is_null($choices['case_amenities_oven']) && !empty($choices['case_amenities_oven'])){
		    $results = $results->where('amenities_oven', $choices['case_amenities_oven']);
        }
        if(isset($choices['case_amenities_flame']) && !is_null($choices['case_amenities_flame']) && !empty($choices['case_amenities_flame'])){
		    $results = $results->where('amenities_flame', $choices['case_amenities_flame']);
        }
        if(isset($choices['case_amenities_heater']) && !is_null($choices['case_amenities_heater']) && !empty($choices['case_amenities_heater'])){
		    $results = $results->where('amenities_heater', $choices['case_amenities_heater']);
        }
        if(isset($choices['case_amenities_fridge']) && !is_null($choices['case_amenities_fridge']) && !empty($choices['case_amenities_fridge'])){
		    $results = $results->where('amenities_fridge', $choices['case_amenities_fridge']);
        }
        if(isset($choices['case_amenities_washer']) && !is_null($choices['case_amenities_washer']) && !empty($choices['case_amenities_washer'])){
		    $results = $results->where('amenities_washer', $choices['case_amenities_washer']);
        }
        if(isset($choices['case_amenities_cupbord']) && !is_null($choices['case_amenities_cupbord']) && !empty($choices['case_amenities_cupbord'])){
		    $results = $results->where('amenities_cupbord', $choices['case_amenities_cupbord']);
        }
        if(isset($choices['case_amenities_nish']) && !is_null($choices['case_amenities_nish']) && !empty($choices['case_amenities_nish'])){
		    $results = $results->where('amenities_nish', $choices['case_amenities_nish']);
        }
        if(isset($choices['case_amenities_arika']) && !is_null($choices['case_amenities_arika']) && !empty($choices['case_amenities_arika'])){
		    $results = $results->where('amenities_arika', $choices['case_amenities_arika']);
        }
        if(isset($choices['case_amenities_table']) && !is_null($choices['case_amenities_table']) && !empty($choices['case_amenities_table'])){
		    $results = $results->where('amenities_table', $choices['case_amenities_table']);
        }
        if(isset($choices['case_amenities_television']) && !is_null($choices['case_amenities_television']) && !empty($choices['case_amenities_television'])){
		    $results = $results->where('amenities_television', $choices['case_amenities_television']);
        }
        if(isset($choices['case_amenities_receiver']) && !is_null($choices['case_amenities_receiver']) && !empty($choices['case_amenities_receiver'])){
		    $results = $results->where('amenities_receiver', $choices['case_amenities_receiver']);
        }
        if(isset($choices['case_amenities_computer']) && !is_null($choices['case_amenities_computer']) && !empty($choices['case_amenities_computer'])){
		    $results = $results->where('amenities_computer', $choices['case_amenities_computer']);
        }
        if(isset($choices['case_need_water']) && !is_null($choices['case_need_water']) && !empty($choices['case_need_water'])){
		    $results = $results->where('need_water', $choices['case_need_water']);
        }
        if(isset($choices['case_need_bathroom']) && !is_null($choices['case_need_bathroom']) && !empty($choices['case_need_bathroom'])){
		    $results = $results->where('need_bathroom', $choices['case_need_bathroom']);
        }
        if(isset($choices['case_need_roof']) && !is_null($choices['case_need_roof']) && !empty($choices['case_need_roof'])){
		    $results = $results->where('need_roof', $choices['case_need_roof']);
        }
        if(isset($choices['case_need_blankets']) && !is_null($choices['case_need_blankets']) && !empty($choices['case_need_blankets'])){
		    $results = $results->where('need_blankets', $choices['case_need_blankets']);
        }
        if(isset($choices['case_need_construction']) && !is_null($choices['case_need_construction']) && !empty($choices['case_need_construction'])){
		    $results = $results->where('need_construction', $choices['case_need_construction']);
        }
        if(isset($choices['case_need_education']) && !is_null($choices['case_need_education']) && !empty($choices['case_need_education'])){
		    $results = $results->where('need_education', $choices['case_need_education']);
        }
        if(isset($choices['case_need_food']) && !is_null($choices['case_need_food']) && !empty($choices['case_need_food'])){
		    $results = $results->where('need_food', $choices['case_need_food']);
        }
        if(isset($choices['case_additional_notes']) && !is_null($choices['case_additional_notes']) && !empty($choices['case_additional_notes'])){
		    $results = $results->where('additional_notes', 'LIKE', "%{$choices['case_additional_notes']}%");
        }

        //partners related indexes
        if(isset($choices['partner_name']) && !is_null($choices['partner_name']) && !empty($choices['partner_name'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('name', 'LIKE', "%{$choices['partner_name']}%");
            });
        }
        if(isset($choices['partner_gender']) && !is_null($choices['partner_gender']) && !empty($choices['partner_gender'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('gender', 'LIKE', "%{$choices['partner_gender']}%");
            });
        }
        if(isset($choices['partner_age']) && !is_null($choices['partner_age']) && !empty($choices['partner_age'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('age', $choices['partner_age']);
            });
        }
        if(isset($choices['partner_national_id']) && !is_null($choices['partner_national_id']) && !empty($choices['partner_national_id'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('national_id', $choices['partner_national_id']);
            });
        }
        if(isset($choices['partner_relationship_status']) && !is_null($choices['partner_relationship_status']) && !empty($choices['partner_relationship_status'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('relationship_status', $choices['partner_relationship_status']);
            });
        }
        if(isset($choices['partner_education_status']) && !is_null($choices['partner_education_status']) && !empty($choices['partner_education_status'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('education_status', $choices['partner_education_status']);
            });
        }
        if(isset($choices['partner_profession']) && !is_null($choices['partner_profession']) && !empty($choices['partner_profession'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('profession', 'LIKE', "%{$choices['partner_profession']}%");
            });
        }
        if(isset($choices['partner_phone']) && !is_null($choices['partner_phone']) && !empty($choices['partner_phone'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('phone', $choices['partner_phone']);
            });
        }
        if(isset($choices['partner_is_ill']) && !is_null($choices['partner_is_ill']) && !empty($choices['partner_is_ill'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('is_ill', $choices['partner_is_ill']);
            });
        }
        if(isset($choices['partner_illness_type']) && !is_null($choices['partner_illness_type']) && !empty($choices['partner_illness_type'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('illness_type', $choices['partner_illness_type']);
            });
        }
        if(isset($choices['partner_illness_prevent_movement']) && !is_null($choices['partner_illness_prevent_movement']) && !empty($choices['partner_illness_prevent_movement'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('illness_prevent_movement', $choices['partner_illness_prevent_movement']);
            });
        }
        if(isset($choices['partner_need_monthly_treatment']) && !is_null($choices['partner_need_monthly_treatment']) && !empty($choices['partner_need_monthly_treatment'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('need_monthly_treatment', $choices['partner_need_monthly_treatment']);
            });
        }
        if(isset($choices['partner_has_national_support']) && !is_null($choices['partner_has_national_support']) && !empty($choices['partner_has_national_support'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('has_national_support', $choices['partner_has_national_support']);
            });
        }
        if(isset($choices['partner_treatment_monthly_amount']) && !is_null($choices['partner_treatment_monthly_amount']) && !empty($choices['partner_treatment_monthly_amount'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('treatment_monthly_amount', $choices['partner_treatment_monthly_amount']);
            });
        }
        if(isset($choices['partner_treatment_affordable']) && !is_null($choices['partner_treatment_affordable']) && !empty($choices['partner_treatment_affordable'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('treatment_affordable', $choices['partner_treatment_affordable']);
            });
        }
        if(isset($choices['partner_need_operation']) && !is_null($choices['partner_need_operation']) && !empty($choices['partner_need_operation'])){
            $results = $results->whereHas('partners', function($query) use ($choices) {
                $query->where('need_operation', $choices['partner_need_operation']);
            });
        }

        //children related indexes
        if(isset($choices['case_child_sum']) && !is_null($choices['case_child_sum']) && !empty($choices['case_child_sum'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('name', 'LIKE', "%{$choices['case_child_sum']}%");
            });
        }
        if(isset($choices['child_gender']) && !is_null($choices['child_gender']) && !empty($choices['child_gender'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('gender', $choices['child_gender']);
            });
        }
        if(isset($choices['child_age']) && !is_null($choices['child_age']) && !empty($choices['child_age'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('age', $choices['child_age']);
            });
        }
        if(isset($choices['child_relationship_status']) && !is_null($choices['child_relationship_status']) && !empty($choices['child_relationship_status'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('relationship_status', $choices['child_relationship_status']);
            });
        }
        if(isset($choices['child_education_status']) && !is_null($choices['child_education_status']) && !empty($choices['child_education_status'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('education_status', $choices['child_education_status']);
            });
        }
        if(isset($choices['child_profession']) && !is_null($choices['child_profession']) && !empty($choices['child_profession'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('profession', 'LIKE', "%{$choices['child_profession']}%");
            });
        }
        if(isset($choices['child_is_ill']) && !is_null($choices['child_is_ill']) && !empty($choices['child_is_ill'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('is_ill', $choices['child_is_ill']);
            });
        }
        if(isset($choices['child_illness_type']) && !is_null($choices['child_illness_type']) && !empty($choices['child_illness_type'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('illness_type', $choices['child_illness_type']);
            });
        }
        if(isset($choices['child_illness_prevent_movement']) && !is_null($choices['child_illness_prevent_movement']) && !empty($choices['child_illness_prevent_movement'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('illness_prevent_movement', $choices['child_illness_prevent_movement']);
            });
        }
        if(isset($choices['child_need_monthly_treatment']) && !is_null($choices['child_need_monthly_treatment']) && !empty($choices['child_need_monthly_treatment'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('need_monthly_treatment', $choices['child_need_monthly_treatment']);
            });
        }
        if(isset($choices['child_has_national_support']) && !is_null($choices['child_has_national_support']) && !empty($choices['child_has_national_support'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('has_national_support', $choices['child_has_national_support']);
            });
        }
        if(isset($choices['child_treatment_monthly_amount']) && !is_null($choices['child_treatment_monthly_amount']) && !empty($choices['child_treatment_monthly_amount'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('treatment_monthly_amount', $choices['child_treatment_monthly_amount']);
            });
        }
        if(isset($choices['child_treatment_affordable']) && !is_null($choices['child_treatment_affordable']) && !empty($choices['child_treatment_affordable'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('treatment_affordable', $choices['child_treatment_affordable']);
            });
        }
        if(isset($choices['child_need_operation']) && !is_null($choices['child_need_operation']) && !empty($choices['child_need_operation'])){
            $results = $results->whereHas('children', function($query) use ($choices) {
                $query->where('need_operation', $choices['child_need_operation']);
            });
        }

        //roommates related indexes
        if(isset($choices['roommate_name']) && !is_null($choices['roommate_name']) && !empty($choices['roommate_name'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('name', 'LIKE', "%{$choices['roommate_name']}%");
            });
        }
        if(isset($choices['roommate_gender']) && !is_null($choices['roommate_gender']) && !empty($choices['roommate_gender'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('gender', $choices['roommate_gender']);
            });
        }
        if(isset($choices['roommate_age']) && !is_null($choices['roommate_age']) && !empty($choices['roommate_age'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('age', $choices['roommate_age']);
            });
        }
        if(isset($choices['roommate_relationship_status']) && !is_null($choices['roommate_relationship_status']) && !empty($choices['roommate_relationship_status'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('relationship_status', $choices['roommate_relationship_status']);
            });
        }
        if(isset($choices['roommate_education_status']) && !is_null($choices['roommate_education_status']) && !empty($choices['roommate_education_status'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('education_status', $choices['roommate_education_status']);
            });
        }
        if(isset($choices['roommate_profession']) && !is_null($choices['roommate_profession']) && !empty($choices['roommate_profession'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('profession', 'LIKE', "%{$choices['roommate_profession']}%");
            });
        }
        if(isset($choices['roommate_relativity']) && !is_null($choices['roommate_relativity']) && !empty($choices['roommate_relativity'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('relativity', 'LIKE', "%{$choices['roommate_relativity']}%");
            });
        }
        if(isset($choices['roommate_is_ill']) && !is_null($choices['roommate_is_ill']) && !empty($choices['roommate_is_ill'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('is_ill', 'LIKE', "%{$choices['roommate_is_ill']}%");
            });
        }
        if(isset($choices['roommate_illness_type']) && !is_null($choices['roommate_illness_type']) && !empty($choices['roommate_illness_type'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('illness_type', 'LIKE', "%{$choices['roommate_illness_type']}%");
            });
        }
        if(isset($choices['roommate_illness_description']) && !is_null($choices['roommate_illness_description']) && !empty($choices['roommate_illness_description'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('illness_description', 'LIKE', "%{$choices['roommate_illness_description']}%");
            });
        }
        if(isset($choices['roommate_illness_prevent_movement']) && !is_null($choices['roommate_illness_prevent_movement']) && !empty($choices['roommate_illness_prevent_movement'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('illness_prevent_movement', 'LIKE', "%{$choices['roommate_illness_prevent_movement']}%");
            });
        }
        if(isset($choices['roommate_need_monthly_treatment']) && !is_null($choices['roommate_need_monthly_treatment']) && !empty($choices['roommate_need_monthly_treatment'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('need_monthly_treatment', 'LIKE', "%{$choices['roommate_need_monthly_treatment']}%");
            });
        }
        if(isset($choices['roommate_has_national_support']) && !is_null($choices['roommate_has_national_support']) && !empty($choices['roommate_has_national_support'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('has_national_support', 'LIKE', "%{$choices['roommate_has_national_support']}%");
            });
        }
        if(isset($choices['roommate_treatment_monthly_amount']) && !is_null($choices['roommate_treatment_monthly_amount']) && !empty($choices['roommate_treatment_monthly_amount'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('treatment_monthly_amount', 'LIKE', "%{$choices['roommate_treatment_monthly_amount']}%");
            });
        }
        if(isset($choices['roommate_treatment_affordable']) && !is_null($choices['roommate_treatment_affordable']) && !empty($choices['roommate_treatment_affordable'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('treatment_affordable', 'LIKE', "%{$choices['roommate_treatment_affordable']}%");
            });
        }
        if(isset($choices['roommate_need_operation']) && !is_null($choices['roommate_need_operation']) && !empty($choices['roommate_need_operation'])){
            $results = $results->whereHas('roommates', function($query) use ($choices) {
                $query->where('need_operation', 'LIKE', "%{$choices['roommate_need_operation']}%");
            });
        }

        //income related indexes
        if(isset($choices['income_source_type']) && !is_null($choices['income_source_type']) && !empty($choices['income_source_type'])){
            $results = $results->whereHas('income', function($query) use ($choices) {
                $query->where('source_type', $choices['income_source_type']);
            });
        }
        if(isset($choices['income_notes']) && !is_null($choices['income_notes']) && !empty($choices['income_notes'])){
            $results = $results->whereHas('income', function($query) use ($choices) {
                $query->where('notes', 'LIKE', "%{$choices['income_notes']}%");
            });
        }
        if(isset($choices['income_monthly_amount']) && !is_null($choices['income_monthly_amount']) && !empty($choices['income_monthly_amount'])){
            $results = $results->whereHas('income', function($query) use ($choices) {
                $query->where('monthly_amount', 'LIKE', "%{$choices['income_monthly_amount']}%");
            });
        }
        if(isset($choices['income_source_flow']) && !is_null($choices['income_source_flow']) && !empty($choices['income_source_flow'])){
            $results = $results->whereHas('income', function($query) use ($choices) {
                $query->where('source_flow', $choices['income_source_flow']);
            });
        }

        //debts related indexes
        if(isset($choices['debt_amount']) && !is_null($choices['debt_amount']) && !empty($choices['debt_amount'])){
            $results = $results->whereHas('debts', function($query) use ($choices) {
                $query->where('amount', 'LIKE', "%{$choices['debt_amount']}%");
            });
        }
        if(isset($choices['debt_stay']) && !is_null($choices['debt_stay']) && !empty($choices['debt_stay'])){
            $results = $results->whereHas('debts', function($query) use ($choices) {
                $query->where('stay', 'LIKE', "%{$choices['debt_stay']}%");
            });
        }
        if(isset($choices['debt_reason']) && !is_null($choices['debt_reason']) && !empty($choices['debt_reason'])){
            $results = $results->whereHas('debts', function($query) use ($choices) {
                $query->where('reason', 'LIKE', "%{$choices['debt_reason']}%");
            });
        }
        if(isset($choices['debt_refund_method']) && !is_null($choices['debt_refund_method']) && !empty($choices['debt_refund_method'])){
            $results = $results->whereHas('debts', function($query) use ($choices) {
                $query->where('refund_method', $choices['debt_refund_method']);
            });
        }
        if(isset($choices['debt_monthly_amount']) && !is_null($choices['debt_monthly_amount']) && !empty($choices['debt_monthly_amount'])){
            $results = $results->whereHas('debts', function($query) use ($choices) {
                $query->where('monthly_amount', 'LIKE', "%{$choices['debt_monthly_amount']}%");
            });
        }

        //support related indexes
        if(isset($choices['support_source_category']) && !is_null($choices['support_source_category']) && !empty($choices['support_source_category'])){
            $results = $results->whereHas('support', function($query) use ($choices) {
                $query->where('source_category', $choices['support_source_category']);
            });
        }
        if(isset($choices['support_source_name']) && !is_null($choices['support_source_name']) && !empty($choices['support_source_name'])){
            $results = $results->whereHas('support', function($query) use ($choices) {
                $query->where('source_name', $choices['support_source_name']);
            });
        }
        if(isset($choices['support_type']) && !is_null($choices['support_type']) && !empty($choices['support_type'])){
            $results = $results->whereHas('support', function($query) use ($choices) {
                $query->where('type', $choices['support_type']);
            });
        }
        if(isset($choices['support_period']) && !is_null($choices['support_period']) && !empty($choices['support_period'])){
            $results = $results->whereHas('support', function($query) use ($choices) {
                $query->where('period', $choices['support_period']);
            });
        }

        //rooms related indexes
        if(isset($choices['room_type']) && !is_null($choices['room_type']) && !empty($choices['room_type'])){
            $results = $results->whereHas('rooms', function($query) use ($choices) {
                $query->where('type', 'LIKE', "%{$choices['room_type']}%");
            });
        }
        if(isset($choices['room_roof_type']) && !is_null($choices['room_roof_type']) && !empty($choices['room_roof_type'])){
            $results = $results->whereHas('rooms', function($query) use ($choices) {
                $query->where('roof_type', $choices['room_roof_type']);
            });
        }
        if(isset($choices['room_roof_status']) && !is_null($choices['room_roof_status']) && !empty($choices['room_roof_status'])){
            $results = $results->whereHas('rooms', function($query) use ($choices) {
                $query->where('roof_status', $choices['room_roof_status']);
            });
        }
        if(isset($choices['room_paint']) && !is_null($choices['room_paint']) && !empty($choices['room_paint'])){
            $results = $results->whereHas('rooms', function($query) use ($choices) {
                $query->where('paint', $choices['room_paint']);
            });
        }
        if(isset($choices['room_notes']) && !is_null($choices['room_notes']) && !empty($choices['room_notes'])){
            $results = $results->whereHas('rooms', function($query) use ($choices) {
                $query->where('notes', 'LIKE', "%{$choices['room_notes']}%");
            });
        }
//        return $results;
        $results = $results->get();
		if(count($results) != 0) {
			$i = 1;
			foreach ($results as $case) {
				$html .= '<tr>
                        <td>'.$i.'</td>
                        <td>'.$case->name.'</td>
                        <td>'.$case->status.'</td>
                        <td>'.$case->created_at.'</td>
                       <td>
                          <a class="btn btn-small btn-success" href="'.url('cases/'.$case->id).'">
                            <i class="fa  fa-user-circle"></i> عرض
                          </a>
                          <a class="btn btn-small btn-primary" href="'.url('cases/'.$case->id.'/edit').'">
                            <i class="fa  fa-user-circle"></i> تعديل
                          </a>
                        </td>
                        </tr>';
                $i++;
            }
        }
        else {
            $html = '<span class="text-center text-danger text-justify" > لا يوجد نتائع مرتبطة بفلاتر البحث التى تم اخيارها  </span>';
        }
        return response()->json(['data'=>$html]);
    }
}