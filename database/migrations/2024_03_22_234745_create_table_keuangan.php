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
        Schema::create('table_keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masjid');
            $table->date('tanggal');
            $table->string('jenis_transaksi');
            $table->string('kategori');
            $table->decimal('jumlah');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_masjid')->references('id')->on('table_masjid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_keuangan');
    }
};
