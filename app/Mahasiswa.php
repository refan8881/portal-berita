<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'id_dosen'];
    public $timestamps = true;

    public function dosen()
    {
        return $this->belongsTo('App\dosen', 'id_dosen');
    }
    public function wali()
    {
        return $this->hasOne('App\wali', 'id_mahasiswa');
    }
    public function hobi()
    {
        return $this->belongsTomany(
            'App\dosen',
            'mahasiswa_hobi',
            'id_mahasiswa',
            'id_hobi'
        );
    }
}
