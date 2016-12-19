<?php

namespace App\Http\Controllers;

use App\Http\Middleware\EncryptCookies;
use App\Modules\Cohot\Models\plan_chuongtrinhdaotao;
use App\Modules\Cohot\Models\plan_chuongtrinhdaotaochitiet;
use App\Modules\Cohot\Models\Stu_lop;
use App\Modules\Media\Models\Message;
use App\Modules\Media\Models\News_category;
use App\Modules\Media\Models\Notify;
use App\Modules\Media\Models\User_notify;
use App\Modules\Organize\Models\ClassDetail;
use App\Modules\Organize\Models\Score;
use App\Modules\Organize\Models\Unit_class;
use App\Modules\Organize\Models\User_test;
use App\Modules\Subject\Models\Class_meeting;
use App\Modules\Subject\Models\Comment;
use App\Modules\Subject\Models\Hoi_dap;
use App\Modules\Subject\Models\Hoi_dap_tra_loi;
use App\Modules\Subject\Models\Meeting;
use App\Modules\Subject\Models\User_forums;
use App\Modules\Subject\Models\User_unit;
use Barryvdh\Debugbar\Middleware\Debugbar;
use BigBlueButton\BigBlueButton;

use BigBlueButton\Parameters\CreateMeetingParameters;
use BigBlueButton\Parameters\EndMeetingParameters;
use BigBlueButton\Parameters\GetMeetingInfoParameters;
use BigBlueButton\Parameters\IsMeetingRunningParameters;
use BigBlueButton\Parameters\JoinMeetingParameters;
use BigBlueButton\Responses\CreateMeetingResponse;
use BigBlueButton\Responses\GetMeetingInfoResponse;
use Illuminate\Http\Request;
use App\Modules\Auth\Models\User;
use App\Modules\Examination\Models\UnitTest;
use App\Modules\Examination\Models\UnitTestDetail;
use App\Modules\Media\Models\News;
use App\Modules\Organize\Models\Classes;
use App\Modules\Subject\Models\QuestionBank;
use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Models\Test;
use App\Modules\Subject\Models\Theory;
use App\Modules\Subject\Models\Unit;
use App\Modules\Subject\Models\User_theory;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Session;
use Response;
use DB;
use Crypt;

class StudyController extends Controller
{
    protected $data, $input;

    public function __construct()
    {
        parent::__construct();
        $this->input = Input::all();
    }

    public function getIndex()
    {
        $data['classes'] = User::find(Auth::user()->id)->classes;
        $data['news'] = News::take(7)->get();
        $data['thongbao'] = News::take(5)->get();
        $data['sinhvien'] = News::take(5)->get();
        $data['tuyensinh'] = News::take(5)->get();
        return view('frontend.dasdboard.index', $data);
    }

    public function getLanding()
    {
        return view('frontend.dasdboard.landing');
    }

    public function getSubject($id)
    {
        $data['classes'] = User::Where('id', Auth::user()->id)->with(['classes' => function ($query) {
            $query->where('start_date', '<', Carbon::now());
            $query->where('end_date', '>', Carbon::now());
            $query->where('start_date', '<>', null);
            $query->where('end_date', '<>', null);
        }]);
        $data['classes'] = $data['classes']->first()->classes;
        $data['class'] = Classes::with('subject')
            ->with('teacher')
            ->find($id);
        $data['feature'] = Classes::all()->random(7);
        return view('frontend.dasdboard.course.subject', $data);
    }

