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
        Schema::create('unit_allocations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student')->unsigned()->index()->nullable();
           //$table->foreign('student')->references('id')->on('students');
           $table->bigInteger('unit')->unsigned()->index()->nullable();
           $table->foreign('unit')->references('id')->on('units');
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
        Schema::dropIfExists('unit_allocations');
    }
};
