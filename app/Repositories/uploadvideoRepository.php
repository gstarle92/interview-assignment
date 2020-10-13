<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use App\Models\uploadVideo;

class uploadvideoRepository
{

    /**
     * CSVRepository constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @param $file
     * @param $extension
     * @return mixed
     */
    public function uploadvideoRepository($file, $extension)
    {
        return $this->upload($file, $extension);
    }

    /**
     * @param $file
     * @param $extension
     * @return mixed 
     */
    private function upload($file, $extension)
    {
        $path = Storage::putFileAs("myVideoFile", $file, uniqid() . "." . $extension);
        $uploadedFile = uploadVideo::create([
            'path' => $path,
            'processed' => false,
        ]);

        return $uploadedFile;
    }
}