    public function getUnit($id, $class_id)
    {
        $data['class'] = Classes::find($class_id);
        $data['unit'] = Unit::with('theory')
            ->with('document')
            ->with('slide_video')
            ->with('subject')
            ->with('meeting')
            ->find($id);
        $exists1 = Unit::where('position', '<', $data['unit']->position)->get();
        $exists = Unit::where('position', '<', $data['unit']->position)->where('subject_id', $data['unit']->subject_id)
//            ->WhereHas('theory',function ($query){
//                $query->whereHas('user_theory',function($e){
//                    $e->where('watch_time','<>','0')
//                    ->where('user_id',Auth::user()->id)
//                    ;
//                });
//            })
//            ->whereDoesntHave('unit_test',function ($b){
//                $b->where('user_id',Auth::user()->id);
//            })
//            ->whereDoesntHave('unit_test', function ($b) {
//                $b->where('user_id', Auth::user()->id);
//            })
            ->whereDoesntHave('test', function ($b) {
                $b->whereHas('user_test', function ($c) {
                    $c->where('user_id', Auth::user()->id);
                });
            })
            ->get();
        dd($exists);
        if ($exists1->isEmpty()) {
            $data['permission'] = true;
        } else {
            if ($exists->isEmpty()) {
                $data['permission'] = true;
            } else {
                $data['permission'] = false;
            }
        }
        $data['tests'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id);
        }])->where('unit_id', $id)->get();

        return view('frontend.dasdboard.unit', $data);
    }

    public function getUnitTheory($id, $class_id)
    {
        $data['class'] = Classes::find($class_id);
        $data['unit'] = Unit::with('theory')
            ->find($id);
        $exists1 = Unit::where('position', '<', $data['unit']->position)->get();
        $exists = Unit::where('position', '<', $data['unit']->position)->where('subject_id', $data['unit']->subject_id)
//            ->WhereHas('theory',function ($query){
//                $query->whereHas('user_theory',function($e){
//                    $e->where('watch_time','<>','0')
//                    ->where('user_id',Auth::user()->id)
//                    ;
//                });
//            })
//            ->whereDoesntHave('unit_test',function ($b){
//                $b->where('user_id',Auth::user()->id);
//            })
//            ->whereDoesntHave('unit_test', function ($b) {
//                $b->where('user_id', Auth::user()->id);
//            })
            ->whereHas('test', function ($b) {
                $b->whereDoesntHave('user_test', function ($c) {
                    $c->where('user_id', Auth::user()->id);
                });
            })
            ->get();
        if ($exists1->isEmpty()) {
            $data['permission'] = true;
        } else {
            if ($exists->isEmpty()) {
                $data['permission'] = true;
            } else {
                $data['permission'] = false;
            }
        }
//        $data['permission'] = true;
        return view('frontend.dasdboard.unit_theory', $data);
    }

    public function getSlideVideo($id, $class_id)
    {
        $data['class'] = Classes::find($class_id);
        $data['unit'] = Unit::with('slide_video')
            ->find($id);
        $data['permission'] = true;
        return view('frontend.dasdboard.slide-video', $data);
    }

    public function getAudio($id, $class_id)
    {
        $data['class'] = Classes::find($class_id);
        $data['unit'] = Unit::with('audio')
            ->find($id);
        $data['permission'] = true;
        return view('frontend.dasdboard.audio', $data);
    }
    //Create Uniteset
    // kiểm tra
    public function getBeginTest($id, $unit_id, $class_id)
    {
        Session::put('url_back', 'study/begin_test' . '/' . $id . '/' . $unit_id . '/' . $class_id);
        $data['class'] = Classes::find($class_id);
        $data['unit'] = Unit::find($unit_id);

        $data['test'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id);
        }])
            ->where('unit_id', $unit_id)
            ->find($id);
        $data['user_test'] = User_test::where('test_id', $id)->where('user_id', Auth::user()->id)->get();
        return view('frontend.dasdboard.unit.begin_test', $data);
    }

    public function getUnitTest($id)
    {
        if (Auth::user()->hasRole(['student'])) {
            $data['user_test'] = Test::with(['user_test' => function ($q) {
                $q->where('user_id', Auth::user()->id)
                    ->with('user');
            }])->find($id);
            if (count($data['user_test']->user_test) >= 1) {
                $data['unit_test'] = $data['user_test']->user_test->first();
                $data['unit_test_detail'] = $data['unit_test']->user_test_detail;
                $data['length'] = count($data['unit_test_detail']);
                if ($data['user_test']->user_test->first()->status != 1) {
                    return view('frontend.dasdboard.unit.test_again', $data);
                } else {
                    session()->flash('success', 'Bạn làm lại bài này, điểm của bạn là' . $data['user_test']->user_test->first()->score);
                    return redirect()->route('study.tested', $id);
//                    return view('frontend.dasdboard.unit.result_test', $data);
                }
            } else {
                $data['test'] = QuestionBank::paginate($data['user_test']->number_question);
                $data['length'] = count($data['test']);
                $data['unit_test'] = User_test::create(['user_id' => auth()->user()->id, 'test_id' => $id, 'start_time' => Carbon::now(), 'work_time' => $data['user_test']->time]);
                foreach ($data['test'] as $row) {
                    UnitTestDetail::create(['unit_test_id' => $data['unit_test']->id, 'question_bank_id' => $row->id, 'answer' => $row->answer]);
                }
                return view('frontend.dasdboard.unit.test', $data);
            }
        }
        if (Auth::user()->hasRole(['teacher'])) {
            $data['test'] = Test::find($id);
            return view('frontend.dasdboard.unit.result_class_test', $data);
        }
    }
