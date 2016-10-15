<?php 
namespace App\Modules\Lesson\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Lesson\Repositories\SummaryRepository;
use Illuminate\Support\Facades\Input;

class SummaryController extends Controller
{
    protected $repository, $input;
    public function __construct(SummaryRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
}
