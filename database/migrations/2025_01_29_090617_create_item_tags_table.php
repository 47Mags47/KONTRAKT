<?php

use App\Models\Glossary\ItemTag;
use App\Models\Main\Item;
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
        Schema::create('link__items_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained(Item::getTableName());
            $table->foreignId('tag_id')->constrained(ItemTag::getTableName());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link__items_tags');
    }
};
