<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $fillable = [

    ];

    public function budaya()
    {
      return $this->belongsTo('App\Budaya');
    }
}

$budaya = Budaya::first();

$budaya->artikels;
