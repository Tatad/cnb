<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
      'log',
      'user_id',
      'session_hash'
    ];

    protected $casts = [
        'log' => 'json'
    ];
}
