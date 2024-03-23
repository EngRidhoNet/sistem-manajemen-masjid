<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\donasi;

class donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
    ];

    // Relationship with Donasi
    public function donasi()
    {
        return $this->hasMany(donasi::class, 'id_donatur');
    }
}
