<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_curricular_activity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreign('student_id')->references('id')->on('student_personal_details');
            $table->foreignId('ccadetails_id');
            $table->foreign('ccadetails_id')->references('id')->on('co_curricular_activity_details');


        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_curricular_activity');
        Schema::table('co_curricular_activity', function($table) {
            $table->foreignId('approval_cca_id');
            $table->foreign('approval_cca_id')->references('id')->on('approval_co_curricular_activity');
        });
    }
};
