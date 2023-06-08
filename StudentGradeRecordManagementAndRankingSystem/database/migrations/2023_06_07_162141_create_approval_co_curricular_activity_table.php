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
        Schema::create('approval_co_curricular_activity', function (Blueprint $table) {
            $table->id();
            $table->date('approved_activity_date');
            $table->string('approved_activity_by');
            $table->float('co_curricular_activity_grade',8,2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval_co_curricular_activity');
    }
};
