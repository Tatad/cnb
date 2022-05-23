<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'cover_letter',
        'cv',
    ];

    public function getCoverLetterAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getCvAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }
}
