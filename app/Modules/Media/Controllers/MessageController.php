<?php
namespace App\Modules\Media\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Media\Repositories\MessageRepositoryEloquent;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller
{
    protected $repository, $input;

    public function __construct(MessageRepositoryEloquent $repository, Input $input)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->input = $input;
    }

}
