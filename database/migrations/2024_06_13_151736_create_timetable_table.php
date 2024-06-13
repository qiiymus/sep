<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class timetable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('ustazah');
            $table->string('subject1isnin')->nullable();
            $table->string('subject2isnin')->nullable();
            $table->string('subject3isnin')->nullable();
            $table->string('subject1selasa')->nullable();
            $table->string('subject2selasa')->nullable();
            $table->string('subject3selasa')->nullable();
            $table->string('subject1khamis')->nullable();
            $table->string('subject2khamis')->nullable();
            $table->string('subject3khamis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetable');
    }
};