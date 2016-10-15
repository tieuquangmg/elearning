<?php 
namespace App\Modules\Media\Controllers; 
use App\Http\Controllers\Controller;
use App\Modules\Media\Repositories\ImageRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
class ImageController extends Controller
{
    protected $repository;

    public function __construct(ImageRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function postUpload(){
        return $this->repository->postUpload(Input::all());
    }
}
