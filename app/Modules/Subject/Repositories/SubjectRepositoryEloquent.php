<?php 
namespace App\Modules\Subject\Repositories; 

use App\Modules\Subject\Models\Subject;
use App\Services\Upload;

class SubjectRepositoryEloquent implements SubjectRepository
{
    protected $model;
    public function __construct(Subject $model){
        $this->model = $model;
    }
    public function data($key,$value = null,$prepage,$url){
        if($prepage == null){
            $prepage = 10;
        }
        $data =  $this->model->where(function ($query) use ($value,$key){
            if($value != null){
                $query->where($key,'like','%'.$value.'%');
            }
        })
            ->orderBy('id', 'desc')->paginate($prepage);
        $data->setPath($url.'?s='.$value.'&f_select_number='.$prepage);
        return $data;
    }
    public function search($name){
        return $this->model->where('name', 'like', '%'.$name.'%')->paginate(10);
    }
    public function create($input){
        $i = new Upload();
        if(isset($input['image'])) $input['image'] = $i->image($input['image'], 'image/subject', 268, 150);
        return $this->model->create($input);
    }
    public function update($input){
        $i = new Upload();
        if(isset( $input['image'])) $input['image'] = $i->image($input['image'], 'image/subject', 268, 150);
        return $this->model->where('id', $input['id'])->update($input);
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function delete($input){
//        RoleUser::whereIn('role_id', $input['ids'])->delete();
//        PermissionRole::whereIn('role_id', $input['ids'])->delete();
        return $this->model->whereIn('id', $input['ids'])->delete();
    }
    public function unit($id){
        return $this->model->with(['unit'=>function($que){
            $que->orderBy('position');
        }])->find($id);
    }
}