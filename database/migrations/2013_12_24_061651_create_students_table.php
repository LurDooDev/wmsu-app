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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->foreignId('college_id')->constrained('colleges')->onDelete('restrict'); // FK relate to colleges
            $table->foreignId('course_id')->constrained('courses')->onDelete('restrict'); // FK relate to courses
            $table->string('email')->unique();
            $table->string('year_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
