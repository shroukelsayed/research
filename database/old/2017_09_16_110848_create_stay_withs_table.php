<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStayWithsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stay_withs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_roommate_name')->nullable();
            $table->string('case_roommate_gender')->nullable(); // 0 => female , 1 => male
            $table->string('case_roommate_relativity')->nullable();
            $table->string('case_roommate_age')->nullable();
            $table->string('case_roommate_ralationship')->nullable();
            $table->string('case_roommate_has_profession')->nullable();
            $table->string('case_roommate_profession')->nullable(); // if null he hasn't work
            $table->string('case_roommate_financial_counted')->nullable(); // true => help in bills , false => didn't

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
        Schema::dropIfExists('stay_withs');
    }
}
