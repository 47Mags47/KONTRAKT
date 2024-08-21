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
        Schema::create('main__makers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adres')->nullable();
            $table->string('short_description', 300);
            $table->text('long_description')->nullable();
            $table->string('logo')->nullable();
            $table->string('link', 300);

            $table->foreignId('city_id')->constrained('glossary__cities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__makers');
    }
};
