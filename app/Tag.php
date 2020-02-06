<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama', 'slug'];
    public $timestams = true;
    public function artikel()
    {
        //model tag memiliki relasi many to many(belongstomany)
        //terhadap model 'artikel' yang terhubung oleh table
        //dari model artikel melalui kategori_id
        return $this->belongsToMany(
            'App\Artikel',
            'artikel_tag',
            'tag_id',
            'artikel_id'
        );
    }
}
