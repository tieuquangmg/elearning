<?php 
namespace App\Modules\Subject\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Repositories\SubjectRepository;
use App\Services\Upload;
use Config;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class SubjectController extends BaseController
{
    protected $prefix = "subject.";

    protected $repository, $input;
    public function __construct(SubjectRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getData(Request $request)
    {
        $url = $request->url();
        $perpage = $request->f_select_number;
        Input::flash();
        $data = $this->repository->data($request->all(),$perpage,$url);
        return view($this->prefix.'data')->with(['subjects'=> $data, 'prefix'=>$this->prefix]);
    }
    public function getAdd(){
        return view($this->prefix.'create');
    }
    public function getEdit($id){
        $data['subject'] = Subject::find($id);
        return view($this->prefix.'update', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('subject.data')->withSuccess('Tạo thành công');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->route('subject.data')->withSuccess('Cập nhật thành công');
    }
    public function getDelete(){
        return $this->repository->delete($this->input);
    }
    public function getCompose(){
        return view($this->prefix."compose");
    }
    public function getUnit($id){
        $data['subject'] = $this->repository->unit($id);
        return view($this->prefix."unit", $data);
    }
    public function getAddUnit($id){
        $data['subject'] = $this->repository->find($id);
        return view($this->prefix."unit.create", $data);
    }
//    public function getSync(){
//        $host = Config::get('api_sync.host');
//        $client = new Client(['base_uri' => 'http://192.168.1.106:84']);
//        $response = $client->request('GET', '/api/apimonhoc/getallmonhoc',[
//            'query'=>[
//                'fields'=>'id,name,birthday',
//                'access_token' => 'EAACEdEose0cBABrLbbjZAasZCTyo4jnkZAxKQGAQZBVIv4KyLq0uL32zyFqAwtFeEi38mu3lYYlV2rmf2N8fPifCSQ8KyyGnUuhwDJg3wiQrExZCflWBF6wc36ZBY1KZConPnTr92UDXTwYIDFOeZC9By4xZBWVGnNqZBG61eqbVSMZCwZDZD'
//            ]]);
//        var_dump(collect(json_decode($response->getBody()->getContents(),true)));
//    }
    public function getSync(){
        $host = Config::get('api_sync.host');
//        $client = new Client(['base_uri' => 'http://192.168.1.106:84']);
//        $response = $client->request('GET', '/api/apimonhoc/getallmonhoc',[
//            'query'=>[
//                'fields'=>'id,name,birthday',
//                'access_token' => 'EAACEdEose0cBABrLbbjZAasZCTyo4jnkZAxKQGAQZBVIv4KyLq0uL32zyFqAwtFeEi38mu3lYYlV2rmf2N8fPifCSQ8KyyGnUuhwDJg3wiQrExZCflWBF6wc36ZBY1KZConPnTr92UDXTwYIDFOeZC9By4xZBWVGnNqZBG61eqbVSMZCwZDZD'
//            ]]);
        $input = '[{"ID_mon":6862,"Ky_hieu":"30TRA020","Ten_mon":"Tiếng Hàn Quốc A1","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":75,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6863,"Ky_hieu":"30TRA021","Ten_mon":"Tiếng Hàn Quốc A2","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":75,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6864,"Ky_hieu":"30TRA022","Ten_mon":"Tiếng Hàn Quốc B1","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":0,"Thuc_hanh_mh":150,"Bai_tap_mh":0},{"ID_mon":6865,"Ky_hieu":"20BUS002","Ten_mon":"Kinh tế vi mô","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":3,"Ly_thuyet_mh":45,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6866,"Ky_hieu":"20BUS003","Ten_mon":"Tài chính tiền tệ","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":2,"Ly_thuyet_mh":30,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6867,"Ky_hieu":"20BUS004","Ten_mon":"Quản trị học căn bản","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":2,"Ly_thuyet_mh":30,"Thuc_hanh_mh":0,"Bai_tap_mh":0}]';
        $input = collect(json_decode($input,true));
//        dd($data);
        $subject_ids = Subject::all()->lists('id');
//        dd($subject_ids);
        $data['new_id'] = collect();
        $data['exists_id'] = collect();
        foreach ($input as $row) {
            if ($subject_ids->search($row['ID_mon'])) {
                $data['exists_id']->push($row);
            } else {
                $data['new_id']->push($row);
            }
        }
        return view('subject.sync',$data);
    }
    public function postSync(){
        unset($this->input['_token']);
//        dd($this->input['Ky_hieu']);
        $input = collect($this->input['Ky_hieu']);
        $all_subject = '[{"ID_mon":6862,"Ky_hieu":"30TRA020","Ten_mon":"Tiếng Hàn Quốc A1","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":75,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6863,"Ky_hieu":"30TRA021","Ten_mon":"Tiếng Hàn Quốc A2","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":75,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6864,"Ky_hieu":"30TRA022","Ten_mon":"Tiếng Hàn Quốc B1","Ten_tieng_anh":"","ID_bm":95,"ID_he_dt":3,"ID_nhom_hp":4,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":0,"Ly_thuyet_mh":0,"Thuc_hanh_mh":150,"Bai_tap_mh":0},{"ID_mon":6865,"Ky_hieu":"20BUS002","Ten_mon":"Kinh tế vi mô","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":3,"Ly_thuyet_mh":45,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6866,"Ky_hieu":"20BUS003","Ten_mon":"Tài chính tiền tệ","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":2,"Ly_thuyet_mh":30,"Thuc_hanh_mh":0,"Bai_tap_mh":0},{"ID_mon":6867,"Ky_hieu":"20BUS004","Ten_mon":"Quản trị học căn bản","Ten_tieng_anh":"","ID_bm":96,"ID_he_dt":1,"ID_nhom_hp":2,"ID_khoa_nhap_diem":0,"Ten_viet_tat":"","Mo_ta":"","So_hoc_trinh_mh":2,"Ly_thuyet_mh":30,"Thuc_hanh_mh":0,"Bai_tap_mh":0}]';
        $all_subject = collect(json_decode($all_subject,true));
        foreach ($all_subject as $row){
            if ($input->search($row['Ky_hieu']) !== false){
                $subject = Subject::findOrNew($row['ID_mon']);
                $data['id'] =  $row['ID_mon'];
                $data['Ky_hieu'] =  $row['Ky_hieu'];
                $data['name'] =  $row['Ten_mon'];
                $data['image'] =  'image/subject/57aa18c5a9eb8bac-ho-dang-cam-quyen.jpg';
                $data['description'] =  '';
                $data['attention'] =  '<ul class="section img-text">';
                $data['active'] =  1;
                $subject->fill($data);
                $subject->save();
            }
        }
        session(['success'=>'cập nhật thành công']);
        return redirect()->route('subject.sync');
    }
    public function postImport(){
        $file = Excel::load($this->input['subject_excel'],function ($reader){
            foreach ($reader->toArray() as $row) {
                foreach ($this->input['opt'] as $key=>$value){
                    $row1[$key] = $row[$value];
                }
                Subject::firstOrCreate($row1);
            }
        })
        ->get()
        ;
        Session::flash('success', 'Nhập môn học thành công');
        return redirect()->route('subject.data');
    }
    public function postCheck()
    {
        $file = Excel::load($this->input['file'], function ($reader) {
            $reader->each(function ($sheet) {
                $sheet->each(function ($row) {
//
                });
            });
        })
            ->get();
        return $file->first()->keys();
    }
}
