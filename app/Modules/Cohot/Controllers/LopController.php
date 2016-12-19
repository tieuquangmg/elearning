<?php
namespace App\Modules\Cohot\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Cohot\Models\Stu_lop;
use App\Modules\Cohot\Repositories\LopRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LopController extends Controller
{
    protected $prefix = "cohot";
    protected $repository, $input;

    public function __construct(LopRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData(Request $request)
    {
        $data['data'] = $this->repository->data($request->all());
        return view($this->prefix . '.lop.data', $data);
    }
    public function getSyncLop(){
        $data1 = DB::connection('qlsv')
            ->table('STU_Lop')
            ->chunk(100,function ($rows){
                foreach ($rows as $row){
                    $value = array(
                        'id' => $row->ID_lop,
                        'ten_lop' => $row->Ten_lop,
                        'id_he' => $row->ID_he,
                        'id_khoa' => $row->ID_khoa,
                        'id_chuyen_nganh' => $row->ID_chuyen_nganh,
                        'khoa_hoc' => $row->Khoa_hoc,
                        'nien_khoa' => $row->Nien_khoa,
                        'ID_dt' => $row->ID_dt,
                    );
                    $bomon = Stu_lop::firstOrNew($value);
                    $bomon->save();
//                    if($bomon->wasRecentlyCreated){
//                        echo 'Created successfully';
//                    } else {
//                        echo 'Already exist';
//                    }
//                    return false;
                }
            });
    }
}
