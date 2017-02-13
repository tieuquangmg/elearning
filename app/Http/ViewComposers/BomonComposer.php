<?php

namespace App\Http\ViewComposers;
use App\Modules\Cohot\Models\Plan_Bomon;
use Illuminate\Contracts\View\View;
class BomonComposer
{
    protected $exercise;
    public function __construct(){

    }
    public function compose(View $view){
        $bomon = Plan_Bomon::all();
//            ->lists('Bo_mon','ID_bm');
//        $bomon = array_prepend($bomon, '9999999999','price');
        $view->with('bomon',$bomon);
    }
}