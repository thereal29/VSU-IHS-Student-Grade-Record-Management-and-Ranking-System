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
        Schema::create('ranking_per_advisory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id');
            $table->foreign('report_id')->references('id')->on('ranking_report');
            $table->foreignId('honor_roll_candidate_id');
            $table->foreign('honor_roll_candidate_id')->references('id')->on('honor_roll_candidate');
            $table->integer('rank_number');
            $table->string('ranking_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranking_per_advisory');
    }
};
