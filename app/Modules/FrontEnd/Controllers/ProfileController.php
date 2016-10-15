<?php 
namespace App\Modules\FrontEnd\Controllers; 
use App\Modules\FrontEnd\Repositories\ProfileRepository;
use Illuminate\Support\Facades\Input;

class ProfileController extends FrontEndController
{
    protected $repository;
    public function __construct(ProfileRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    public function getIndex(){
        $data = $this->repository->data();
        //dd($data);
        return view($this->prefix.'profile.index', $data);
    }
}
