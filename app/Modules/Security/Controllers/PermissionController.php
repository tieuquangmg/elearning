<?php 
namespace App\Modules\Security\Controllers; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Modules\Security\Repositories\PermissionRepository;
class PermissionController extends Controller
{
    protected $repository, $input;
    public function __construct(PermissionRepository $repository)
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
        $data['permissions'] = $this->repository->data('name', $value, $perpage,$url);
        return view('security.permission.data', $data);
    }
    public function getAdd(){
        return view('security.permission.create');
    }
    public function postCreate()
    {
        $this->repository->create($this->input);
        return redirect()->route('permission.data')->withSuccess('Create Success');
    }
    public function getEdit($id){
        $permission = $this->repository->find($id);
        return view('security.permission.update', compact('permission'));
    }
    public  function postUpdate(){
        $this->repository->update($this->input);
        return redirect()->route('permission.data')->with('Update Success');
    }
    public function getDelete(){
        return $this->repository->delete($this->input);
    }

    
}
