<?php
namespace App\Modules\Organize\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use App\Modules\Cohot\Models\Plan_Bomon;
use App\Modules\Organize\Models\ClassDetail;
use App\Modules\Organize\Repositories\ClassRepository;
use App\Modules\Security\Models\Role;
use App\Modules\Security\Models\RoleUser;
use App\Modules\Subject\Models\Class_meeting;
use App\Modules\Subject\Models\Class_meeting_time;
use App\Modules\Subject\Models\Meeting;
use App\Modules\Subject\Models\Stu_he;
use App\Modules\Subject\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Modules\Organize\Models\Classes;

class ClassesController extends OrganizeController
{
    protected $repository, $input;
    protected $prefix = 'organize.';

    public function __construct(ClassRepository $repository)
    {
//        $this->middleware(['permission:manager_class']);
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData(Request $request)
    {
        $url = $request->url();
        $value = $request->s;
        $perpage = $request->f_select_number;
        Input::flash();
        $data = $this->repository->data($request->all(), $perpage, $url);
//        $data['classes'] = DB::table('PLAN_LopTinChi_TC')->where('ID_lop_lt','<>',0)->paginate($perpage);
//        $data['subjects'] = DB::table('PLAN_MonTinChi_TC')->lists('Ky_hieu_lop_tc', 'ID_mon_tc');
//        $data['teachers'] = DB::table('SYS_NguoiDung')->select('SYS_NguoiDung.FullName','SYS_NguoiDung.UserID')->get();
        return view($this->prefix . 'class.data', $data);
    }

    public function postCreate()
    {
        try {
            $this->repository->create($this->input);
            Class_meeting::create(['class_id']);
            return redirect()->back()->withSuccess('Tạo lớp học thành công');
        } catch (\Exception $e) {
            return redirect()->back()->withError('Mã lớp học bị trùng vui lòng thử lại');
        }
    }

    public function postUpdate()
    {
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->back()->withSuccess('Cập nhật thành công');
    }

    public function getDelete()
    {
        return $this->repository->delete($this->input);
    }

    public function getFind($id)
    {
        return $this->repository->find($id);
    }

    public function getDetail($id)
    {
        $data = $this->repository->detail($id);
        return view($this->prefix . 'class.detail', $data);
    }

    public function getEnroll()
    {
        return $this->repository->enroll($this->input);
    }

    public function getTest($id)
    {
        $data = $this->repository->test($id);
        return view($this->prefix . 'class.test', $data);
    }

    public function getUpdateTest()
    {
        $this->input = array_except($this->input, ['_token']);
        $this->repository->updatetest($this->input);
        return response()->json(['success' => true, 'message' => 'cập nhật điểm kiểm tra thành công']);
    }

    public function getFilter($class_id)
    {
        $data['students'] = $this->repository->filter($this->input, $class_id);
        $data['filter'] = $this->input;
        return view($this->prefix . 'class.includes.listAddStudent', $data);
    }

    public function getUnEnroll()
    {
        return $this->repository->unenroll($this->input);
    }

    public function getAttendance($id)
    {
        $data = $this->repository->attendance($id);
        $data['class_id'] = $id;
        return view($this->prefix . 'class.attendance', $data);
    }

    public function postUpdateAttendance()
    {
        $this->input = array_except($this->input, ['_token']);
        $this->repository->updateattendance($this->input);
        return response()->json(['success' => true, 'message' => 'cập nhật điểm chuyên cần thành công']);
    }

    public function getScore($id)
    {
        $data = $this->repository->score($id);
//        dd($data);
        return view('organize.class.final_score', $data);
    }

    public function getUpdateScore()
    {
        $this->input = array_except($this->input, ['_token']);
        $this->repository->updatescore($this->input);
        return response()->json(['success' => true, 'message' => 'Cập nhật điểm thành công']);
    }

    public function getSyncSinhvien()
    {
        $data1 = DB::connection('qlsv')
            ->table('STU_HoSoSinhVien')
            ->join('STU_DanhSach', 'STU_DanhSach.ID_sv', '=', 'STU_HoSoSinhVien.ID_sv')
            ->select(['STU_HoSoSinhVien.*', 'STU_DanhSach.ID_lop', 'STU_DanhSach.Active'])
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    if (User::where('id_sync',$row->ID_sv)->get()->isEmpty()){
                        $value = array(
                            'id_sync' => $row->ID_sv,
                            'code' => $row->Ma_sv,
                            'ho_ten' => $row->Ho_ten,
                            'email' => $row->Email,
                            'phone_number' => $row->Dienthoai_canhan,
                            'sex' => $row->ID_gioi_tinh,
                            'password' => bcrypt(123456),
                            'address' => $row->Que_quan,
                            'image' => "",
                            'id_lop' => $row->ID_lop,
                            'active' => $row->Active,
                        );
                        if ($row->Ngay_sinh != null && $row->Ngay_sinh != '') {
                            $value['birthday'] = Carbon::createFromFormat('Y-m-d', substr($row->Ngay_sinh, 0, 10));
                        }
                        $user = User::create($value);
                    }
                }
            });
    }

    public function getSyncNguoidung()
    {
        $data1 = DB::connection('qlsv')
            ->table('SYS_NguoiDung')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    if (Nguoidung::find($row->UserName) == null) {
                        $value = array(
                            'id' => $row->UserID,
                            'name' => $row->UserName,
                            'ho_ten' => $row->FullName,
                            'email' => $row->Email,
                            'id_phong' => $row->ID_phong,
                            'id_khoa' => $row->ID_khoa,
                            'id_bomon' => $row->ID_Bomon,
                            'password' => bcrypt(123456),
                            'image' => "",
                            'active' => $row->Active,
                        );
                        $nguoidung = Nguoidung::create($value);
                    }
                }
            });
    }

    public function getSyncHe()
    {
        $data1 = DB::connection('qlsv')
            ->table('STU_He')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $value = array(
                        'id' => $row->ID_he,
                        'ma_he' => $row->Ma_he,
                        'ten_he' => $row->Ten_he
                    );
                    $bomon = Stu_he::firstOrNew($value);
                    $bomon->save();
                    if ($bomon->wasRecentlyCreated) {
                        echo 'Created' . $bomon->ten_he . 'successfully';
                    } else {
                        echo ' --- ';
                    }
                }
            });
    }

    public function getSyncSubject()
    {
//        $data = DB::connection('qlsv')
//            ->table('STU_DanhSachLopTinChi')
//            ->join('STU_HoSoSinhVien','STU_HoSoSinhVien.ID_sv','=','STU_DanhSachLopTinChi.ID_sv')
//            ->select('STU_HoSoSinhVien.*')
//            ->chunk(1000, function($rows){
//                foreach ($rows as $row){
//                    dump($row);
//                }
//            })
//            ;

//        foreach ($data['sinhvien'] as $value){
//
//        }
//        dd(count($data['sinhvien']));
//        $test = DB::table('aaaaa')->where('testcol20','ktci9m4hTUqSXqcQ')->get();
//        dd(count($test));
//        dd($test);
//         return view('organize.class.sync');
    }

    public function getSyncSubjectprocess()
    {
        $data1 = DB::connection('qlsv')
            ->table('MARK_MonHoc')
            ->join('PLAN_MonTinChi_TC', 'PLAN_MonTinChi_TC.ID_mon', '=', 'MARK_MonHoc.ID_mon')
            ->select('PLAN_MonTinChi_TC.ID_mon_tc', 'PLAN_MonTinChi_TC.Ky_hieu_lop_tc', 'MARK_MonHoc.Ten_mon', 'MARK_MonHoc.ID_bm', 'MARK_MonHoc.ID_he_dt')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $value = array(
                        'id_sync' => $row->ID_mon_tc,
                        'code' => $row->Ky_hieu_lop_tc,
                        'name' => $row->Ten_mon,
                        'id_bm' => $row->ID_bm,
                        'id_he_dt' => $row->ID_he_dt,
                        'active' => 1);
                    $sub = Subject::firstOrNew($value);
                    $sub->save();
                    if ($sub->wasRecentlyCreated) {

                    } else {

                    }
                }
            });
    }

    public function postSyncProcess()
    {
        $offset = $this->input['offset'];
        $limit = $this->input['limit'];
        $count = 0;
        $data = DB::connection('qlsv')
            ->table('STU_DanhSachLopTinChi')
            ->join('STU_HoSoSinhVien', 'STU_HoSoSinhVien.ID_sv', '=', 'STU_DanhSachLopTinChi.ID_sv')
            ->select('STU_HoSoSinhVien.*')
            ->limit(5)
            ->chunk(1, function ($rows) use ($count) {

            });
        if ($data != '' && $data != null) {
            return json_encode(['success' => true, 'message' => $count]);
        } else {
            return json_encode(['success' => false]);
        }
    }

    public function getSyncClass()
    {
        return view('organize.class.sync');
    }

    public function postSyncClass()
    {
        $user_id = Auth::guard('nguoidung')->user()->id;
        $inserted = collect();
        $data1 = DB::table('PLAN_LopTinChi_TC')
//          ->join('PLAN_SukiensTinChi_TC','PLAN_SukiensTinChi_TC.ID_lop_tc','=','PLAN_LopTinChi_TC.ID_lop_lt')
            ->join('PLAN_MonTinChi_TC', 'PLAN_MonTinChi_TC.ID_mon_tc', '=', 'PLAN_LopTinChi_TC.ID_mon_tc')
            ->join('PLAN_HocKyDangKy_TC', 'PLAN_HocKyDangKy_TC.Ky_dang_ky', '=', 'PLAN_MonTinChi_TC.Ky_dang_ky')
            ->join('MARK_MonHoc', 'PLAN_MonTinChi_TC.ID_mon', '=', 'MARK_MonHoc.ID_mon')
            ->where('PLAN_LopTinChi_TC.ID_lop_lt', '<>', 0)
//            ->where('PLAN_LopTinChi_TC.ID_mon_tc','=',2191)
            ->select('PLAN_LopTinChi_TC.*',
                'MARK_MonHoc.Ten_mon',
                'PLAN_MonTinChi_TC.Ky_hieu_lop_tc',
//                'PLAN_MonTinChi_TC.ID_mon_tc',
                'PLAN_HocKyDangKy_TC.Nam_hoc',
                'PLAN_HocKyDangKy_TC.Tu_ngay as ky_tu_ngay',
                'PLAN_HocKyDangKy_TC.Den_ngay as ky_den_ngay',
                'PLAN_HocKyDangKy_TC.Hoc_ky'
            )
            ->chunk(100, function ($rows) use ($user_id, $inserted) {
                foreach ($rows as $row) {
                    if (Classes::where('id_sync', $row->ID_lop_tc)->get()->isEmpty()) {
                        if (Subject::where('id_sync', $row->ID_mon_tc)->get()->isEmpty()) {
                            $id_mon = $row->ID_mon_tc;
                        } else {
                            $id_mon = Subject::where('id_sync', $row->ID_mon_tc)->first()->id;
                        }
                        $value = array(
                            'id_sync' => $row->ID_lop_tc,
                            'name' => $row->Ten_mon,
                            'code' => $row->Ky_hieu_lop_tc,
                            'subject_id' => $id_mon,
                            'stt_lop' => $row->STT_lop,
                            'user_id' => $row->ID_cb,
                            'create_by' => $user_id,
                            'year' => $row->Nam_hoc,
                            'limit' => $row->So_sv_max,
                            'start_date' => $row->ky_tu_ngay,
                            'end_date' => $row->ky_den_ngay,
//                            'start_date' => substr($row->ky_tu_ngay,0,-4),
//                            'end_date' => substr($row->ky_den_ngay,0,-4),
                            'semester' => $row->Hoc_ky,
                            'active' => 1);
//                        dd($value);
                        $class = Classes::create($value);
                        $inserted->push($row);
                        if ($class->wasRecentlyCreated) {
                        } else {
                        }
                    } else {
                        if (Subject::where('id_sync', $row->ID_mon_tc)->get()->isEmpty()) {
                            $id_mon = $row->ID_mon_tc;
                        } else {
                            $id_mon = Subject::where('id_sync', $row->ID_mon_tc)->first()->id;
                        }
                        $value = array(
                            'id_sync' => $row->ID_lop_tc,
                            'subject_id' => $id_mon,
                            'stt_lop' => $row->STT_lop,
                            'user_id' => $row->ID_cb,
                            'create_by' => $user_id,
                            'year' => $row->Nam_hoc,
                            'limit' => $row->So_sv_max,
                            'start_date' => $row->ky_tu_ngay,
                            'end_date' => $row->ky_den_ngay,
                            'semester' => $row->Hoc_ky,
                            'active' => 1);
                        $class = Classes::where('id_sync', $row->ID_lop_tc)->update($value);
                    }
//                    return false;
                }
//                return false;
            });
        return json_encode(['success' => true, 'inserted' => $inserted]);
    }

    public function getSyncClassDetail()
    {
        $data1 = DB::connection('qlsv')
            ->table('STU_DanhSachLopTinChi')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $value = array(
                        'id' => $row->ID,
                        'user_id' => $row->ID_sv,
                        'class_id' => $row->ID_lop_tc,
                        'status' => $row->Duyet);
                    $sub = ClassDetail::firstOrNew($value);
                    $sub->save();
//                    if($sub->wasRecentlyCreated){
//
//                    } else {
//
//                    }
                }
            });
    }

    public function getSetting($id)
    {
        $unit_id = Classes::find($id)->subject->unit->lists('id');
        $data['meeting_time'] = Meeting::whereIn('unit_id', $unit_id)->with('class_meeting_time')->get();
        return view('organize.class.setting', $data);
    }

    public function postSetting()
    {
        unset($this->input['_token']);
        Class_meeting_time::whereNotIn('id', array_pluck($this->input, 'id'))->delete();
        foreach ($this->input as $row){
            if (array_has($row, 'id')){
                $row['time_start'] = Carbon::createFromFormat('d/m/Y H:i', $row['time_start']);
                Class_meeting_time::find($row['id'])->update($row);
            } else {
                unset($row['id']);
                $row['time_start'] = Carbon::createFromFormat('d/m/Y H:i', $row['time_start']);
                Class_meeting_time::create($row);
            }
        }
        return redirect()->back();
    }
    public function getSyncForum(){
        $count = 0;
        $connect = DB::connection('forum');
        $classes = Classes::all();
        foreach ($classes as $row){

//            dd($row->subject->plan_bomon != null);
            if($row->subject->plan_bomon != null){
//                dd($row->subject->plan_bomon->Ma_bo_mon);
            }
            $exists = empty($connect->table('node')->where('node_name',$row->id.'-')->where('node_type_id','Forum')->get());
            if($row->subject->id_bm == 0 || $node_name = $row->subject->plan_bomon == null){
                $node_name = 'BMK';
            }else{
                $node_name = $row->subject->plan_bomon->Ma_bo_mon;
            };
            $parent = $connect->table('node')->where('node_name',$node_name)->first();
//            dd($parent);
            if($exists){
                $node_id = $connect->table('node')
                    ->insertGetId([
//                    'node_id' => '$row->,
                        'title' => $row->name.' - '.$row->code.' - '.$row->stt_lop,
                        'description' => $row->name,
                        'node_name' => $row->id.'-',
                        'node_type_id' => 'Forum',
                        'parent_node_id' => $parent->node_id,
                        'display_order' => 1,
                        'display_in_list' => 1,
                        'lft' => $parent->lft + 1,
                        'rgt' => $parent->rgt - 1,
                        'depth' => 3,
                        'style_id' => 1,
                        'effective_style_id' => 1,
                        'breadcrumb_data' => null,
                    ]);
                $connect->table('forum')->insert([
                    'node_id' => $node_id,
                    'allow_posting' => 1,
                    'allow_poll' => 1,
                    'find_new' => 1,
                    'prefix_cache' => '',
                ]);
//                $connect->table('xf_permission_combination')->where('user_id',108)->get();
//                $connect->table('permission_cache_content')->insert([
//                    'permission_combination_id'=>, 'content_type'=>, 'content_id'=>, 'cache_value'=>
//                ]);
            }
//            dd(1);
        }
        dd($count);
    }
}