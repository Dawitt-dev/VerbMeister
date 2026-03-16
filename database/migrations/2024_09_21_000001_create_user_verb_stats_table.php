<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_verb_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('german_verb_id')->constrained('german_verbs')->onDelete('cascade');
            $table->unsignedInteger('correct_count')->default(0);
            $table->unsignedInteger('incorrect_count')->default(0);
            $table->timestamps();

            $table->unique(['user_id', 'german_verb_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_verb_stats');
    }
};