//    public function getUnitTest($id){
//
//        $data['unit']= Unit::find($id);
////        $now = Carbon::now();
////        $time = $now->subMinute(60);
//        $data['unit_test'] = UnitTest::where('status', 1)
//            ->where('unit_id', $id)->where('user_id', auth()->user()->id)->orderby('id', 'desc')
//            ->limit(1)->get();
//        if(count($data['unit_test'])==1){
//            $data['unit_test'] = $data['unit_test'][0];
//            $data['unit_test_detail'] = $data['unit_test']->unit_test_detail;
//            $data['length'] = count($data['unit_test_detail']);
//            return view('frontend.dasdboard.unit.test_again', $data);
//        }else{
//            $data['test'] = QuestionBank::paginate(40);
//            $data['length'] = count($data['test']);
//            $data['unit_test'] = UnitTest::create(['user_id'=>auth()->user()->id, 'unit_id' => $id, 'start_time' => Carbon::now(), 'work_time'=>1200 ]);
//            foreach ($data['test']  as $row){
//                UnitTestDetail::create(['unit_test_id'=> $data['unit_test']->id, 'question_bank_id' =>$row->id, 'answer'=> $row->answer]);
//            }
//            return view('frontend.dasdboard.unit.test', $data);
//        }
//    }
// xử lý
    public function postUnitTested()
    {
        $unit_test_id = User_test::find($this->input['unit_test_id']);
        $data['user_test'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id);
        }])->find($unit_test_id->test->id);
        $correct = 0;
        foreach ($this->input['question_id'] as $value) {
            if (isset($this->input['reply' . $value])) {
                $count = UnitTestDetail::where('unit_test_id', $this->input['unit_test_id'])
                    ->where('question_bank_id', $value)
                    ->where('answer', $this->input['reply' . $value])->count();
                if ($count == 1) $correct++;
            }
        }
        if ($unit_test_id->status != 1) {
            User_test::where('id', $this->input['unit_test_id'])->update(['score' => $correct, 'status' => 1, 'end_time' => Carbon::now()]);
            session()->flash('success', 'Điểm số của bạn là ' . $correct);
        } else {
            User_test::create(['user_id' => Auth::user()->id, 'test_id' => $unit_test_id->test_id, 'end_time' => Carbon::now(), 'score' => $correct, 'status' => 1]);
            session()->flash('success', 'Bạn làm lại bài này, điểm của bạn là ' . $correct);
        }
        $unit_id = Test::find($unit_test_id->test->id)->unit_id;
        $data['unit'] = Unit::find($unit_id);
        $data['correct'] = $correct;
        return view('frontend.dasdboard.unit.result_test', $data);
//        return redirect()->back();
    }

    // làm lại bài kiểm tra
    public function getUnitTested($test_id)
    {
        $data['user_test'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id);
        }])->find($test_id);
        $data['unit_test'] = $data['user_test']->user_test->first();
        $data['unit_test_detail'] = $data['unit_test']->user_test_detail;
        $data['length'] = count($data['unit_test_detail']);
        return view('frontend.dasdboard.unit.tested', $data);
    }

    //kết quả thi
    public function getResultTest($id)
    {

//        $data['user_test'] = User_test::find($id)->with('test')->get();
        $data['user_test'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id)
                ->with('user');
        }])->find(User_test::find($id)->test->id);
        return view('frontend.dasdboard.unit.result_test', $data);
    }

    //chi tiết kết quả thi
    public function getResultTestDetail($id)
    {
        $data['user_test'] = Test::with(['user_test' => function ($q) {
            $q->where('user_id', Auth::user()->id);
        }])->find($id);
        $data['unit_test'] = $data['user_test']->user_test->first();
        $data['unit_test_detail'] = $data['unit_test']->user_test_detail;
        $data['length'] = count($data['unit_test_detail']);
        $data['unit'] = Unit::find($data['user_test']->unit_id);
        return view('frontend.dasdboard.unit.result_test_detail', $data);
    }
