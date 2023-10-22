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
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('class_id')->unsigned()->index()->nullable();
           $table->foreign('class_id')->references('id')->on('lecture_sessions');
           $table->bigInteger('student')->unsigned()->index()->nullable();
           //$table->foreign('student')->references('id')->on('students');
           $table->string('Attendance');
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
        Schema::dropIfExists('student_attendances');
    }
};
