<?php 
namespace App\Modules\FrontEnd\Controllers; 
use App\Modules\Auth\Models\User;
use App\Modules\FrontEnd\Repositories\DashBoardRepository;
use App\Modules\Organize\Models\Classes;
use App\Modules\Subject\Models\Unit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class DashboardController extends FrontEndController
{
    protected $repository;
    public function __construct(DashBoardRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
    public function getIndex(){
        $data = $this->repository->data();
        return view($this->prefix.'index', $data);
    }
    public  function getDashboard(){
        if(Auth::user()){
        $class = User::find(Auth::user()->id)->classes;
        }
        return view($this->prefix.'dasdboard/course/list')
            ->with('class',$class)
            ;
    }
    public function getCourse($id){
        $course = User::find(Auth::user()->id)->classes->find($id);
        return view($this->prefix.'dasdboard/course/detail')
            ->with('course',$course)
            ;
    }
    public function getUnit($id){
    }
}