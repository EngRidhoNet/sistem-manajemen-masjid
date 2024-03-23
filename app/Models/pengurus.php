<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\masjid;

class pengurus extends Model
{
    use HasFactory;
    protected $table = 'pengurus';

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
        return $this->belongsTo(masjidasjid::class, 'id_masjid');
    }
}
