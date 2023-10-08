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
        Schema::create('product_logs', function (Blueprint $table) {
            $table->id();

            $table->string('filename', 255)
            ->comment('This column is to store the uploaded file name.');

            $table->integer('data_count')
            ->default(0)
            ->comment('This column is to store the total of row count of the uploaded file. Set default 0 to cater for empty uploaded file.');

            $table->bigInteger('duration_in_milliseconds')
            ->comment('This column is to store the duration it took to process the uploaded file.');

            $table->json('raw_data')
            ->nullable()
            ->comment('This column is to store the extracted data from the uploaded file. Set as nullable to cater for empty uploaded file.');

            $table->json('raw_data_rejected')
            ->nullable()
            ->comment('This column is to store the extracted data from the uploaded file which failed on data validation.');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_logs');
    }
};
