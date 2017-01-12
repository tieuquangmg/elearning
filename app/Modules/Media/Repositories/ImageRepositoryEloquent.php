<?php

namespace App\Modules\Media\Repositories;

use App\Modules\Media\Models\Gallery;
use Illuminate\Support\Facades\Auth;


/**
 * Class ImageRepositoryEloquent
 * @package namespace App\Modules\Media\Repositories;
 */
class ImageRepositoryEloquent implements  ImageRepository
{

    public function postUpload($request){
        //dd($request);
        $file = $request['video_upload'];
        $filename = uniqid().$file->getClientOriginalName();
        if(!file_exists('gallery/images')){
            mkdir('gallery/images', 0777, true);
        }

        $file->move('gallery/images', $filename);

        if(!file_exists('gallery/images/thumbs')){
            mkdir('gallery/images/thumbs', 0777, true);
        }
        \Intervention\Image\Facades\Image::make('gallery/images/'.$filename)->resize(240, 160)->save('gallery/images/thumbs/'.$filename, 50);

        $gallery = Gallery::find($request['gallery_id']);

        $image = $gallery->images()->create([
            'gallery_id' => $request['gallery_id'],
            'file_name' => $filename,
            'file_size' => $file->getClientSize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'gallery/images/'.$filename,
            'created_by' => Auth::guard('nguoidung')->user()->id
        ]);
        return $image;
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function getDelete($id){

    }

    
}
