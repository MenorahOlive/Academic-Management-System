<?php

use App\Models\departments;
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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("email_address");
            $table->string("first_name");
            $table->string("last_name");
            $table->foreignId('department_id');
            $table->foreign("department_id")->references('id')->on("departments")->onDelete('cascade');
            $table->foreignId('role_id');
            $table->foreign("role_id")->references('id')->on('roles')->onDelete('cascade');
            
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
        Schema::dropIfExists('staff');
    }
};
