<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/11/2016
 * Time: 9:05 AM
 */

namespace App\Http\ViewComposers;
use App\Modules\Examination\Models\Test;
use Illuminate\Contracts\View\View;
class ListTestComposer
{
    protected $test;
    public function __construct(){
        $this->test = new Test();
    }
    public function compose(View $view){
        $view->with('tests', $this->test->lists('name', 'id'));
    }
}