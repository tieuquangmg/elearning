<?php 
namespace App\Modules\Lesson\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Lesson\Repositories\VocabularyRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class VocabularyController extends Controller
{
    protected $repository, $input;

    public function __construct(VocabularyRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData($unit_id){
        $data = $this->repository->byUnit($unit_id);
        return view('lesson.theory.vocabulary.index', $data);
    }
    public function postCreate(){
        $data = $this->repository->createMulti($this->input);
        if($data)
            return redirect()->back()->withSuccess('Create Success', $data);
        return redirect()->back()->withErrors('Create Fails', $data);
    }

    public function getFind(){

    }
    public function postUpdate(){

    }
    public function getDelete($id){
        $data = $this->repository->find($id, ['image']);
        File::delete($data->image);
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Delete Success');
    }
    public function getDeleteAll($unit_id){
        $this->repository->delete_all($unit_id);
        return redirect()->back()->withSuccess('Delete All Success');
    }
}
