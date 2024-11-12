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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the user
            $table->string('title'); // Title of the certification (e.g., "Certified Laravel Developer")
            $table->string('organization'); // Issuing organization (e.g., "Sololearn")
            $table->date('date_obtained'); // Date certification was obtained
            $table->date('expiration_date')->nullable(); // Expiration date, if applicable
            $table->text('notes')->nullable(); // Additional notes (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
