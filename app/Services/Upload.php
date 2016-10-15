<?php
/**
 * Created by PhpStorm.
 * User: Press
 * Date: 7/25/2016
 * Time: 10:12 PM
 */

namespace App\Services;
use Intervention\Image\Facades\Image;

class Upload
{
    public function image($input, $path, $height, $with){
        $filename = uniqid().$input->getClientOriginalName();
        if(!file_exists($path)){
            mkdir($path, 0777, true);
        }
        $input->move($path, $filename);
        $path = $path.'/'.$filename;
        Image::make(sprintf($path,  $filename))->resize($height, $with)->save();
        return $path;
    }
    public function file($input, $path){
        $filename = uniqid().$input->getClientOriginalName();
        if(!file_exists($path)){
            mkdir($path, 0777, true);
        }
        $input->move($path, $filename);
        $path = $path.'/'.$filename;
        return $path;
    }
}