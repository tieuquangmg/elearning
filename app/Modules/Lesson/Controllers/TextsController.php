<?php 
namespace App\Modules\Lesson\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Lesson\Repositories\TextsRepository;
use Illuminate\Support\Facades\Input;
class TextsController extends Controller
{
    protected $repository, $input;
    public function __construct(TextsRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData($id){
        $texts = $this->repository->find($id);
        $unit = $texts->unit;
        $test = $texts->test;
        return view('lesson.theory.texts.data', ['texts'=>$texts, 'unit'=>$unit, 'test'=>$test]);
    }

    public function getGist($id){
        $texts = $this->repository->find($id);
        $unit = $texts->unit;
        return view('lesson.theory.texts.gist', ['texts'=>$texts, 'unit'=>$unit]);
    }

    public function getTexts($id){
        $texts = $this->repository->find($id);
        $unit = $texts->unit;
        return view('lesson.theory.texts.texts', ['texts'=>$texts, 'unit'=>$unit]);
    }

    public function getTest($id){
        $texts = $this->repository->find($id);
        $unit = $texts->unit;
        $test = $texts->test;
        return view('lesson.theory.texts.test', ['texts'=>$texts, 'unit'=>$unit, 'test'=>$test]);
    }

    public function postSaveGist(){
        $this->repository->update($this->input, $this->input['id']);
        return response()->json($this->input);
    }

    public function postSaveTexts(){
        $this->repository->update($this->input, $this->input['id']);
        return response()->json(true);
    }

    public function getMiniTest($id){
        $texts = $this->repository->find($id);
        $unit = $texts->unit;
        $test = $texts->test;
        return view('lesson.theory.texts.mini_test', ['texts'=>$texts, 'unit'=>$unit, 'test'=>$test]);
    }
}
