<?php 
namespace App\Modules\Exercise\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Exercise\Repositories\QuestionRepository;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{
    protected $repository;
    public function __construct(QuestionRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function getAdd($mini_test_id){
        return view('exercise.question.create', compact('mini_test_id'));
    }
    public function postCreate(){
        $this->repository->create(Input::all());
        return redirect()->back()->withSuccess('Create Success');
    }
    public function getDelete($id){
        $data = $this->repository->delete($id);
        if($data > 0) return redirect()->back()->withSuccess('Delete Success');
        return redirect()->back()->withError('Delete Fail');
    }
}
