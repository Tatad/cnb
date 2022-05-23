<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'position',
        'avatar',
        'description',
    ];

    public function getAvatarAttribute($value)
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
        }
        return $value;
    }
}
