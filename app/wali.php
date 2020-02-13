<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $fillable = ['nama', 'id_mahasiswa'];
    public $timestaps = true;

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
    }
}
