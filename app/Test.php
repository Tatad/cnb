<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

    protected $fillable = [
      'logs'  ,
    ];

    protected $casts = [
      'logs' => 'json',
    ];
}
