<?php

use App\Models\Glossary\ItemType;
use App\Models\Main\Maker;
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
        Schema::create('main__items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained(Maker::getTableName());
            $table->string('type_code');
            $table->foreign('type_code')->references('code')->on(ItemType::getTableName());

            $table->string('name');

            $table->text('description')->nullable();
            $table->string('logo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__items');
    }
};
