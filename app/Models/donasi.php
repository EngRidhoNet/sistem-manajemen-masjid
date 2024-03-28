<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class donasi extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'table_donasi';

    protected $fillable = [
        'id_donatur',
        'id_masjid',
        'tanggal',
        'jumlah',
        'metode_pembayaran',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_donatur');
    }
}
