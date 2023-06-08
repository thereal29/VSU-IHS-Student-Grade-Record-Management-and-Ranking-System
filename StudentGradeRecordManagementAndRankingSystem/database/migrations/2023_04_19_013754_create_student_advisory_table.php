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
        Schema::create('student_advisory', function (Blueprint $table) {
            $table->foreignId('student_id');
            $table->foreign('student_id')->references('id')->on('student_user_mapping');
            $table->foreignId('adviser_id');
            $table->foreign('adviser_id')->references('id')->on('faculty_staff_personal_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_advisory');
    }
};