//    public function getUnitTested($id){
//
//        $data['unit_test'] = User_test::where('unit_id', $id)->where('user_id', auth()->user()->id)->orderby('id', 'desc')
//            ->limit(1)->get();
//        $data['unit_test'] = $data['unit_test'][0];
//        $data['unit_test_detail'] = $data['unit_test']->unit_test_detail;
//        $data['length'] = count($data['unit_test_detail']);
//        return view('frontend.dasdboard.unit.tested', $data);
//    }
    public function getTheory($id, $class_id)
    {
//        $data['pdf'] = Response::make(file_get_contents(asset('gallery/document/toan-cao-cap-a1.pdf')), 200, [
//            'Content-Type' => 'application/pdf',
//            'Content-Disposition' => 'inline; filename="'.'Toan Cao Cap A1'.'"'
//        ]);
//        return view('frontend.dasdboard.theory');
//        dd(1);
//        dd($class_id);
        $data['class'] = Classes::Find($class_id);
        //thong tin bai hoc
        $data['theory'] = Theory::with('unit')->with('user_theory')->find($id);
        $data['comment'] = Comment::Where('theory_id', $id)->where('parent_id', 0)->orderBy('created_at', 'DESC')->get();
        $unit_id = $data['theory']->unit_id;
        $position = $data['theory']->position;
        $qqq = Theory::where('unit_id', $unit_id)->where('position', '<', $position)->whereHas('user_theory', function ($query) {
            $query->where('watch_time', '<>', 0);
        })->get();

        if (Auth::user()->hasRole(['student'])) {
            // kiem tra sinh vien da lam bai chua
            $exists = User_theory::where('user_id', Auth::user()->id)->where('theory_id', $id)->first();
            if ($exists == null) {
                User_theory::create(['user_id' => Auth::user()->id, 'theory_id' => $id]);
                // thoi gian con lai
                $data['watch_time'] = $data['theory']->time;
            } else {
                // thoi gian con lai
                $data['watch_time'] = $exists->watch_time;
            }
            if ($qqq->isEmpty()) {
                $data['permission'] = true;
            } else {
                $data['permission'] = false;
            }
        }
        if (Auth::user()->hasRole(['teacher'])) {
            $data['permission'] = true;
            $data['watch_time'] = 100;
        }
        return view('frontend.dasdboard.theory', $data);
    }

    //Reply testing
    public function getTesting()
    {
        $input = Input::all();
        $data = UnitTestDetail::where('unit_test_id', $input['unit_test_id'])
            ->where('question_bank_id', $input['question_bank_id'])
            ->pluck('id');
        UnitTestDetail::where('id', $data[0])->update(['reply' => $input['reply']]);
    }
