<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul', 'slug',
        'deskripsi', 'foto', 'user_id', 'kategori_id'
    ];
    public $timestams = true;

    public function kategori()
    {
        //data model 'artikel' bisa dimiliki oleh model 'user'
        //melalui 'kategori_id'
        return $this->belongsTo('App\User', 'kategori_id');
    }
    public function user()
    {
        //data model 'artikel' bisa dimiliki oleh model 'user'
        //melalui 'kategori_id'
        return $this->belongsTo('App\User', 'user_id');
    }
    public function tag()
    {
        //model 'Artikel' memiliki relasi many to many(belongstomany)
        //terhadap model 'tag' yang terhubung oleh
        //'artikel_id'
        return $this->belongsToMany(
            'App\tag',
            'artikel_tag',
            'artikel_id',
            'tag_id'
        );
    }
}
