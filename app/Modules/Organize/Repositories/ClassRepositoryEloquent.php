<?php 
namespace App\Modules\Organize\Repositories;
use App\Modules\Organize\Models\Score;
use App\Modules\Organize\Models\User_test;
use App\Modules\Subject\Models\Subject;
use App\Modules\Organize\Models\Classes;
use App\Modules\Security\Models\RoleUser;
use App\Modules\Auth\Models\User;
use App\Modules\Security\Models\Role;
use App\Modules\Subject\Models\Test;
use App\Modules\Subject\Models\Theory;
use App\Modules\Subject\Models\Unit;
use Illuminate\Support\Facades\DB;

class ClassRepositoryEloquent implements ClassRepository
{
   protected $model, $data;
   public function __construct(Classes $model){
      $this->model = $model;
       $this->data['prefix'] = 'organize.';
   }

    public function data($request,$prepage,$url){
        if($request){
            $name = $request['name'];
            $code = $request['code'];
            $teacher = $request['teacher'];
            $subject = $request['subject'];
            $year = $request['year'];
            $semester = $request['semester'];
            $active = $request['active'];
        }else{
            $name = '';
            $code = '';
            $teacher = '';
            $subject = '';
            $year = '';
            $semester = '';
            $active = '';
        }
        if($prepage == null){
            $prepage = 10;
        }
        $data =  $this->model->where(function ($query) use ($request,$name,$code,$teacher,$subject,$year,$semester,$active){
            if($request){
                if($request['name'] != null){
                    $query->where('name','like','%'.$name.'%');
                }
                if($request['code'] != null){
                    $query->where('code','like','%'.$code.'%');
                }
                if($request['subject'] != null){
                    $query->whereIn('subject_id',Subject::where('name','like','%'.$subject.'%')->lists('id'));
                }
                if($request['teacher'] != null){
//                    $srt = "concat(first_name,' ',last_name) like '%m%'";
                    $query->whereIn('user_id',User::where('last_name','like','%'.$teacher.'%')->lists('id'));
                }
                if($request['year'] != null){
                    $query->where('year','like','%'.$year.'%');
                }
                if($request['semester'] != null){
                    $query->where('semester','like','%'.$semester.'%');
                }
                if($request['active'] != null){
                    $query->where('active','like','%'.$active.'%');
                }

            }
        })
            ->orderBy('id', 'ASC')->paginate($prepage);
        $data->setPath($url.'?name='.$name.'&f_select_number='.$prepage.'&code='.$code.'&teacher='.$teacher.'&subject='.$subject.'&year='.$year.'&semester='.$semester.'&active='.$active);
        $this->data['classes'] = $data;
        $this->data['subjects'] = Subject::lists('name', 'id');
        $this->data['teachers'] = User::filterRole('teacher')
            ->select('users.first_name', 'users.last_name', 'users.id')->get();
        return $this->data;
    }

//   public function data(){
//       $this->data['classes'] = $this->model->paginate();
//       $this->data['subjects'] = Subject::lists('name', 'id');
//       $this->data['teachers'] = User::filterRole('teacher')
//           ->select('users.first_name', 'users.last_name', 'users.id')->get();
//       return $this->data;
//   }
   public function create($input){
       $this->model->create($input);
   }
   public function update($input){
       
       $this->model->where('id', $input['id'])->update($input);
   }
   public function find($id){
       return $this->model->find($id);
   }
//   public function delete($input){
//       if(is_array($input))
//            $this->model->whereIn('id', $input)->delete();
//       $this->model->where('id', $input)->delete();
//   }
    public function delete($input){
//        RoleUser::whereIn('role_id', $input['ids'])->delete();
//        PermissionRole::whereIn('role_id', $input['ids'])->delete();
        return $this->model->whereIn('id', $input['ids'])->delete();
    }
    public function detail($id){
        $this->data['class'] = $this->model->with('teacher')->with('student')->with('subject')->find($id);
        $this->data['students'] = User::filterRole('student')
//            ->whereHas('classes',function ($query) use ($id) {
//            $query->where('classes.id','<>',$id);
//        })
        ->paginate(10);
        return $this->data;
    }
    public function searchUser($input){
        $this->data['students'] = User::filterRole('student')
            ->firstName(trim($input['first_name']))
            ->lastName(trim($input['last_name']))
            ->code(trim($input['code']))
            ->email(trim($input['email']))
            ->phoneNumber(trim($input['phone_number']))
            ->paginate(10);
    }
    public function enroll($input){
        return $this->model->find($input['class_id'])->student()->attach($input['ids']);
    }
    public function unenroll($input){
       return $this->model->find($input['class_id'])->student()->detach($input['ids']);
    }
//    public function test($id){
//        $unit_id = $this->model->find($id)->Subject->unit->lists('id')->toArray();
//        $user_id = Classes::find($id)->student;
//        $aaa = [];
//        foreach ($user_id as $key=>$value ){
//            $id = $value->id;
//            $aaa[$key][0] = $value;
//            $aaa[$key][1] = Unit::whereIn('id',$unit_id)->with(['unit_test'=>function($ff)use ($id){
//                $ff->where('user_id',$id);
//            }])->get();
//        }
//        $data['all_test'] = Unit::whereIn('id',$unit_id)->get();
//        $data['unit_id'] = $unit_id;
//        $data['data'] = collect($aaa);
//        return $data;
//    }

