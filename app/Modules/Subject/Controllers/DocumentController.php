<?php 
namespace App\Modules\Subject\Controllers; 
use App\Modules\Subject\Repositories\DocumentRepository;
use Illuminate\Support\Facades\Input;
use App\Services\Upload;

class DocumentController extends BaseController
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(DocumentRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function postCreate($id){
        $this->input['unit_id'] = $id;
        $upload = new Upload();
        $path = $upload->file($this->input['path'],'document');
        $this->input['path'] = $path;
       $data = $this->repository->create($this->input);
        return redirect()->back()->withSuccess('Thêm file thành công');
    }
    public function postUpdate($id){
        unset($this->input['_token']);
        if(isset($this->input['path'])){
            $upload = new Upload();
            $path = $upload->file($this->input['path'],'document');
            $this->input['path'] = $path;
        }
        $this->repository->update($this->input,$id);
        return redirect()->back()->withSuccess('Sửa file thành công');
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getDelete($id){
        $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa file thành công');
    }
}
