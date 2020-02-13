<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama', 'kelas'];

    public function tabungan()
    {
        return $this->hasmany('App\tabungan', 'siswa_id');
    }
}
