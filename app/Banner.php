<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_video',
        'banner_title_logo',
        'banner_title',
        'philosophy_image',
        'philosophy_text',
        'philosophy_link_title',
        'our_team_top_text',
        'our_team_background_image',
        'our_team_title',
        'our_team_bottom_text',
        'gallery_small_text',
        'gallery_big_text',
        'galleries',
    ];

    protected $casts = [
        'galleries' => 'json',
        'philosophy_text' => 'json',
    ];

    public function getBannerVideoAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }


    public function getBannerTitleLogoAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getPhilosophyImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

    public function getOurTeamBackgroundImageAttribute($value): ?string
    {
        if(isset($value)) {
            $value = config('app.AWS_Url') . $value;
            return $value;
        }
    }

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


    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
