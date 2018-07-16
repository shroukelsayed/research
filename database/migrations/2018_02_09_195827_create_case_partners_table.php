<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_partners', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');

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
        Schema::dropIfExists('case_partners');
    }
}
