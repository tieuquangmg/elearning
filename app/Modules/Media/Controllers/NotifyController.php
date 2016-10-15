<?php 
namespace App\Modules\Media\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Media\Repositories\NotifyRepository;
use Illuminate\Support\Facades\Input;

class NotifyController extends Controller
{
    protected $repository, $input;
    public function __construct(NotifyRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getData(){
        $data ['data'] =$this->repository->data($this->input);
        return view('media.notify.data', $data);
    }
    public function getAdd(){
        return view('media.notify.create');
    }
    public function getEdit($id){
        $data['data'] = $this->repository->find($id);
        return view('media.notify.edit', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('notify.data');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->route('notify.data');
    }
    public function postDelete(){
        $this->repository->delete($this->input);
        return 1;
    }
}
