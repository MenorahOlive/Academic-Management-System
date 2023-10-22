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
        Schema::table('class_allocations', function (Blueprint $table) {
            $table->foreignId('unit')->nullable();
            $table ->foreign('unit')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('group')->nullable();
            $table->foreign('group')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_allocations', function (Blueprint $table) {
            //
        });
    }
};
