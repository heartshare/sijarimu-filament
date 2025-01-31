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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perizinan_id')->constrained();
            $table->string('nama_formulir');
            $table->string('helper_text')->nullable();
            $table->enum('type', ['string', 'date', 'select', 'textarea', 'richeditor']);
            $table->boolean('is_columnSpanFull')->default(false)->nullable();
            $table->json('options')->nullable();
            $table->json('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
