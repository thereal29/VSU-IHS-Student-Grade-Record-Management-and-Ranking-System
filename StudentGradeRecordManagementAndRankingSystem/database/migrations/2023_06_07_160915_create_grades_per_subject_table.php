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
        Schema::create('grades_per_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreign('student_id')->references('id')->on('student_personal_details');
            $table->foreignId('subject_id');
            $table->foreign('subject_id')->references('id')->on('subject');
            $table->foreignId('sy_id');
            $table->foreign('sy_id')->references('id')->on('school_year');
            $table->integer('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades_per_subject');
    }
};
