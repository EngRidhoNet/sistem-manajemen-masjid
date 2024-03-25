<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\masjid;

class kegiatan extends Model
{
    use HasFactory;
    protected $table = 'table_kegiatan';

    protected $fillable = [
        'id_masjid',
        'nama_kegiatan',
        'deskripsi',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'foto_kegiatan',
    ];

    // Relationship with Masjid
    public function masjid()
    {
        return $this->belongsTo(masjid::class, 'id_masjid');
    }
}
