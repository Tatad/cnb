<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_banner_image',
        'service_banner_title',
        'service_banner_text',
        'service_animated_text_title',
        'service_animated_text',
        'info_with_image',
    ];

    protected $casts = [
        'info_with_image' => 'json'
    ];

    public function getServiceBannerImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getInfoWithImageAttribute($value)
    {
        if(isset($value)) {
            $value = json_decode($value, true);
            foreach ($value as &$info){
                $info['image'] = config('app.AWS_Url') . $info['image'];
            }
            return $value;
        }
    }

    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
