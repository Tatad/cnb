<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


/**
 * Store the form data file, returns the name
 *
 * @param UploadedFile $file
 * @param String $path
 * @return String
 */
function storeUploadedFile(UploadedFile $file, string $path = ""): String
{
    $fileName = uniqid('', true) . '.' . $file->getClientOriginalExtension();
    return Storage::disk('s3')->putFileAs($path, $file, $fileName);
}

/**
 * @param $data
 * @return String
 */
function getImgUrlShort($data){

    $count = strlen(config('app.AWS_Url'));
    $data = substr($data, $count);
    return $data;
}

/**
 * @param $title
 * @param $page
 * @param null $id
 * @return String
 */
function generateSlugAllPages($title, $page, $id = null)
{
    if($id){
        $id = ','. $id ;
    }else{
        $id = '';
    }
    $title = strtolower($title);
    $title = preg_replace('/[^a-zA-Z0-9\']/', " ", $title);
    $title = str_replace(" ", "_", $title);
    $validator = Validator::make(["slug" => $title],
        ['slug' => 'required|unique:'. $page .',slug'.$id]
    );
    if ($validator->fails()) {
        $title .= '_1';
        return generateSlugAllPages($title, $page);
    }
    return $title;
}

/**
 * @param $url
 * @return String
 */
function videoType($url) {
    if (strpos($url, 'youtube') > 0) {
        return 'youtube';
    }

    if (strpos($url, 'vimeo') > 0) {
        return 'vimeo';
    }

    return 'unknown';
}

/**
 * @param $url
 * @return String
 */
function getVideoId($url){
    preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#", $url, $matches);
    return $matches[2];
}

/**
 * @param UploadedFile $file
 * @return String
 */
function getFile($file){
    if(is_object($file)){
        return storeUploadedFile($file);
    }
    return getImgUrlShort($file);
}
