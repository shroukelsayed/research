<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('partner_name')->nullable();
            $table->string('partner_type')->nullable(); // 0 => female , 1 => male
            $table->string('partner_social_case')->nullable();
            $table->string('partner_age')->nullable();
            $table->string('partner_work')->nullable();
            $table->string('partner_phone' , 20)->nullable();
            $table->string('partner_country_id' , 20)->nullable();
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
        Schema::dropIfExists('partners');
    }
}
