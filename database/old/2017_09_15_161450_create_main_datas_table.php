<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('researcher_id')->unsigned();
            $table->foreign('researcher_id')->references('id')->on('researchers')->onDelete('cascade');

            $table->string('case_name');
            $table->string('case_gender')->nullable(); // 0 => female , 1 => male
            $table->string('case_relationship')->nullable();
            $table->string('case_age')->nullable();
            $table->string('case_profession')->nullable();
            $table->string('case_phone' , 20)->nullable();
            $table->string('case_national_id')->nullable();
           

            // if  children_count > 0 they will be in childrens table
            $table->string('case_child_sum')->nullable();

            // people how stay with
            $table->string('case_has_roommate')->nullable();

            // total income per month
            $table->string('total_income')->nullable();

            // bring any help
            $table->string('case_has_support')->nullable(); // true -> yes there are people help them , false => didn't

            $table->string('case_has_debt')->nullable(); // true -> has debts , false -> hasn't

            $table->string('total_payments')->nullable();

            /**
             * food bills
             */
            $table->string('case_food_daily_amount')->nullable(); // payments in every day
            $table->string('case_food_shopping_amount')->nullable(); // payments in marketing day
            $table->string('case_food_shopping_times')->nullable(); // this is the count of marketing in one month
            $table->string('case_food_monthly_amount')->nullable(); // total of payments per month for food

            $table->text('case_user_notes')->nullable();

            $table->text('case_need')->nullable();
            $table->text('case_need_why')->nullable();

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
        Schema::dropIfExists('main_datas');
    }
}
