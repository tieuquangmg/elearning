<?php

namespace App\Http\ViewComposers;
use App\Modules\Cohot\Models\SYS_phong;
use Illuminate\Contracts\View\View;
class PhongComposer
{
    protected $exercise;
    public function __construct(){

    }
    public function compose(View $view){
        $phong = SYS_phong::all();
        $view->with('phong',$phong);
    }
}