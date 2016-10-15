<?php 
namespace App\Modules\Examination\Controllers;
use App\Modules\Examination\Models\Test;
use App\Http\Controllers\Controller;
use App\Modules\Examination\Repositories\TestDetailRepository;
use Illuminate\Support\Facades\Input;
class TestController extends ExaminationController
{
    protected $repository, $input;

    public function __construct(TestDetailRepository $repository, Input $input)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = $input;
    }

    public function getIndex(){
        return view($this->prefix.'test.detail')->with(['prefix' => $this->prefix]);
    }

    public function getData(){
        return view($this->prefix.'test.data')->with(['tests'=> Test::all(), 'prefix' => $this->prefix]);
    }

    public function postCreate(){

    }

    public function getAddQuestion(){

    }
    
    public function getWhereTest(){
        $test_id = Input::get('test_id');
        $data['data'] = $this->repository->findWhere(['test_id'=> $test_id]);
        return view($this->prefix.'test.includes.data', $data)->with(['prefix' => $this->prefix]);
    }
}
