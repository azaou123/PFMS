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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the user
            $table->string('name'); // Project name
            $table->text('description')->nullable(); // Optional description of the project
            $table->date('start_date'); // Project start date
            $table->date('end_date')->nullable(); // Project end date, nullable if ongoing
            $table->string('technologies')->nullable(); // Technologies used (could be a comma-separated string)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
