<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\masjid;

class keuangan extends Model
{
    use HasFactory;

    protected $table = 'table_keuangan';

    protected $fillable = [
        'id_masjid',
        'tanggal',
        'jenis_transaksi',
        'kategori',
        'jumlah',
        'keterangan',
    ];

    // Relationship with Masjid
    public function masjid()
    {
        return $this->belongsTo(masjid::class, 'id_masjid');
    }
}
