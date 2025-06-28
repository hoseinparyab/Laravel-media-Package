<?php

namespace Theparyab\LaravelMedia\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Theparyab\LaravelMedia\Enums\MediaTypeEnum;
use Theparyab\LaravelMedia\Models\Media;

class ImageService
{
    public function upload(UploadedFile $file, bool $isPrivate = false)
    {
        $filename = $file->getClientOriginalName();
        //Upload file
        Storage::putFileAs(  $path='images', $file,$filename .'-' .now());
        //create a row for migration
        Media::query()->create([
            'user_id' => auth()->id(),
            'filename' => $filename,
            'path' => $path,
            'is_private' => $isPrivate,
            'files' =>[],
            'type' =>MediaTypeEnum::TYPE_IMAGE->value,
        ]);


        //Return filename
        return $filename;
    }
}