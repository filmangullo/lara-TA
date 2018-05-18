<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    protected $table = 'budayas';

    protected $fillable = [
      'budaya_Id', 'budaya_Gambar', 'budaya_Lokasi'
    ];

    public function artikel()
    {
      return $this->hasOne('App\Artikel');
    }
}

$artikel = Artikel::first();

$artikel->budayas;
