<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Mykid_Num');
            $table->string('BirthCert_Num');
            $table->date('Birthdate');
            $table->integer('Age');
            $table->integer('Address');
            $table->string('class');
            $table->string('p_name');
            $table->string('mykad');
            $table->string('Phone_Num')->nullable();
            $table->string('Email')->unique()->nullable();
            $table->string('Relationship')->nullable();
            $table->date('Occupation')->nullable();
            $table->string('p_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_timetable');
    }
};
