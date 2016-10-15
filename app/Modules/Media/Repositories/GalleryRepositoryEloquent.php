<?php

namespace App\Modules\Media\Repositories;
use App\Modules\Media\Models\Gallery;

/**
 * Class GalleryRepositoryEloquent
 * @package namespace App\Modules\Media\Repositories;
 */
class GalleryRepositoryEloquent implements GalleryRepository
{
    protected $model;
    public function __construct(Gallery $model)
    {
        $this->model = $model;
    }
    public function delete($gallery){
        $images = $gallery->images();
        foreach ($gallery->images as $row){
            unlink(public_path($row->file_path));
            unlink(public_path('gallery/images/thumbs/'.$row->file_name));
        }
        $images->delete();
        $gallery->delete();
        return $gallery;
    }
    public function data(){
        return $this->model->all();
    }
    public function create($input){
        return $this->model->create($input);
    }
    public function update($input){}
    public function find($id){
        return $this->model->find($id);
    }
    public function detail($id){}

}
