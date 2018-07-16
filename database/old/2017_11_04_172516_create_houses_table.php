<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_house_type')->nullable();
            $table->string('case_house_paying_type')->nullable();
            $table->string('case_house_paying_amount')->nullable();
            $table->string('case_house_paying_source')->nullable();
            $table->string('case_has_electric_meter')->nullable();
            $table->string('case_electric_meter_source')->nullable();
            $table->string('case_electric_meter_reason')->nullable();
            $table->string('case_electric_meter_alternative')->nullable();
            $table->string('case_has_water_meter')->nullable();
            $table->string('case_water_meter_source')->nullable();
            $table->string('case_water_meter_reason')->nullable();
            $table->string('case_water_meter_alternative')->nullable();
            $table->string('case_has_farm')->nullable();
            $table->string('case_farm_type')->nullable();
            $table->string('case_farm_space')->nullable();
            $table->string('case_has_pets')->nullable();
            $table->string('case_pets_type')->nullable();
            $table->string('case_pets_source')->nullable();
            $table->string('case_pets_benifit')->nullable();
            $table->string('case_has_vehicle')->nullable();
            $table->string('case_vehicle_type')->nullable();
            $table->string('case_vehicle_source')->nullable();
            $table->string('case_vehicle_benifit')->nullable();
            $table->string('case_has_alternative_house')->nullable();
            $table->string('case_alternative_house_type')->nullable();
            $table->string('case_alternative_house_resident')->nullable();
            $table->string('case_alternative_house_leave')->nullable();
            $table->string('case_house_built_of')->nullable();
            $table->string('case_house_floor_sum')->nullable();
            $table->string('case_house_room_sum')->nullable();



            $table->string('case_house_bathroom_has')->nullable(); // (true, false ,false)
            $table->string('case_house_bathroom_roof')->nullable();
            $table->string('case_house_bathroom_wall')->nullable();
            $table->string('case_house_bathroom_floor')->nullable();


           


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
        Schema::dropIfExists('houses');
    }
}
