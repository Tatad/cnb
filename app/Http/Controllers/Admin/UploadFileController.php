<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request){
        $file = $request->file;
        if ($file){
            return storeUploadedFile($file);
        }
    }
}
