<?php 
namespace App\Modules\Media\Repositories; 

use App\Modules\Media\Models\News;
use DateTime;
class NewsRepositoryEloquent implements NewsRepository
{
    protected $model;
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function data(){
        return $this->model->where('type', 0)->paginate(10);
    }
    public function find($id){
        return $this->model->find($id);
    }

    public function create($input){
        return $this->model->create($input);
    }

    public function update($input){
        $data = $this->model->find($input['id']);
        $data -> title = $input['title'];
        $data -> intro = $input['intro'];
        $data -> content = $input['content'];
        if(isset($input['active']))
        $data -> active = $input['active'];
        $data -> save();
        return $data;
    }

    public function delete($input){
        if(isset($this->model->find($input)->course)) return false;
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
