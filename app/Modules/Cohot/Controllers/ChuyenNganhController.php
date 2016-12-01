<?php

namespace App\Modules\Cohot\Controllers;

use App\Modules\Cohot\Models\Stu_ChuyenNganh;
use App\Modules\Cohot\Repositories\ChuyenNganhRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ChuyenNganhController extends Controller
{
    protected $prefix = "cohot";
    protected $repository, $input;
    public function __construct(ChuyenNganhRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData(){
        $data['data'] = $this->repository->data($this->input);
        return view($this->prefix.'.chuyen_nganh.data',$data);
    }
    public function getSyncChuyenNganh(){
        $data1 = DB::connection('qlsv')
            ->table('STU_ChuyenNganh')
            ->chunk(100,function ($rows){
                foreach ($rows as $row){
                    $value = array(
                        'id' => $row->ID_chuyen_nganh,
                        'ma_chuyen_nganh' => $row->Ma_chuyen_nganh,
                        'chuyen_nganh' => $row->Chuyen_nganh,
                        'id_nganh' => $row->ID_nganh
                    );
                    $bomon = Stu_ChuyenNganh::firstOrNew($value);
                    $bomon->save();
                    if($bomon->wasRecentlyCreated){
                        echo 'Created successfully';
                    } else {
                        echo 'Already exist';
                    }
                }
            });
    }

}
