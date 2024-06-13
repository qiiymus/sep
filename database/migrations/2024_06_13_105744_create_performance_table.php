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
        Schema::create('performance', function (Blueprint $table) {
            $table->id();
            $table->string("Session");
            $table->string("Paper_ID");
            $table->string("Total_A");
            $table->string("Total_B");
            $table->string("Total_C");
            $table->string("Total_D");
            $table->string("Total_E");
            $table->string("Total_F");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance');
    }
};
