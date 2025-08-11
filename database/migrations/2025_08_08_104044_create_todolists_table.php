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
        Schema::create('todolists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('slug');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('priority_id')->constrained('todolist_priorities')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('status_id')->default(1)->constrained('todolist_statuses')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
            $table->index(['priority_id', 'status_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todolists');
    }
};
