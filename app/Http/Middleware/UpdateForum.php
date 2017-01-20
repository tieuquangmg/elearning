<?php

namespace App\Http\Middleware;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Auth\Models\User;
use App\Modules\Organize\Models\Unit_class;
use App\Modules\Subject\Models\User_forums;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateForum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('nguoidung')->check()){
            $classes = Nguoidung::Where('id',Auth::guard('nguoidung')->user()->id)->with(['classes' => function ($query) {
                $query->where('start_date', '<=', Carbon::now());
                $query->where('end_date', '>=', Carbon::now());
                $query->where('start_date', '<>', null);
                $query->where('end_date', '<>', null);
            }])->get()->first()->classes;
            $data = DB::connection('forum')
                ->table('node')
                ->where(function ($query)use($classes){
                    foreach ($classes as $row){
                        $query->where('node.node_name', 'like', $row->id . '-');
                    }
                })
//            ->where('post.username', Auth()->user()->code)
                ->leftJoin('thread', 'thread.node_id', '=', 'node.node_id')
                ->where('thread.username', '=', Auth::guard('nguoidung')->user()->name)
                ->where(function ($query) use ($classes){
                    foreach ($classes as $row){
                        $unit = Unit_class::where('class_id', $row->id)
                            ->where('start_time', '<=', Carbon::now())
                            ->where('end_time', '>=', Carbon::now())
                            ->first();
                        if ($unit != null){
                            $query->where('thread.post_date', '>', strtotime($unit->start_time));
                            $query->where('thread.post_date', '<', strtotime($unit->end_time));
                        }
                    }
                })
                ->get();
            foreach ($classes as $row){
                if ($row->subject->unit != null) {
                    foreach ($row->subject->unit as $value) {
                        $exists = User_forums::where('user_id', Auth::guard('nguoidung')->user()->id)->where('unit_id', $value->id)->get()->isEmpty();
                        if ($exists) {
                            $update = User_forums::insert(array('user_id' => Auth::guard('nguoidung')->user()->id, 'unit_id' => $value->id, 'number_question' => count($data)));
                        } else {
                            User_forums::where('user_id', Auth::guard('nguoidung')->user()->id)->where('unit_id', $value->id)->update(['number_question' => count($data)]);
                        }
                    }
                }
            }
        }else{
            $classes = User::Where('id', Auth::user()->id)->with(['classes' => function ($query) {
                $query->where('start_date', '<=', Carbon::now());
                $query->where('end_date', '>=', Carbon::now());
                $query->where('start_date', '<>', null);
                $query->where('end_date', '<>', null);
            }])->get()->first()->classes;
            $data = DB::connection('forum')
                ->table('node')
                ->where(function ($query)use($classes){
                    foreach ($classes as $row){
                        $query->where('node.node_name', 'like', $row->id . '-');
                    }
                })
//            ->where('post.username', Auth()->user()->code)
                ->leftJoin('thread', 'thread.node_id', '=', 'node.node_id')
                ->where('thread.username', '=', Auth::user()->code)
                ->where(function ($query) use ($classes){
                    foreach ($classes as $row){
                        $unit = Unit_class::where('class_id', $row->id)
                            ->where('start_time', '<=', Carbon::now())
                            ->where('end_time', '>=', Carbon::now())
                            ->first();
                        if ($unit != null){
                            $query->where('thread.post_date', '>', strtotime($unit->start_time));
                            $query->where('thread.post_date', '<', strtotime($unit->end_time));
                        }
                    }
                })
                ->get();
            foreach ($classes as $row){
                if ($row->subject->unit != null) {
                    foreach ($row->subject->unit as $value) {
                        $exists = User_forums::where('user_id', Auth::user()->id)->where('unit_id', $value->id)->get()->isEmpty();
                        if ($exists) {
                            $update = User_forums::insert(array('user_id' => Auth::user()->id, 'unit_id' => $value->id, 'number_question' => count($data)));
                        } else {
                            User_forums::where('user_id', Auth::user()->id)->where('unit_id', $value->id)->update(['number_question' => count($data)]);
                        }
                    }
                }
            }
        }
        return $next($request);
    }
}
