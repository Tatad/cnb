<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career_context extends Model
{
    protected $fillable = [
      'career_banner_image',
      'form_title'
    ];

    public function getCareerBannerImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }
}
