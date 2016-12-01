<?php 
namespace App\Modules\Media\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Media\Repositories\NewsRepository;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    protected $repository;
    public function __construct(NewsRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function getData(){
        $data = $this->repository->data();
        if(Request::ajax()){
            $tem['table'] = view('media.news.table', ['data' => $data])->render();
            $tem['url'] = ''.$data->links();
            return $tem;
        }
        else return view('media.news.data')->with(['data'=>$data]);
    }
    public function getCreate(){
        return view('media.news.create');
    }
    public function postCreate(){
        $data = $this->repository->create(Input::all());
        if($data) return redirect()->route('news.data')->withSuccess('Create Success');
        return redirect()->route('news.data')->withError('Create Error');
    }
    public function getUpdate($id){
        $data = $this->repository->find($id);
        return view('media.news.edit')->with('data', $data);
    }
    public function postUpdate(){
        $data = $this->repository->update(Input::all());
        if($data) return redirect()->route('news.data')->withSuccess('Create Success');
        return redirect()->route('news.data')->withError('Create Error');
    }
    public function getDelete(){
        return $this->repository->delete(Input::get('ids'));
    }
    public function getDetail($id){
        $data = $this->repository->detail($id);
        return view('media.news.detail', compact('data'));
    }
}
