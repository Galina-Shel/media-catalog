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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('type'); //пока строка для MVP, в дальнейшем будет усилено до выбора из доп. таблицы
            $table->foreignId('created_by') //внешний ключ на users.id
                ->constrained('users');
            $table->boolean('is_approved')->default(false); //на будущеедля модерации изменений

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
