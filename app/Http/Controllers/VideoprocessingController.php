<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\uploadvideoRepository;
use Illuminate\Http\Response;

class VideoprocessingController extends Controller
{
    //
    private $videoRepository;
    public function upload(Request $request, uploadvideoRepository $videoRepository)
    {



        try {
            $file = $request->file;

            $extension = strtolower($file->getClientOriginalExtension());

            $videoRepository->uploadvideoRepository($file, $extension);
            $message = array(
                'type' => 'success',
                'text' => 'Your file has been uploaded! You will receive an email when processing is complete!',
                'title' => 'Success',
            );
            //session()->flash('message', $message);
            return response()->json(['success' => 'File Uploaded Successfully']);
        } catch (\Exception $exception) {
            //dd($exception);
            return response()->json(['failed' => $exception->getMessage()]);

            //return abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Internal Server Error');
        }
    }
}
