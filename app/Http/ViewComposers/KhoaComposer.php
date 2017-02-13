<?php

namespace App\Http\ViewComposers;
use App\Modules\Cohot\Models\Plan_Bomon;
use App\Modules\Cohot\Models\STU_khoa;
use Illuminate\Contracts\View\View;
class KhoaComposer
{
    protected $exercise;
    public function __construct(){

    }
    public function compose(View $view){
        $khoa = STU_khoa::all();
        $view->with('khoa',$khoa);
    }
}