//    public function getTranscript($id){
//    $class_id = User::find($id)->classes->lists('id');
//    $subject_ids = Classes::whereIn('id',$class_id)->lists('subject_id');
//    $subject = Subject::whereIn('id',$subject_ids)->get();
//    $data = [];
//    foreach($subject as $key=>$value){
//        $data[$key]['subject'] = $value;
//        $data[$key]['unit'] = Unit::whereIn('id',$value->unit->lists('id')->toArray())->with(['unit_test'=>function($e)use ($id){
//            $e->where('user_id',$id);
//        }])->get();
//    }
//    return view('frontend.dasdboard.transcript')->with('data',$data);
//}
    public function getTranscript($id)
    {
        dump(Auth::user()->roles);
        $class_id = User::find($id)->classes->lists('id');
        $subject_ids = Classes::whereIn('id', $class_id)->lists('subject_id');
        $subject = Subject::whereIn('id', $subject_ids)->get();
        $data = [];
        foreach ($subject as $key => $value) {
            $data[$key]['subject'] = $value;
            $data[$key]['unit'] = Test::whereIn('unit_id', $value->unit->lists('id')->toArray())->with(['user_test' => function ($e) use ($id) {
                $e->where('user_id', $id);
            }])->get();
        }
        return view('frontend.dasdboard.transcript')->with('data', $data);
    }

    public function getSyntheticTranscripts()
    {
        if (!$this->input || !array_has($this->input, 'hoc_ky')) {
            $this->input['hoc_ky'] = 0;
        }
        if (!$this->input || !array_has($this->input, 'loc')) {
            $this->input['loc'] = 0;
        }
//        $clas = ClassDetail::where('user_id','=',Auth::user()->id)->get();
//        dd($clas);
        $id_dt = User::find(Auth::user()->id)->lop->chuongtrinhdaotao->ID_dt;
        $diem = DB::table('plan_chuongtrinhdaotao')
            ->join('plan_chuongtrinhdaotaochitiet', function ($join) {
                $join->on('plan_chuongtrinhdaotao.ID_dt', '=', 'plan_chuongtrinhdaotaochitiet.ID_dt');
                if ($this->input && $this->input['hoc_ky'] != null && $this->input['hoc_ky'] != 0) {
                    $join->where('plan_chuongtrinhdaotaochitiet.Ky_thu', '=', $this->input['hoc_ky']);
                }
                if ($this->input && $this->input['loc'] != null && $this->input['loc'] != 0) {
                    if ($this->input['loc'] == 1 || $this->input['loc'] == 2) {
                        $join->where('plan_chuongtrinhdaotaochitiet.Elearning', '=', 1);
                    }
                }
            })
            ->where('plan_chuongtrinhdaotao.ID_dt', '=', $id_dt)
            ->leftJoin('classes', 'classes.subject_id', '=', 'plan_chuongtrinhdaotaochitiet.ID_mon')
            ->groupBy('plan_chuongtrinhdaotaochitiet.ID_mon')
            ->leftJoin('class_detail', function ($join) {
                $join->on('classes.id', '=', 'class_detail.class_id');
                $join->where('class_detail.user_id', '=', Auth::user()->id);
            })
            ->leftJoin('score', 'score.class_id', '=', 'classes.id')
            ->join('subjects', 'subjects.id', '=', 'plan_chuongtrinhdaotaochitiet.ID_mon')
            ->select(['plan_chuongtrinhdaotaochitiet.*', 'subjects.*', 'score.*'])
//            ->select(['plan_chuongtrinhdaotaochitiet.*'])
            ->get();
        $data['scrore'] = $diem;
        if ($this->input['loc'] == 2 || $this->input['loc'] == 3){
            $i = 0;
            $array = [];
            foreach ($diem as $value) {
                if ($value->user_id != null) {
                    $array[$i] = $value;
                }
                $i++;
            }
            $data['scrore'] = $array;
        }
        return view('frontend.dasdboard.diem_tong_hop', $data)->with('input', $this->input);
    }

    public function getMycourse()
    {
//        if (Auth::user()->hasRole(['student'])){
//            $data['classes'] = User::find(Auth::user()->id)->classes;
//        }else {
//            if (Auth::user()->hasRole(['teacher'])){
//                dd(2);
//                $data['classes'] = Classes::where('user_id', Auth::user()->id)->get();
//            }
//        }
        $data['classes'] = User::Where('id', Auth::user()->id)->with(['classes' => function ($query) {
            $query->where('start_date', '<', Carbon::now());
            $query->where('end_date', '>', Carbon::now());
            $query->where('start_date', '<>', null);
            $query->where('end_date', '<>', null);
        }]);
        $data['classes'] = $data['classes']->first()->classes;
        $class_ids = $data['classes']->lists('id');
        $fhgjhg = array();
        foreach ($class_ids as $key => $value){
            $fhgjhg[$value]['class'] = Classes::find($value);
            $unit = Unit_class::where('class_id', $value)
                ->where('start_time', '<', Carbon::now())
                ->where('end_time', '>', Carbon::now())
                ->first();
            if ($unit != null){ //khi them lop se insert vao bang
                $unit_id = $unit->unit_id;
            $fhgjhg[$value]['user-unit'] = User_unit::where('unit_id', $unit_id)->where('user_id', Auth::user()->id)->first();
            //lay so lan lam bai kiem tra
            $all_test = Test::where('unit_id', $unit_id)->get();
            $fhgjhg[$value]['test']['unit'] = $unit;
            $fhgjhg[$value]['test']['total'] = count($all_test);
            $tested = Test::where('unit_id', $unit_id)->whereHas('user_test', function ($query) {
                $query->where('user_id', Auth::user()->id)
                    ->where('status',1);
            })
                ->get();
            $fhgjhg[$value]['test']['tested'] = $tested ;
            $tested_ids = $tested->lists('id');
            $fhgjhg[$value]['test']['untestet'] = Test::where('unit_id', $unit_id)->whereNotIn('id',$tested_ids)->get();
                //hoi dap
                $fhgjhg[$value]['hoi_dap']['total'] = count(Hoi_dap::where('id_unit',$unit_id)->where('user_id',Auth::user()->id));
                $fhgjhg[$value]['forums']['total'] = count(User_forums::user_unit($unit_id));
            } else{
                $fhgjhg[$value]['user-unit'] = null;
                $fhgjhg[$value]['test']['unit'] = null;
                $fhgjhg[$value]['test']['tested'] = null;
                $fhgjhg[$value]['test']['untestet'] = null;
            }
        }
//        dd($fhgjhg);
//        $test = DB::table('classes')
//            ->join('units','units.subject_id','=','classes.subject_id')
//            ->join('user_unit','user_unit.unit_id','=','units.id')
//            ->join('users','users.id','=','user_unit.user_id')
//            ->join('tests','tests.unit_id','=','units.id')
//            ->where('user_unit.user_id','=',2)
//            ->get();
        $data['user_unit'] = collect($fhgjhg);
        $data['standings'] = User::take(6)->get();
//        dd($data);
        return view('frontend.dasdboard.course.list', $data);
    }

    public function getNews($id)
    {
        $data['data'] = News::where('news_category_id', $id)->orderBy('id', 'desc')->paginate(10);
        return view('frontend.dasdboard.news', $data);
    }

    public function getUpdateTime()
    {
        $time = $this->input['time'];
        $user = $this->input['user_id'];
        $theory = $this->input['theory_id'];
        User_theory::where('user_id', $user)->where('theory_id', $theory)->update(['watch_time' => $time]);
    }

    public function getNewsDetail($id)
    {
        $data['new'] = News::find($id);
        return view('frontend.dasdboard.news_detail', $data);
    }

