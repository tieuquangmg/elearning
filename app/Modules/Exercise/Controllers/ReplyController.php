<?php 
namespace App\Modules\Exercise\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\Exercise\Repositories\ReplyRepository;
class ReplyController extends Controller
{
    protected $repository;
    protected $input;
    public function __construct(ReplyRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getType(){
        return view('exercise.reply.'.$this->input['ex'])->render();
    }

}
