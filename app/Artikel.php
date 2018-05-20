<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $fillable = [
      'artikel_id', 'artikel_title', 'artikel_content'

    ];

    public function budaya()
    {
      return $this->belongsTo('App\Budaya');
    }
}
