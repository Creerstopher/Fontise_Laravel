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
        Schema::create('font_style', function (Blueprint $table) {
            $table->id();
            $table->foreignId('style_id')->constrained('styles');
            $table->foreignId('font_id')->constrained('fonts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_styles');
    }
};
