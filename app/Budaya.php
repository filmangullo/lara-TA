<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    protected $table = 'budayas';

    protected $fillable = [
      'budaya_img', 'budaya_lokasi'
    ];

    public function artikel()
    {
      return $this->hasOne('App\Artikel');
    }
}

$artikels = Artikel::first();

$artikels->budayas;
