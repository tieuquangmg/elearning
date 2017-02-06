<?php 
namespace App\Modules\Organize\Repositories;
use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Cohot\Models\Stu_lop;
use App\Modules\Organize\Models\PLAN_HocKyDangKy_TC;
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
use Carbon\Carbon;
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
                    $query->whereIn('user_id',User::where('ho_ten','like','%'.$teacher.'%')->lists('id'));
                }
                if($request['year'] != null){
                    $query->where('year',$year);
                }
                if($request['semester'] != null){
                    $query->where('semester',$semester);
                }
                if($request['active'] != null){
                    $query->where('active','like','%'.$active.'%');
                }
            }
        })
            ->orderBy('updated_at', 'DESC')->paginate($prepage);
        $data->setPath($url.'?name='.$name.'&f_select_number='.$prepage.'&code='.$code.'&teacher='.$teacher.'&subject='.$subject.'&year='.$year.'&semester='.$semester.'&active='.$active);
        $this->data['classes'] = $data;
        $this->data['subjects'] = Subject::lists('name', 'id');
        $this->data['teachers'] = Nguoidung::select('nguoidungs.ho_ten','nguoidungs.id')->get();
        return $this->data;
    }

   public function create($input){
       $this->model->create($input);
   }
   public function update($input){
       $input['start_date'] = Carbon::createFromFormat('d/m/Y',$input['start_date']);
       $input['end_date'] = Carbon::createFromFormat('d/m/Y',$input['end_date']);
//       dd($input['start_date']);
       $id = $input['id'];
       unset($input['id']);
//       dd($input);
//       dd(123);
       $this->model->where('id',$id)->update($input);
//       dd(123);
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
//        dd($this->data['class']);
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
            ->paginate(15);
    }

    public function enroll($input)
    {
        $ids = array();
        foreach ($input['ids'] as $value){
            $ids[$value] = ['status'=>1];
        }
        return $this->model->find($input['class_id'])->student()->attach($ids);
    }

    public function unenroll($input)
    {
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
        $data['class_id'] = $id;
        return $data;
    }
    public function updatescore($input){
        foreach ($input['user'] as $key=>$value){
                Score::find($key)->update($value);
        }
    }

    public function filter($input, $class_id){
//        dd($input);
        $user_ids = Classes::find($class_id)->student->lists('id')->toArray();
        $data = User::whereNotIn('users.id', $user_ids)
//        $data = User::FilterRole('student')->whereNotIn('users.id',$user_ids)
            ->where(function ($query) use ($input){
                foreach ($input as $key => $value){
                    if ($key == 'ho_ten' && $value != ''){
                        $query->where('users.ho_ten', 'like', '%' . $value . '%');
                    }
                    if ($key == 'id_lop' && $value != ''){
                        $query->whereIn('users.id_lop',Stu_lop::where('Ten_lop','like','%'.$value.'%')->lists('ID_lop')->toArray());
                    }
                    if ($key == 'code' && $value != ''){
                        $query->where('users.code','=','1151001');
                    }
                    if ($key == 'email' && $value != ''){
                        $query->where('users.email','=',$value);
                    }
                    if ($key == 'phone_number' && $value != ''){
                        $query->where('users.phone_number', '=', $value);
                    }
                }
            })
            ->paginate(15);
        return $data;
    }
}