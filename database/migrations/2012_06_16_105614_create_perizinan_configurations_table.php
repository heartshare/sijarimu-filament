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
        Schema::create('perizinan_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_configuration');
            $table->string('format_nomor_rekomendasi');
            $table->decimal('iteration_rekomendasi');
            $table->string('format_nomor_izin');
            $table->decimal('iteration_izin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan_configurations');
    }
};
