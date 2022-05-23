<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call_Back extends Model
{
    protected $table = 'call_backs';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'status'
    ];

    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
