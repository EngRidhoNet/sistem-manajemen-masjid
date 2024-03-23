<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\keuangan;
use App\Models\kegiatan;
use App\Models\pengurus;

class masjid extends Model
{
    use HasFactory;
    protected $table = 'masjid';

    protected $fillable = [
        'nama_masjid',
        'alamat',
        'no_hp',
        'email',
        'website',
        'latitude',
        'longitude',
        'foto_masjid',
        'deskripsi',
    ];

    // Relationship with Keuangan
    public function keuangan()
    {
        return $this->hasMany(keuangan::class, 'id_masjid');
    }

    // Relationship with Kegiatan
    public function kegiatan()
    {
        return $this->hasMany(kegiatan::class, 'id_masjid');
    }

    // Relationship with Pengurus
    public function pengurus()
    {
        return $this->hasMany(pengurus::class, 'id_masjid');
    }
}
