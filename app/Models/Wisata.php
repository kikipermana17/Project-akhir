<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $visible = ['kategori_id', 'nama_wisata', 'alamat', 'deskripsi', 'fasilitas', 'biro_id', 'cover'];

    protected $fillable = ['kategori_id', 'slug', 'nama_wisata', 'alamat', 'deskripsi', 'fasilitas', 'slug', 'biro_id', 'cover'];

    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }

    public function Biro()
    {
        return $this->belongsTo('App\Models\Biro', 'biro_id');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/wisata/' . $this->cover))) {
            return asset('image/wisata/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/wisata/' . $this->cover))) {
            return unlink(public_path('image/wisata/' . $this->cover));
        }

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
