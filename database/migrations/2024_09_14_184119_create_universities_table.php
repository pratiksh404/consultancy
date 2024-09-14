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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('url')->nullable();
            $table->string('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->json('data')->nullable();
            $table->boolean('active')->default(1);
            $table->bigInteger('position')->default(1);
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            // SEO Part
            $table->string('meta_name')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