    public function test($id){
        $unit_id = $this->model->find($id)->Subject->unit->lists('id')->toArray();
        $user_id = Classes::find($id)->student;
        $aaa = [];
        foreach ($user_id as $key=>$value ){
            $id1 = $value->id;
            $aaa[$key][0] = $value;
            $aaa[$key][1] = Test::whereIn('unit_id',$unit_id)->with(['user_test'=>function($ff)use ($id1){
                $ff->where('user_id',$id1);
            }])->get();
        }
        $data['all_test'] = Test::whereIn('unit_id',$unit_id)->get();
        $data['unit_id'] = $unit_id;
        $data['data'] = collect($aaa);
        $data['class_id'] = $id;
        return $data;
    }
    public function updatetest($input){
        foreach ($input['user'] as $key=>$value){
            $exists = Score::where('user_id',$key)->where('class_id',$input['class_id'])->first();
            if($exists == null){
                Score::create(['user_id'=>$key,'class_id'=>$input['class_id'],'kiemtra'=>$value]);
            }else{
                Score::find($exists->id)->update(['user_id'=>$key,'class_id'=>$input['class_id'],'kiemtra'=>$value]);
            }
        }
    }

    public function attendance($id){
        $unit_id = $this->model->find($id)->Subject->unit()->orderBy('position')->lists('id')->toArray();
        $user_id = Classes::find($id)->student;
        $aaa = [];
        foreach ($user_id as $key=>$value ){
            $id1 = $value->id;
            $aaa[$key][0] = $value;
            $aaa[$key][1] = Unit::whereIn('id',$unit_id)->orderBy('position')
                ->with(['theory'=>function($ff)use ($id1){
                $ff->with(['user_theory'=> function($cc)use($id1){
                    $cc->where('watch_time',0)
                        ->where('user_id',$id1);
                }]);
            }])->get();
        }
        $data['unit'] = $this->model->find($id)->subject->unit()->orderBy('position')->get();
        $data['unit_id'] = $unit_id;
        $data['data'] = collect($aaa);
        return $data;
    }

    public function updateattendance($input){
        foreach ($input['user'] as $key=>$value){
            $exists = Score::where('user_id',$key)->where('class_id',$input['class_id'])->first();
            if($exists == null){
                Score::create(['user_id'=>$key,'class_id'=>$input['class_id'],'chuyencan'=>$value]);
            }else{
                Score::find($exists->id)->update(['user_id'=>$key,'class_id'=>$input['class_id'],'chuyencan'=>$value]);
            }
        }
    }
    public function score($id){
        $data['score'] = Score::where('class_id',$id)->get();
        return $data;
    }
    public function updatescore($input){
        foreach ($input['user'] as $key=>$value){
                Score::find($key)->update($value);
        }
    }
    public function filter($input,$class_id){
        $user_ids = Classes::find($class_id)->student->lists('id')->toArray();
        $data = User::FilterRole('student')->whereNotIn('users.id',$user_ids)
            ->where(function($query) use ($input){
                foreach($input as $key =>$value){
                    if($value != null && $key != 'page')
                    $query->where('users.'.$key,'like','%'.$value.'%');
                }
            })
            ->paginate(9);
       return $data;
    }
}