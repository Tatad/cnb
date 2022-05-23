<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'galleries',
        'order'
    ];

    protected $casts = [
        'galleries' => 'json'
    ];

    public function getGalleriesAttribute($value)
    {
        if(isset($value)) {
            $value = json_decode($value, true);
            foreach ($value as &$item){
                $item = config('app.AWS_Url') . $item;
            }
            return $value;
        }
    }
}
