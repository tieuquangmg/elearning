<?php 
namespace App\Modules\Subject\Controllers; 
use App\Modules\Subject\Models\Unit;
use App\Modules\Subject\Repositories\TheoryRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TheoryController extends BaseController
{
    protected $repository, $input, $prefix = 'subject.';
    public function __construct(TheoryRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }
    public function getAdd($unit_id){
        $data['unit'] = Unit::find($unit_id);
        return view($this->prefix.'unit.theory.create', $data);
    }
    public function getEdit($id){
        $data['theory'] = $this->repository->find($id);
        return view($this->prefix.'unit.theory.update', $data);
    }
    public function postCreate(){
        $input = $this->input;
        if($this->input['content_type'] == 2){
            if(Input::hasFile('file_pdf')) {
                $file = $this->input['file_pdf'];
                $name = Carbon::now()->getTimestamp();
                $name = $name . '_' . $file->getClientOriginalName();
                $file->move('gallery/document', $name);
                $input['content'] = $name;
            }else{
                return Redirect::back()->withErrors(['msg', 'Chưa chọn file']);
            }
        }else{
            $input['content'] = $this->input['content_html'];
        }
        $this->repository->create($input);
        return redirect()->route('unit.compose', $this->input['unit_id'])->withSuccess('Thêm nội dung thành công');
    }
    public function postUpdate(){
        $input = $this->input;
            if($this->input['content_type'] == 2){
                if(Input::hasFile('file_pdf')){
                    $file = $this->input['file_pdf'];
                    $name = Carbon::now()->getTimestamp();
                    $name  = $name.'_'.$file->getClientOriginalName();
                    $file->move('gallery/document',$name);
                    $input['content'] = $name;
                    unset($input['file_pdf']);
                    unset($input['content_html']);
                }else{
                    return Redirect::back()->withErrors(['msg', 'Chưa chọn file']);
                }
            }else{
                $input['content'] = $this->input['content_html'];
                unset($input['file_pdf']);
                unset($input['content_html']);
            }
        unset($input['_token']);
        $data = $this->repository->update($input);
        return redirect()->route('unit.compose', $data[0])->withSuccess('Sửa nội dung thành công');
    }
    public function getFind($id){
        return $this->repository->find($id);
    }
    public function getDelete($id){
         $this->repository->delete($id);
        return redirect()->back()->withSuccess('Xóa thành công');
    }
}