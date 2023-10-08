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

            $table->bigInteger('unique_key')
            ->comment('This column is for the product unique key.');

            $table->string('name', 255)
            ->comment('This column is for the product title.');

            $table->string('description', 255)
            ->comment('This column is for the product description.');

            $table->string('style', 20)
            ->comment('This column is for the product style.');

            $table->string('color', 10)
            ->comment('This column is for the product color');

            $table->string('color_sanmar_mainframe', 50)
            ->comment('This column is for the product sanmar mainframe color.');

            $table->string('size', 10)
            ->comment('This column is for the product size.');

            $table->decimal('piece_price', 9, 2)
            ->comment('This column is for the product price per piece.');

            $table->softDeletes();

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
