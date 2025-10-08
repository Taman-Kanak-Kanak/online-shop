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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('biteship_id', 100);
            $table->string('fullname', 255);
            $table->string('phone', 20);
            $table->enum('type', ['rumah', 'kantor', 'lainnya']);
            $table->string('province', 255);
            $table->string('city', 255);
            $table->string('district', 255);
            $table->string('postal_code', 10);
            $table->text('description')->nullable();
            $table->integer('is_default')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
