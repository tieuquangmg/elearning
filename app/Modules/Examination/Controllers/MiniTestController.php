<?php 
namespace App\Modules\Examination\Controllers;

use Illuminate\Support\Facades\Input;
use App\Modules\Examination\Repositories\MiniTestRepository;
use Illuminate\Http\Request;

class MiniTestController extends ExaminationController
{
    protected $repository, $input;

    public function __construct(MiniTestRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function postCreate(){
//        dump($this->input);
        $data = $this->repository->create($this->input);
        if(isset($this->input['test_id'])) $data -> test()->attach($this->input['test_id']);
        return redirect()->back()->withSuccess('Create Success');
    }
    
    public function postUpdate($id){
        
       $this->repository->update($this->input, $id);
        return redirect()->back()->withSuccess('Update Success');
    }
    
    public function getDelete($id){
        $this->repository->delete($id);
//        return redirect()->back()->withSuccess('Delete Success');
    }
    
    public function getFind($id){
        return $this->repository->find($id);
    }
    

    public function getData(Request $request)
    {
        $url = $request->url();
        $value = $request->s;
        $perpage = $request->f_select_number;
        Input::flash();
        $data['mini_tests'] = $this->repository->data('name', $value, $perpage, $url);
        $data['prefix'] = $this->prefix;
        return view($this->prefix.'mini_test.data', $data);
    }
    public function getFindby($value = null ,$page){

        $data['mini_tests'] = $this->repository->findBy('name',$value,$page);
        $data['prefix'] = $this->prefix;
        return view($this->prefix.'mini_test.data',$data);
    }
    
    public function getDetail($id){
        $mini_test = $this->repository->find($id);
        return view($this->prefix.'mini_test.detail', ['mini_test'=> $mini_test, 'prefix'=> $this->prefix]);
    }
//    public function getReView($id){
//        $mini_test = $this->repository->find($id);
//        $question = $mini_test ->question;
//        return view($this->prefix.'mini_test.detail', ['mini_test'=> $mini_test, 'question' => $question, 'prefix'=> $this->prefix]);
//    }
    public function getCheck($id){
        $mini_test = $this->repository->find($id);
        $question = $mini_test ->question;
        return view($this->prefix.'mini_test.detail', ['mini_test'=> $mini_test, 'question' => $question, 'prefix'=> $this->prefix]);
    }

}
