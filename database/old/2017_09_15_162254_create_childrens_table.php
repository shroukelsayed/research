<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();

            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_child_name')->nullable();
            $table->string('case_child_gender')->nullable(); // 0 => female , 1 => male
            $table->string('case_child_age')->nullable();
            $table->string('case_child_education')->nullable();
            $table->string('case_child_ralationship')->nullable();
            $table->string('case_child_has_profession')->nullable();
            $table->string('case_child_profession')->nullable(); // if null he hasn't work
            $table->string('case_child_financial_support')->nullable(); // true => help parents , false => didn't
            $table->text('case_child_school_dropout')->nullable(); // array
            $table->string('case_child_school_dropout_more')->nullable();

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
        Schema::dropIfExists('childrens');
    }
}
