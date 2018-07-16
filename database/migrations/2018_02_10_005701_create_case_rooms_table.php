<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_rooms', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');

            $table->text('type')->nullable();
            $table->text('roof_type')->nullable();
            $table->text('roof_status')->nullable();
            $table->text('paint')->nullable();
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('case_rooms');
    }
}
