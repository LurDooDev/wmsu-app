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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->tinyInteger('type')->default(0);
            /* Users: 0=>Officer, 1=>Admin, 2=>Collector */
            $table->foreignId('college_id')->nullable()->constrained('colleges')->onDelete('restrict'); // (Temporary Nullable) FK relate to college
            $table->foreignId('position_id')->nullable()->constrained('positions')->onDelete('restrict'); // (Temporary Nullable) FK relate to position
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
