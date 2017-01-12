<?php

namespace App\Modules\Cohot\Controllers;

use App\Modules\Cohot\Models\Plan_Bomon;
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

    public function getSyncForum()
    {
        $connect = DB::connection('forum');
        $data = Plan_Bomon::all();
        foreach ($data as $row){
            $exists = empty($connect->table('node')->where('node_name',$row->Ma_bo_mon)->get());
            if($exists){
                $connect->table('node')
                    ->insert([
//                    'node_id' => '$row->,
                        'title' => $row->Bo_mon,
                        'description' => $row->Bo_mon,
                        'node_name' => $row->Ma_bo_mon,
                        'node_type_id' => 'Category',
                        'parent_node_id' => 33,
                        'display_order' => 1,
                        'display_in_list' => 1,
                        'lft' => 3,
                        'rgt' => 8,
                        'depth' => 2,
                        'style_id' => 1,
                        'effective_style_id' => 1,
                        'breadcrumb_data' => null,
                    ]);
//                $connect->table('xf_permission_combination')->where('user_id',108)->get();
//                $connect->table('permission_cache_content')->insert([
//                    'permission_combination_id'=>, 'content_type'=>, 'content_id'=>, 'cache_value'=>
//                ]);
            }
        }
    }
}
