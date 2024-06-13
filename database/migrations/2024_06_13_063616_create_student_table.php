<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            //$table->blob("Image");
            $table->string('Name');
            $table->string('Mykid_Num');
            $table->string('BirthCert_Num');
            $table->date('Birthdate');
            $table->string('Age');
            $table->string('Address');
            $table->timestamps();
            $table->string('class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
