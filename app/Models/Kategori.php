<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $visible = ['nama'];

    protected $fillable = ['nama', 'slug'];

    public $timestamps = true;

    public function Wisata()
    {
        return $this->hasMany('App\Models\Wisata', 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
