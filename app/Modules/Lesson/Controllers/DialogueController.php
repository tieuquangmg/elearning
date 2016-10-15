<?php 
namespace App\Modules\Lesson\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Lesson\Repositories\DialogueRepository;
use Illuminate\Support\Facades\Input;

class DialogueController extends Controller
{
    protected $repository, $input;
    public function __construct(DialogueRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData($unit_id){

        return view('lesson.vocabulary.data');
    }
}
