<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Philosophy extends Model
{
    protected $fillable = [
        'philosophy_banner_image',
        'philosophy_title',
        'philosophy_text',
        'philosophy_animated_text_title',
        'philosophy_animated_text',
        'info_with_image',
        'info_with_image_text',
        'text_without_image'
    ];

    public function getPhilosophyBannerImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getInfoWithImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
