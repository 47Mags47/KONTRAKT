<?php

use App\Models\Glossary\ServiceCategory;
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
        Schema::create('glossary__service_categories', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('parent_code')->nullable();
            $table->foreign('parent_code')->references('code')->on(ServiceCategory::getTableName());

            $table->string('name');
            $table->string('ico')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glossary__service_categories');
    }
};
