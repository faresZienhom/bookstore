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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('author');
            $table->integer('page_number');
            $table->decimal('price');
            $table->decimal('discount');
            $table->decimal('priceafterdiscount');
            $table->integer('count');
            $table->foreignId('categories_id')->nullable();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->timestamps();
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