// hồ sơ sinh viên///////////////////////////////////
    public function getProfile()
    {
        $data['profile'] = Auth::user();
        return view('frontend.dasdboard.profile', $data);
    }

    public function getQuaTrinh()
    {
        return view('frontend/dasdboard/user/quatrinh');
    }

    public function postProfile(Request $request)
    {
        $input = $request->all();
        $user = User::find(Auth::user()->id);
        if ($request->get('password') == '') {
            unset($input['password']);
        } else {
            $input['password'] = bcrypt($request->get('password'));
        }
        if (!$input['avatar'] == '') {
            $name = md5(Carbon::now()->toDateTimeString()) . $user->id . '.jpg';
            Image::make($input['avatar'])->save('images/people/' . $name);
            $input['image'] = 'images/people/' . $name;
        }
        $user->update($input);
        return redirect()->route('study.profile');
    }

    public function postAddComment(Comment $comment, Request $request)
    {
        if ($request->ajax()) {
            $comment->comment = $request->get('comment');
            $comment->user_id = $request->get('user_id');
            $comment->theory_id = $request->get('theory_id');
            $comment->parent_id = $request->get('parent_id');
            $comment->save();
            return view('frontend.dasdboard._include.commentajax')->with('comment', $comment);
        }
    }

    public function postLikeComment(Request $request)
    {
        if ($request->ajax()) {
            $coment = Comment::findOrFail($request->get('comment_id'));
            $coment->update(['like' => $coment->like + 1]);
            return json_encode(['success' => true, 'like' => $coment->like]);
        }
    }

    public function getMeeting($unit_id, $class_id)
    {
        $subject_id = Classes::find($class_id)->subject->id;
        Session::put('url_back', 'study/sub' . '/' . $class_id);
        $class = Classes::find($class_id);
        $meeting = Meeting::where('unit_id', $unit_id)->first();
        $bbb = new BigBlueButton();
        $IsMeetingRunningParameters = new IsMeetingRunningParameters(1000);
        $run = $bbb->isMeetingRunning($IsMeetingRunningParameters);
        $class_meeting = Class_meeting::where('class_id', $class_id)
            ->where('meeting_id', $meeting->id)
            ->first();
        $data = [];
        if (Auth::user()->id == $class->user_id) {
            $class_meeting = Class_meeting::create(['class_id' => $class_id, 'meeting_id' => $meeting->id]);
            $GetMeetingInfoParameters = new GetMeetingInfoParameters($class_meeting->id, '');
            $info = $bbb->getMeetingInfo($GetMeetingInfoParameters);
            $data['meeting'] = Meeting::with('class_meeting_time')->find($meeting->id);

            if ($info->getMeetingInfo()->getMeetingId() == '') {
                $data['running'] = false;
            } else {
                $data['running'] = true;
                $user_name = Auth::user()->full_name;
                $JoinMeetingParameters = new JoinMeetingParameters($class_meeting->id, $user_name, $info->getMeetingInfo()->getModeratorPassword());
                $JoinMeetingParameters->setRedirect(true);
                $data['getJoinMeetingURL'] = $bbb->getJoinMeetingURL($JoinMeetingParameters);
            }
            $data['class'] = $class;
        } else {
            if ($class_meeting != null) {
                $IsMeetingRunningParameters = new IsMeetingRunningParameters($class_meeting->id);
                $run = $bbb->isMeetingRunning($IsMeetingRunningParameters);
                if ($run->isRunning()) {
                    $GetMeetingInfoParameters = new GetMeetingInfoParameters($class_meeting->id, '');
                    $info = $bbb->getMeetingInfo($GetMeetingInfoParameters);
                    $user_name = Auth::user()->full_name;
                    $JoinMeetingParameters = new JoinMeetingParameters($class_meeting->id, $user_name, $info->getMeetingInfo()->getAttendeePassword());
                    $JoinMeetingParameters->setRedirect(true);
                    $url = $bbb->getJoinMeetingURL($JoinMeetingParameters);

//                        $data['meeting'] = Meeting::find($meeting->id);
//                        $data['running'] = false;
//                        $data['getJoinMeetingURL'] = $url;
//                        $data['class'] = $class;
                    return redirect($url);
                } else {
                    $data['meeting'] = Meeting::find($meeting->id)->with('class_meeting_time')->first();
                    $data['running'] = false;
                    $data['getJoinMeetingURL'] = '';
                    $data['class'] = $class;
                }
            } else {
                $data['meeting'] = Meeting::find($meeting->id)->with('class_meeting_time')->first();
                $data['running'] = false;
                $data['getJoinMeetingURL'] = '';
                $data['class'] = $class;
            }
        }
        $data['unit'] = Unit::find($unit_id);
//        dd($data);
        return view('frontend.dasdboard.meeting', $data);
    }

    public function postMeeting()
    {
        $this->input = Input::all();
        $id = $this->input['id'];
        $class_id = $this->input['class_id'];
        $class_meeting = Class_meeting::where('class_id', $class_id)->where('meeting_id', $id)->first();
        $class = Classes::find($this->input['class_id']);
        $bbb = new BigBlueButton();
        $createMeetingParams = new CreateMeetingParameters($class_meeting->id, $class->name);

        if ($this->input['user_id'] = Auth::user()->id) {
            $response = $bbb->createMeeting($createMeetingParams);
            if (Class_meeting::find($class_meeting->id)->get()->isEmpty()) {
            }
            Class_meeting::where('meeting_id', $id)->where('class_id', $class_id)->update(['attendee_pw' => $response->getAttendeePassword(), 'moderator_pw' => $response->getModeratorPassword()]);
            $user_name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $JoinMeetingParameters = new JoinMeetingParameters($class_meeting->id, $user_name, $response->getModeratorPassword());
            $JoinMeetingParameters->setRedirect(true);
            $getJoinMeetingURL = $bbb->getJoinMeetingURL($JoinMeetingParameters);
            return $getJoinMeetingURL;
        } else {

        }
    }

    public function postEndMeeting()
    {
        $class_id = $this->input['class_id'];
        $id = $this->input['id'];

        $class = Classes::find($class_id);
        $class_meeting = Class_meeting::where('class_id', $class_id)->where('meeting_id', $id)->first();
        if ($class->user_id = Auth::user()->id) {
            $bbb = new BigBlueButton();
            $endparams = new EndMeetingParameters($class_meeting->id, $class_meeting->moderator_pw);
            $res = $bbb->endMeeting($endparams);
        }
    }

    public function getIsMeetingRunning()
    {
        $this->input = Input::all();

        $class_meeting = Class_meeting::where('class_id', $this->input['class_id'])->where('meeting_id', $this->input['id'])->first();
        if ($class_meeting == null) {
            return response()->json(false, 200, ['Content-Type', 'application/json']);
        } else {
            $bbb = new BigBlueButton();
            $IsMeetingRunningParameters = new IsMeetingRunningParameters($class_meeting->id);
            $run = $bbb->isMeetingRunning($IsMeetingRunningParameters);
            return response()->json($run->isRunning(), 200, ['Content-Type', 'application/json']);
        }
    }

    public function postWorkTime()
    {
        $user_test = User_test::find($this->input['unit_test_id'])->update(['work_time' => $this->input['time']]);
    }

