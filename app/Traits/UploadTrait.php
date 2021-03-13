<?php

namespace App\Traits; 

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{

    //no use for that anymore --> delete
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null) {
        $name = !is_null($filename) ? $filename : Str::random(25);
        $file = $resizedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
        return $file;
    }
}