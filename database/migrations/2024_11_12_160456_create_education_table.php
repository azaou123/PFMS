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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the user
            $table->string('institution'); // Name of the institution
            $table->string('degree')->nullable(); // Degree obtained (e.g., Bachelor's, Master's)
            $table->string('field_of_study')->nullable(); // Field of study (e.g., Computer Science)
            $table->date('start_date'); // Date started
            $table->date('end_date')->nullable(); // Date ended, nullable if ongoing
            $table->text('notes')->nullable(); // Additional notes or achievements
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
