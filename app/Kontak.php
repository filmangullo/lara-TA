<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
      'kontak_name', 'kontak_email', 'kontak_topik', 'kontak_pesan'
    ];
}
