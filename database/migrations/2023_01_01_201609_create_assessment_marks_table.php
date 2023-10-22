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
        Schema::create('assessment_marks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assesment')->unsigned()->index()->nullable();
           //$table->foreign('assesment')->references('id')->on('assessment_items');
           $table->bigInteger('student')->unsigned()->index()->nullable();
           //$table->foreign('student')->references('id')->on('students');
           $table->bigInteger('marks');
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
        Schema::dropIfExists('assessment_marks');
    }
};
