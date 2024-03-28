<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\donasi;

class donatur extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'table_donatur';

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
