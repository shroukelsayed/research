<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_user_name')->nullable();
            $table->string('case_real_date')->nullable();
            $table->string('case_code')->nullable();
            $table->string('case_attachment_sum')->nullable();
            $table->string('case_governorate')->nullable();
            $table->string('case_city')->nullable();
            $table->string('case_district')->nullable();
            $table->string('case_follows')->nullable();
            $table->string('case_referral_name')->nullable();
            $table->string('case_referral_phone')->nullable();
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
        Schema::dropIfExists('researchers');
    }
}
