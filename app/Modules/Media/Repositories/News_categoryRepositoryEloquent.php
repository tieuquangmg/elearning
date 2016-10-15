<?php
namespace App\Modules\Media\Repositories;

use App\Modules\Media\Models\News_category;
use DateTime;
class News_categoryRepositoryEloquent implements News_categoryRepository
{
    protected $model;
    public function __construct(News_category $model)
    {
        $this->model = $model;
    }

    public function data(){
        return $this->model->paginate(10);
    }
    public function find($id){
        return $this->model->find($id);
    }

    public function create($input){
        return $this->model->create($input);
    }

    public function update($input){
        $data = $this->model->find($input['id']);
        $data -> name = $input['name'];
        $data -> save();
        return $data;
    }

    public function delete($input){
        if(isset($this->model->find($input)->news)) return false;
        return $this->model->whereIn('id', $input)->delete();
    }
    public function detail($id){
        $data = $this->model->find($id);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data->last_view = new DateTime();
        $data->view +=1; $data->save();
        return $data;
    }
}
