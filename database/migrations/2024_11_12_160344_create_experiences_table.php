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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the user
            $table->string('company_name'); // Name of the company or organization
            $table->string('position'); // Position or role title
            $table->date('start_date'); // Start date of the experience
            $table->date('end_date')->nullable(); // End date, nullable if currently active
            $table->text('description')->nullable(); // Optional description of the role/responsibilities
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
