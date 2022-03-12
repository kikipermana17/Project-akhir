<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biro extends Model
{
    use HasFactory;

    protected $visible = [ 'nama', 'alamat', 'telpon'];

    protected $fillable = [ 'nama', 'alamat', 'telpon'];

    public $timestamps = true;


    public function Wisata()
    {
        return $this->hasMany('App\Models\Wisata', 'wisata_id');
    }
}
