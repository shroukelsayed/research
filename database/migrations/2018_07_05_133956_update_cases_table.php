<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::table('cases', function($table) {
           
            $table->text('case_assets_electric_meter_other')->nullable();
            $table->text('case_assets_pets_alternative')->nullable();
            $table->text('case_assets_vehicle_alternative')->nullable();
            $table->text('case_need_project')->nullable();
            $table->text('case_need_project_desc')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('cases', function($table) {
            $table->dropColumn('case_assets_electric_meter_other');
            $table->dropColumn('case_assets_pets_alternative');
            $table->dropColumn('case_assets_vehicle_alternative');
            $table->dropColumn('case_need_project');
            $table->dropColumn('case_need_project_desc');
        });
    }
}
