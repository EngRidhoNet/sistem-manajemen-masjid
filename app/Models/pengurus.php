<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\masjid;

class pengurus extends Model
{
    use HasFactory;
    protected $table = 'table_pengurus';

    protected $fillable = [
        'id_masjid',
        'nama_lengkap',
        'jabatan',
        'no_hp',
        'email',
    ];

    // Relationship with Masjid
    public function masjid()
    {
        return $this->belongsTo(masjid::class, 'id_masjid');
    }
}
