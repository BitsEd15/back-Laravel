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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // создает поля created_ at и updated_at
            $table->string('name',255); // свойство table, создай поле name, типа строковых данных - он нулабельный, данное поле при создании может остаться пустым.
            $table->string('description',500)->default(' Default Description');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
