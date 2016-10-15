<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/9/2016
 * Time: 11:08 AM
 */

namespace App\Http\ViewComposers;
use App\Modules\Exercise\Models\Exercise;
use Illuminate\Contracts\View\View;

class ExerciseComposer
{
    protected $exercise;
    public function __construct(){
        $this->exercise = new Exercise();
    }
    public function compose(View $view){
        $view->with('exercise', $this->exercise->ex());
    }
}