<?php 
namespace App\Modules\Subject\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Subject\Models\Subject;
use App\Modules\Subject\Repositories\SubjectRepository;
use App\Services\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubjectController extends BaseController
{
    protected $prefix = "subject.";

    protected $repository, $input;
    public function __construct(SubjectRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function getData(Request $request)
    {
        $url = $request->url();
        $value = $request->s;
        $perpage = $request->f_select_number;
        Input::flash();
        $data = $this->repository->data('name', $value, $perpage,$url);
        return view($this->prefix.'data')->with(['subjects'=> $data, 'prefix'=>$this->prefix]);
    }


    public function getAdd(){
        return view($this->prefix.'create');
    }
    public function getEdit($id){
        $data['subject'] = Subject::find($id);
        return view($this->prefix.'update', $data);
    }
    public function postCreate(){
        $this->repository->create($this->input);
        return redirect()->route('subject.data')->withSuccess('Tạo thành công');
    }
    public function postUpdate(){
        unset($this->input['_token']);
        $this->repository->update($this->input);
        return redirect()->route('subject.data')->withSuccess('Cập nhật thành công');
    }
    public function getDelete(){
        return $this->repository->delete($this->input);
    }
    public function getCompose(){
        return view($this->prefix."compose");
    }
    public function getUnit($id){
        $data['subject'] = $this->repository->unit($id);
        return view($this->prefix."unit", $data);
    }
    public function getAddUnit($id){
        $data['subject'] = $this->repository->find($id);
        return view($this->prefix."unit.create", $data);
    }
}
