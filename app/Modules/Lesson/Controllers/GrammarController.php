<?php 
namespace App\Modules\Lesson\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Lesson\Repositories\GrammarRepository;
use Illuminate\Support\Facades\Input;

class GrammarController extends Controller
{
    protected $repository, $input;

    public function __construct(GrammarRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData($unit_id){
        $data = $this->repository->byUnit($unit_id);
        return view('lesson.theory.grammar.index', $data);
    }
}
