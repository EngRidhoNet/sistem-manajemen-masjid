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
        Schema::create('table_masjid', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_masjid');
            $table->string('alamat');
            $table->int('no_hp');
            $table->string('email');
            $table->string('website');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('foto_masjid');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_masjid');
    }
};
