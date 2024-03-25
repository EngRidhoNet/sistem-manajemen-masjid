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



    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // destination path relative to the disk above
        $destination_path = "image";

        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            Storage::delete(Str::replaceFirst('storage/', 'public/', $this->{$attribute_name}));

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        $disk = "public";
        // filename is generated -  md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension()
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];
    }
}
