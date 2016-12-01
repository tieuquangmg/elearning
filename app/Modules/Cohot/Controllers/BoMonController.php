<?php

namespace App\Modules\Cohot\Controllers;

use App\Modules\Cohot\Repositories\BoMonRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BoMonController extends Controller
{
    protected $prefix = "cohot";
    protected $repository, $input;
    public function __construct(BoMonRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getData(){
        $data['data']= $this->repository->data($this->input);
        return view($this->prefix.'.bo_mon.data',$data);
    }
    public function getSyncBomon(){
        $data1 = DB::connection('qlsv')
            ->table('PLAN_BoMon')
            ->chunk(100,function ($rows){
                foreach ($rows as $row){
                    $value = array(
                        'id' => $row->ID_bm,
                        'ma_bo_mon' => $row->Ma_bo_mon,
                        'name' => $row->Bo_mon
                    );
                    $bomon = Plan_Bomon::firstOrNew($value);
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
