<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';
    protected $fillable = [
        'typer_id',
        'status',
        'researcher_name',
        'governorate',
        'city',
        'district',
        'following',
        'real_date',
        'name',
        'gender',
        'age',
        'national_id',
        'relationship_status',
        'education_status',
        'work_status',
        'profession',
        'national_id_front',
        'national_id_back',
        'phone',
        'is_ill',
        'illness_type',
        'illness_description',
        'illness_prevent_movement',
        'need_monthly_treatment',
        'has_national_support',
        'treatment_monthly_amount',
        'treatment_affordable',
        'need_operation',
        'income_amount',
        'income_amount_category',
        'income_source_count',
        'support_count',
        'debts_total',
        'debts_total_range',
        'expenses_house_rent',
        'expenses_farm_rent',
        'expenses_treatment',
        'expenses_detergent',
        'expenses_school_subscription',
        'expenses_child_course',
        'expenses_water_receipt',
        'expenses_electricity_receipt',
        'expenses_clothes',
        'expenses_phone_credit',
        'expenses_debts',
        'expenses_transportation',
        'expenses_pets_food',
        'expenses_smoking',
        'expenses_food',
        'expenses_other',
        'expenses_total_category',
        'expenses_total',
        'assets_house_type',
        'assets_house_status',
        'assets_house_price',
        'assets_house_paying_source',
        'assets_electric_meter',
        'assets_water_meter',
        'assets_water_alternative',
        'assets_farm',
        'assets_pets',
        'assets_vehicle',
        'assets_house_alternative_status',
        'assets_house_alternative_resident',
        'assets_house_alternative_leave',
        'assets_house_construction',
        'assets_house_floors_count',
        'assets_house_rooms_count',
        'has_bathroom',
        'bathroom_has_door',
        'bathroom_has_basin',
        'bathroom_has_toilet',
        'bathroom_roof',
        'bathroom_wall',
        'bathroom_floor',
        'amenities_mattress',
        'amenities_bed',
        'amenities_fans',
        'amenities_blankets',
        'amenities_stove',
        'amenities_oven',
        'amenities_flame',
        'amenities_heater',
        'amenities_fridge',
        'amenities_washer',
        'amenities_cupbord',
        'amenities_nish',
        'amenities_arika',
        'amenities_table',
        'amenities_television',
        'amenities_receiver',
        'amenities_computer',
        'need_water',
        'need_bathroom',
        'need_roof',
        'need_blankets',
        'need_construction',
        'need_education',
        'need_food',
        'additional_notes',
        'case_assets_electric_meter_other' ,
        'case_assets_pets_alternative' ,
        'case_assets_vehicle_alternative',
        'case_need_project',
        'case_need_project_desc',
        'assets_farm_space',
    ];

    public function caseStatus()
    {
        return $this->hasMany('App\CaseStatuses' , 'case_id' ,  'id');
    }

    public function partners()
    {
        return $this->hasMany('App\Partners' , 'case_id' ,  'id');
    }

    public function children()
    {
        return $this->hasMany('App\Children' , 'case_id' , 'id');
    }

    public function roommates()
    {
        return $this->hasMany('App\Roommates' , 'case_id' , 'id');
    }

    public function income()
    {
        return $this->hasMany('App\Income' , 'case_id' , 'id');
    }

    public function support()
    {
        return $this->hasMany('App\Support' , 'case_id' , 'id');
    }

    public function debts()
    {
        return $this->hasMany('App\Debts' , 'case_id' , 'id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Rooms' , 'case_id' , 'id');
    }

    public function toArray()
    {
        return [
            'typer_id' => $this->typer_id,
            'status' => $this->status,
            'researcher_name' => $this->researcher_name,
            'governorate' => $this->governorate,
            'city' => $this->city,
            'district' => $this->district,
            'following' => $this->following,
            'real_date' => $this->real_date,
            'name' => $this->name,
            'gender' => $this->gender,
            'age' => $this->age,
            'national_id' => $this->national_id,
            'relationship_status' => $this->relationship_status,
            'education_status' => $this->education_status,
            'work_status' => $this->work_status,
            'profession' => $this->profession,
            'national_id_front' => $this->national_id_front,
            'national_id_back' => $this->national_id_back,
            'phone' => $this->phone,
            'is_ill' => $this->is_ill,
            'illness_type' => $this->illness_type,
            'illness_description' => $this->illness_description,
            'illness_prevent_movement' => $this->illness_prevent_movement,
            'need_monthly_treatment' => $this->need_monthly_treatment,
            'has_national_support' => $this->has_national_support,
            'treatment_monthly_amount' => $this->treatment_monthly_amount,
            'treatment_affordable' => $this->treatment_affordable,
            'need_operation' => $this->need_operation,
            'income_amount' => $this->income_amount,
            'income_amount_category' => $this->income_amount_category,
            'income_source_count' => $this->income_source_count,
            'support_count' => $this->support_count,
            'debts_total' => $this->debts_total,
            'debts_total_range' => $this->debts_total_range,
            'expenses_house_rent' => $this->expenses_house_rent,
            'expenses_farm_rent' => $this->expenses_farm_rent,
            'expenses_treatment' => $this->expenses_treatment,
            'expenses_detergent' => $this->expenses_detergent,
            'expenses_school_subscription' => $this->expenses_school_subscription,
            'expenses_child_course' => $this->expenses_child_course,
            'expenses_water_receipt' => $this->expenses_water_receipt,
            'expenses_electricity_receipt' => $this->expenses_electricity_receipt,
            'expenses_clothes' => $this->expenses_clothes,
            'expenses_phone_credit' => $this->expenses_phone_credit,
            'expenses_debts' => $this->expenses_debts,
            'expenses_transportation' => $this->expenses_transportation,
            'expenses_pets_food' => $this->expenses_pets_food,
            'expenses_smoking' => $this->expenses_smoking,
            'expenses_food' => $this->expenses_food,
            'expenses_other' => $this->expenses_other,
            'expenses_total_category' => $this->expenses_total_category,
            'expenses_total' => $this->expenses_total,
            'assets_house_type' => $this->assets_house_type,
            'assets_house_status' => $this->assets_house_status,
            'assets_house_price' => $this->assets_house_price,
            'assets_house_paying_source' => $this->assets_house_paying_source,
            'assets_electric_meter' => $this->assets_electric_meter,
            'assets_water_meter' => $this->assets_water_meter,
            'assets_water_alternative' => $this->assets_water_alternative,
            'assets_farm' => $this->assets_farm,
            'assets_pets' => $this->assets_pets,
            'assets_vehicle' => $this->assets_vehicle,
            'assets_house_alternative_status' => $this->assets_house_alternative_status,
            'assets_house_alternative_resident' => $this->assets_house_alternative_resident,
            'assets_house_alternative_leave' => $this->assets_house_alternative_leave,
            'assets_house_construction' => $this->assets_house_construction,
            'assets_house_floors_count' => $this->assets_house_floors_count,
            'assets_house_rooms_count' => $this->assets_house_rooms_count,
            'has_bathroom' => $this->has_bathroom,
            'bathroom_has_door' => $this->bathroom_has_door,
            'bathroom_has_basin' => $this->bathroom_has_basin,
            'bathroom_has_toilet' => $this->bathroom_has_toilet,
            'bathroom_roof' => $this->bathroom_roof,
            'bathroom_wall' => $this->bathroom_wall,
            'bathroom_floor' => $this->bathroom_floor,
            'amenities_mattress' => $this->amenities_mattress,
            'amenities_bed' => $this->amenities_bed,
            'amenities_fans' => $this->amenities_fans,
            'amenities_blankets' => $this->amenities_blankets,
            'amenities_stove' => $this->amenities_stove,
            'amenities_oven' => $this->amenities_oven,
            'amenities_flame' => $this->amenities_flame,
            'amenities_heater' => $this->amenities_heater,
            'amenities_fridge' => $this->amenities_fridge,
            'amenities_washer' => $this->amenities_washer,
            'amenities_cupbord' => $this->amenities_cupbord,
            'amenities_nish' => $this->amenities_nish,
            'amenities_arika' => $this->amenities_arika,
            'amenities_table' => $this->amenities_table,
            'amenities_television' => $this->amenities_television,
            'amenities_receiver' => $this->amenities_receiver,
            'amenities_computer' => $this->amenities_computer,
            'need_water' => $this->need_water,
            'need_bathroom' => $this->need_bathroom,
            'need_roof' => $this->need_roof,
            'need_blankets' => $this->need_blankets,
            'need_construction' => $this->need_construction,
            'need_education' => $this->need_education,
            'need_food' => $this->need_food,
            'additional_notes' => $this->additional_notes,
            'case_assets_electric_meter_other' => $this->case_assets_electric_meter_other,
            'case_assets_pets_alternative' => $this->case_assets_pets_alternative,
            'case_assets_vehicle_alternative' => $this->case_assets_vehicle_alternative,
            'case_need_project' => $this->case_need_project,
            'case_need_project_desc' => $this->case_need_project_desc,
            'assets_farm_space' => $this->assets_farm_space,
            'partners' => ($this->partners != null)? $this->partners : '',
            'children' => ($this->children != null)? $this->children : '',
            'roommates' => ($this->roommates != null)? $this->roommates : '',
            'income' => ($this->income != null)? $this->income : '',
            'support' => ($this->support != null)? $this->support : '',
            'debts' => ($this->debts != null)? $this->debts : '',
            'rooms' => ($this->rooms != null)? $this->rooms : '',
        ];
    }
}
