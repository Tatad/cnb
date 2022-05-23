<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_banner_image',
        'title',
        'send_request_title',
        'left_content_text_1',
        'left_content_text_2',
        'phone',
        'form_title',
        'map_image',
        'map_url',
        'social_media_title',
        'social_medias',
        'contacts_info_title',
        'contacts_info_phone',
        'contacts_info_address',
        'call_back_form_video',
        'call_back_form_image',
    ];

    protected $casts = [
        'social_medias' => 'json'
    ];

    public function getContactBannerImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getMapImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getCallBackFormVideoAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getCallBackFormImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }
}
