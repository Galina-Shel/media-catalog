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
        Schema::create('user_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('user');
            $table->foreignId('item_id')
                ->constrained('item');
            $table->enum('status', ['planned', 'in_progress', 'completed', 'dropped;']);
            $table->unsignedTinyInteger('rating')->nullable(); //потом будет добавлено правило ограничения оценки (1-5)
            $table->text('review_text');

            $table->timestamps();

            $table->unique(['user_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_items');
    }
};