//    Hỏi đáp
    public function getAddQuestion($id, $class_id)
    {
        $data['unit'] = Unit::find($id);
        $data['class'] = Classes::find($class_id);
        return view('frontend.dasdboard.answers.add_question', $data);
    }

    public function postAddQuestion(Request $request)
    {
        if ($request->hasFile('file_dinh_kem')) {
            $image = strtotime(Carbon::now()) . '_' . $request->file('file_dinh_kem')->getClientOriginalName();
        }
        $request['user_id'] = Auth::user()->id;
        $cauhoi = Hoi_dap::create($request->all());
        return redirect()->route('study.getaddanswer', $cauhoi->id);
    }

    public function getQuestion()
    {
        $data['data'] = Hoi_dap::orderBy('id', 'desc')->get();
        return view('frontend.dasdboard.answers.list', $data);
    }

    public function getAddAnswer($id)
    {
        $data['data'] = Hoi_dap::with('tra_loi')->where('id', $id)->first();
//        dd($data['data']->tra_loi);
        return view('frontend.dasdboard.answers.add_answer', $data);
    }

    public function postAddAnswer()
    {
        unset($this->input['_token']);
        $hoi_dap = Hoi_dap_tra_loi::create($this->input);
        return Redirect::route('study.getaddanswer', $hoi_dap->id_hoi_dap)->with('message', 'Bạn đã trả lời câu hỏi');
    }

    public function getDanhsach($id)
    {
        $data['classes'] = User::where('id', Auth::user()->id)->with(['classes' => function ($query) {
            $query->where('start_date', '<', Carbon::now());
            $query->where('end_date', '>', Carbon::now());
        }])->first()->classes;
        $data['danh_sach'] = $users = User::whereHas('classes', function ($query) use ($id) {
            $query->where('classes.id', $id);
        })
            ->with(['user_login' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->get()
            ->sortByDesc(function ($users) {
                if (!$users->user_login->isEmpty()) {
                    return $users->user_login->first()->created_at;
                }
                return null;
            });
        return view('frontend/dasdboard/subject/student', $data);
    }
//tin nhan thong bao
    public function postReadMess(){
        Message::where('to',Auth::user()->id)->where('status',0)->update(['status'=>1]);
        return Response::json(array(
            'success' => true
        ));
    }
    public function postReadnoti(){
        User_notify::where('user_id',Auth::user()->id)->where('status',0)->update(['status'=>1]);
        return Response::json(array(
            'success' => true
        ));
    }

    public function getMessageDb()
    {
        $from_ids = Message::where('to', Auth::user()->id)->orderBy('updated_at', 'desc')->get()->lists('form')->unique()->toArray();
        $froms = User::whereIn('id', $from_ids)->with(['last_mess_from'=>function($query){
            $query->where('to', Auth::user()->id);
        }])->get();
        if ($this->input == null) {
            $all_mess = Message::where('to', Auth::user()->id)
                ->where('form', $froms->first()->id)
                ->orderBy('updated_at', 'desc')
                ->with('send_to')
                ->with('send_from')
                ->get();
        } else {
            $all_mess = Message::where('to', Auth::user()->id)
                ->where('form', $this->input['u'])
                ->orderBy('updated_at', 'desc')
                ->with('send_to')
                ->with('send_from')
                ->get();
        }
        $data['from'] = $froms;
        $data['all_mess'] = $all_mess;
//        dd($data);
        return view('frontend.dasdboard.media.message_db', $data);
    }

    public function getNotifydb(){
        $data['notify'] = User_notify::where('user_id',Auth::user()->id)->get();
        return view('frontend.dasdboard.media.notify_db',$data);
    }
}