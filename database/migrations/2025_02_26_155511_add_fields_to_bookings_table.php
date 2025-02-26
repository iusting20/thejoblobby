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
        Schema::table('bookings', function (Blueprint $table) {
            // Add foreign key for doctor (user with Doctor role)
            $table->foreignId('doctor_id')->nullable()->constrained('users');
            
            // Add date and time fields
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            
            // Add status field
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop foreign key
            $table->dropForeign(['doctor_id']);
            
            // Drop columns
            $table->dropColumn(['doctor_id', 'date', 'time', 'status']);
        });
    }
};
