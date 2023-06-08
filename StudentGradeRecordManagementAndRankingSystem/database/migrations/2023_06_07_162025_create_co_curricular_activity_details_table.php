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
        Schema::create('co_curricular_activity_details', function (Blueprint $table) {
            $table->id();
            $table->string('co_curricular_activity');
            $table->string('category');
            $table->integer('category_point');
            $table->string('awards_scope');
            $table->integer('awards_scope_point');
            $table->float('cca_total_point',8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co_curricular_activity_details');
    }
};
