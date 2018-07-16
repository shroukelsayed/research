<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_income_source_type')->nullable(); // this is static title from html 
            $table->string('case_income_amount')->nullable();
            $table->string('case_income_paying_type')->nullable(); 
            $table->string('case_income_monthly_times')->nullable();
            $table->text('case_income_notes')->nullable();
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
        Schema::dropIfExists('incomes');
    }
}
