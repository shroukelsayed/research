<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id')->unsigned();

            $table->foreign('case_id')->references('id')->on('main_datas')->onDelete('cascade');
            $table->string('case_support_source_type')->nullable(); // this is static title from front end
            $table->string('case_support_source_details')->nullable(); // who people help them
            $table->string('case_support_type')->nullable();
            $table->string('case_support_last')->nullable(); // this case in one help in one time only
            $table->string('case_support_period')->nullable();  // this case in always helping
            $table->text('case_support_notes')->nullable();
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
        Schema::dropIfExists('helps');
    }
}
