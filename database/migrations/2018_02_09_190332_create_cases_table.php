<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {

            $table->increments('id');

            $table->text('researcher_name')->nullable();
            $table->text('governorate')->nullable();
            $table->text('city')->nullable();
            $table->text('district')->nullable();
            $table->text('following')->nullable();
            $table->date('real_date')->nullable();

            $table->text('name')->nullable();
            $table->text('gender')->nullable();
            $table->text('age')->nullable();
            $table->text('national_id')->nullable();
            $table->text('relationship_status')->nullable();
            $table->text('education_status')->nullable();
            $table->text('work_status')->nullable();
            $table->text('profession')->nullable();
            $table->text('national_id_front')->nullable();
            $table->text('national_id_back')->nullable();
            $table->text('phone')->nullable();
            $table->text('is_ill')->nullable();
            $table->text('illness_type')->nullable();
            $table->text('illness_description')->nullable();
            $table->text('illness_prevent_movement')->nullable();
            $table->text('need_monthly_treatment')->nullable();
            $table->text('has_national_support')->nullable();
            $table->text('treatment_monthly_amount')->nullable();
            $table->text('treatment_affordable')->nullable();
            $table->text('need_operation')->nullable();

            $table->text('income_amount')->nullable();
            $table->text('income_amount_category')->nullable();
            $table->text('income_source_count')->nullable();

            $table->text('support_count')->nullable();

            $table->text('debts_total')->nullable();
            $table->text('debts_total_range')->nullable();

            $table->text('expenses_house_rent')->nullable();
            $table->text('expenses_farm_rent')->nullable();
            $table->text('expenses_treatment')->nullable();
            $table->text('expenses_detergent')->nullable();
            $table->text('expenses_school_subscription')->nullable();
            $table->text('expenses_child_course')->nullable();
            $table->text('expenses_water_receipt')->nullable();
            $table->text('expenses_electricity_receipt')->nullable();
            $table->text('expenses_clothes')->nullable();
            $table->text('expenses_phone_credit')->nullable();
            $table->text('expenses_debts')->nullable();
            $table->text('expenses_transportation')->nullable();
            $table->text('expenses_pets_food')->nullable();
            $table->text('expenses_smoking')->nullable();
            $table->text('expenses_food')->nullable();
            $table->text('expenses_other')->nullable();
            $table->text('expenses_total_category')->nullable();
            $table->text('expenses_total')->nullable();

            $table->text('assets_house_type')->nullable();
            $table->text('assets_house_status')->nullable();
            $table->text('assets_house_price')->nullable();
            $table->text('assets_house_paying_source')->nullable();
            $table->text('assets_electric_meter')->nullable();
            $table->text('assets_water_meter')->nullable();
            $table->text('assets_water_alternative')->nullable();
            $table->text('assets_farm')->nullable();
            $table->text('assets_pets')->nullable();
            $table->text('assets_vehicle')->nullable();
            $table->text('assets_house_alternative_status')->nullable();
            $table->text('assets_house_alternative_resident')->nullable();
            $table->text('assets_house_alternative_leave')->nullable();
            $table->text('assets_house_construction')->nullable();
            $table->text('assets_house_floors_count')->nullable();
            $table->text('assets_house_rooms_count')->nullable();

            $table->text('has_bathroom')->nullable();
            $table->text('bathroom_has_door')->nullable();
            $table->text('bathroom_has_basin')->nullable();
            $table->text('bathroom_has_toilet')->nullable();
            $table->text('bathroom_roof')->nullable();
            $table->text('bathroom_wall')->nullable();
            $table->text('bathroom_floor')->nullable();

            $table->text('amenities_mattress')->nullable();
            $table->text('amenities_bed')->nullable();
            $table->text('amenities_fans')->nullable();
            $table->text('amenities_blankets')->nullable();
            $table->text('amenities_stove')->nullable();
            $table->text('amenities_oven')->nullable();
            $table->text('amenities_flame')->nullable();
            $table->text('amenities_heater')->nullable();
            $table->text('amenities_fridge')->nullable();
            $table->text('amenities_washer')->nullable();
            $table->text('amenities_cupbord')->nullable();
            $table->text('amenities_nish')->nullable();
            $table->text('amenities_arika')->nullable();
            $table->text('amenities_table')->nullable();
            $table->text('amenities_television')->nullable();
            $table->text('amenities_receiver')->nullable();
            $table->text('amenities_computer')->nullable();

            $table->text('need_water')->nullable();
            $table->text('need_bathroom')->nullable();
            $table->text('need_roof')->nullable();
            $table->text('need_blankets')->nullable();
            $table->text('need_construction')->nullable();
            $table->text('need_education')->nullable();
            $table->text('need_food')->nullable();

            $table->text('additional_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
