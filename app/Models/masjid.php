<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\keuangan;
use App\Models\kegiatan;
use App\Models\pengurus;

class masjid extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'table_masjid';

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

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            Storage::delete(Str::replaceFirst('storage/', 'public/', $obj->image));
        });
    }
    public function setFotoMasjidAttribute($value)
    {
        $imageName = time() . '.' . $value->getClientOriginalExtension();
        $value->move(public_path('img'), $imageName);
        $this->attributes['foto_masjid'] = 'img/' . $imageName;
    }
}
