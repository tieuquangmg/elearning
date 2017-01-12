<?php
/**
 * Created by PhpStorm.
 * User: Press
 * Date: 7/25/2016
 * Time: 10:12 PM
 */
namespace App\Services;

use App\Modules\Auth\Models\User;
use App\Modules\Organize\Models\Unit_class;
use App\Modules\Subject\Models\User_forums;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateForum
{
    public function update()
    {
//        update like
//        $class_ids = User::Where('id', Auth::user()->id)->with(['classes' => function ($query) {
//            $query->where('start_date', '<=', Carbon::now());
//            $query->where('end_date', '>=', Carbon::now());
//            $query->where('start_date', '<>', null);
//            $query->where('end_date', '<>', null);
//        }])->get()->first()->classes->lists('id')->toArray();
//
//        $data = DB::connection('forum')->table('post')
//            ->where('post.username', Auth()->user()->code)
//            ->join('thread', 'thread.thread_id', '=', 'post.thread_id')
//            ->join('node', 'thread.node_id', '=', 'node.node_id')
////            ->where(function ($query) use ($class_ids){
////                foreach ($class_ids as $row=>$value){
////                    $query->where('node.node_name','like',$value.'-');
////                }
////            })
//            ->get();
//        dd($data);
        //update bài viết

    }
}