<?php
namespace App\Modules\Organize\Controllers;

use App\Http\Controllers\Controller;
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
                    if (User::find($row->ID_sv) == null) {
                        $value = array(
                            'id' => $row->ID_sv,
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

    public function getSyncSubjectprocess(){
        $data1 = DB::connection('qlsv')
            ->table('MARK_MonHoc')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $value = array(
                        'id' => $row->ID_mon,
                        'Ky_hieu' => $row->Ky_hieu,
                        'name' => $row->Ten_mon,
                        'id_bm' => $row->ID_bm,
                        'id_he_dt' => $row->ID_he_dt,
                        'active' => 1);
                    $sub = Subject::firstOrNew($value);
                    $sub->save();
                    if ($sub->wasRecentlyCreated) {
                        echo 'Created successfully';
                    } else {
                        echo 'Already exist';
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
    public function getSyncClass(){
        return view('organize.class.sync');
    }
    public function postSyncClass()
    {
        $user_id = Auth::user()->id;
        $inserted = collect();
        $data1 = DB::connection('qlsv')
            ->table('PLAN_LopTinChi_TC')
//            ->join('PLAN_SukiensTinChi_TC','PLAN_SukiensTinChi_TC.ID_lop_tc','=','PLAN_LopTinChi_TC.ID_lop_lt')
            ->join('PLAN_MonTinChi_TC', 'PLAN_MonTinChi_TC.ID_mon_tc', '=', 'PLAN_LopTinChi_TC.ID_mon_tc')
            ->join('PLAN_HocKyDangKy_TC', 'PLAN_HocKyDangKy_TC.Ky_dang_ky','=','PLAN_MonTinChi_TC.Ky_dang_ky')
            ->select('PLAN_LopTinChi_TC.*',
                'PLAN_MonTinChi_TC.ID_mon',
                'PLAN_HocKyDangKy_TC.Nam_hoc',
                'PLAN_HocKyDangKy_TC.Tu_ngay as ky_tu_ngay',
                'PLAN_HocKyDangKy_TC.Den_ngay as ky_den_ngay',
                'PLAN_HocKyDangKy_TC.Hoc_ky'
            )
//            ->where('PLAN_MonTinChi_TC.ID_mon','=',6677)
            ->chunk(100, function ($rows) use ($user_id, $inserted) {
                foreach ($rows as $row) {
//                    dump($row);
                    if (Classes::find($row->ID_lop_tc) == null) {
                        $value = array(
                            'id' => $row->ID_lop_tc,
                            'subject_id' => $row->ID_mon,
                            'stt_lop' => $row->STT_lop,
                            'user_id' => $row->ID_cb,
                            'create_by' => $user_id,
                            'year' => $row->Nam_hoc,
                            'limit' => $row->So_sv_max,
                            'start_date' => substr($row->ky_tu_ngay,0,-4),
                            'end_date' => substr($row->ky_den_ngay,0,-4),
                            'semester' => $row->Hoc_ky,
                            'active' => 1);
                        $class = Classes::create($value);
                        $inserted->push($row);
                        if ($class->wasRecentlyCreated){
                        } else {
                        }
                    }else{
                        $value = array(
                            'id' => $row->ID_lop_tc,
                            'subject_id' => $row->ID_mon,
                            'stt_lop' => $row->STT_lop,
                            'user_id' => $row->ID_cb,
                            'create_by' => $user_id,
                            'year' => $row->Nam_hoc,
                            'limit' => $row->So_sv_max,
                            'start_date' => substr($row->ky_tu_ngay,0,-4),
                            'end_date' => substr($row->ky_den_ngay,0,-4),
                            'semester' => $row->Hoc_ky,
                            'active' => 1);
                        $class = Classes::find($row->ID_lop_tc)->update($value);
                    }
                }
//                return false;
            });
        return json_encode(['success' => true,'inserted'=> $inserted]);
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
    public function getSetting($id){
        $unit_id = Classes::find($id)->subject->unit->lists('id');
        $data['meeting_time'] = Meeting::whereIn('unit_id',$unit_id)->with('class_meeting_time')->get();
        return view('organize.class.setting',$data);
    }
    public function postSetting(){
        unset($this->input['_token']);
        Class_meeting_time::whereNotIn('id',array_pluck($this->input,'id'))->delete();
        foreach ($this->input as $row){
            if(array_has($row,'id')){
                $row['time_start'] = Carbon::createFromFormat('d/m/Y H:i',$row['time_start']);
                Class_meeting_time::find($row['id'])->update($row);
            }else{
                unset($row['id']);
                $row['time_start'] = Carbon::createFromFormat('d/m/Y H:i',$row['time_start']);
                Class_meeting_time::create($row);
            }
        }
        return redirect()->back();
    }
}