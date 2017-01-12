<?php
namespace App\Modules\Security\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Security\Requests\RoleRequest;
use Illuminate\Support\Facades\Input;
use App\Modules\Security\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $repository, $input;

    public function __construct(RoleRepository $repository)
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
        $data['roles'] = $this->repository->data('name', $value, $perpage, $url);
        return view('security.role.data', $data);
    }

    public function getAdd()
    {
        return view('security.role.create');
    }

    public function postCreate(RoleRequest $request)
    {
        //dd($request->all());
        $this->repository->create($this->input);
        return redirect()->route('role.data')->withSuccess('Thêm mới thành công');
    }

    public function getEdit($id)
    {
        $role = $this->repository->find($id);
        return view('security.role.update', compact('role'));
    }

    public function postUpdate()
    {
        $this->repository->update($this->input);
        return redirect()->route('role.data')->with('Cập nhật thành công');
    }

    public function getDelete()
    {
        return $this->repository->delete($this->input);
    }

    public function getRoleUser()
    {
        $data = $this->repository->role_user($this->input);
        if (Request::ajax()) {
            $data = $this->repository->role_user($this->input);
            $tem['table'] = view('security._includes.role_user_table', $data)->render();
            $tem['url'] = '' . $data['users']->links();
            return $tem;
        } else
            return view('security.role_user', $data);
    }

    public function postUserAssign()
    {
        return $this->repository->user_assign($this->input);
    }

    public function getPermissionRole()
    {
        $data = $this->repository->permission_role();
        return view('security.role_permission', $data);
    }

    public function postRoleAssign()
    {
        $this->repository->role_assign($this->input);
        return redirect()->back()->withSuccess('Thành công');
    }

    public function getModalRole()
    {
        $data = $this->repository->user_role($this->input);
        return view('security._includes.listRole', $data)->render();
    }

    public function postFilter()
    {

    }
}
