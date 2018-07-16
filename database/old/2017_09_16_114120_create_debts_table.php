<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->increments('id');
                        $table->integer('case_id')->unsigned();

            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_debt_amount')->nullable();
            $table->string('case_debt_period')->nullable(); 
            $table->string('case_debt_paying_source')->nullable(); // where this money from
            $table->string('case_debt_reason')->nullable(); // this is the reason for this debt
            $table->string('case_debt_creditor')->nullable();  // this is the person how debt them
            $table->text('case_debt_notes')->nullable();
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
        Schema::dropIfExists('debts');
    }
}
