<?php

namespace App\Listeners;

use App\Modules\Auth\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateLikeForum
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login $event
     * @return void
     */
    public function handle(Login $event)
    {
        $class_ids = User::Where('id', Auth::user()->id)->with(['classes' => function ($query) {
            $query->where('start_date', '<=', Carbon::now());
            $query->where('end_date', '>=', Carbon::now());
            $query->where('start_date', '<>', null);
            $query->where('end_date', '<>', null);
        }])->get()->first()->classes->lists('id')->toArray();

        DB::connection('forum')->table('post')
            ->where('username', Auth()->user()->code)
            ->join('thread', 'thread.thread_id', '=', 'post.thread_id')
            ->join('node', 'thread.node_id', '=', 'node.node_id')
            ->whereIn('node.');
    }
}
