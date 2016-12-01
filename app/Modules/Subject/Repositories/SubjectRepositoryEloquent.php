<?php 
namespace App\Modules\Subject\Repositories; 

use App\Modules\Cohot\Models\Plan_Bomon;
use App\Modules\Subject\Models\Subject;
use App\Services\Upload;

class SubjectRepositoryEloquent implements SubjectRepository
{
    protected $model;
    public function __construct(Subject $model){
        $this->model = $model;
    }
    public function data($request,$prepage,$url){
        if($request){
            $mamon = $request['code'];
            $tenmon = $request['tenmon'];
            $bomon = $request['bomon'];
            $trangthai = $request['trangthai'];
        }else{
            $mamon = '';
            $tenmon = '';
            $bomon = '';
            $trangthai = '';
        }
        if($prepage == null){
            $prepage = 10;
        }
        $data =  $this->model->where(function ($query) use ($request,$mamon,$tenmon,$bomon,$trangthai){
            if($request){
                if($mamon != null){
                    $query->Where('Ky_hieu','like','%'.$mamon.'%');
                }
                if($tenmon != null){
                    $query->Where('name','like','%'.$tenmon.'%');
                }
                if($bomon != null){
                    $query->whereIn('id_bm',Plan_Bomon::where('name','like','%'.$bomon.'%')->lists('id'));
                }
                if($trangthai != null){
                    $query->Where('active',$trangthai);
                }
            }
        })
            ->orderBy('id', 'desc')->paginate($prepage);
        $data->setPath($url.'?code='.$mamon.'&f_select_number='.$prepage.'&tenmon='.$tenmon.'&bomon='.$bomon.'&trangthai='.$trangthai);
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