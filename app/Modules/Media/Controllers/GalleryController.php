<?php 
namespace App\Modules\Media\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Media\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class GalleryController extends Controller
{
    protected $repository, $input;

    public function __construct(GalleryRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = Input::all();
    }

    public function postCreate(){
        $request = $this->input;
        $request['created_by'] = auth()->user()->id;
        $request['published'] = 1;
        $data = $this->repository->create($request);
        //dd($data);
        return redirect()->back()->withSuccess('Create Success');
    }

    public function getList(){
        $galleries = $this->repository->data();
        return view('media.gallery.list')->with('galleries', $galleries);
    }

    public function getFind($id){
        $gallery = $this->repository->find($id);
        return view('media.gallery.detail')->with('gallery', $gallery);
    }

    public function getDelete($id){
        $gallery = $this->repository->find($id);
        $this->authorize('owner', $gallery);
        $this->repository->getDelete($gallery);
        return redirect()->back()->withSuccess('Delete Success');
    }
}
