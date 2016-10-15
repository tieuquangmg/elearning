<?php

namespace App\Modules\Media\Repositories;
use App\Modules\Media\Models\Message;

/**
 * Class GalleryRepositoryEloquent
 * @package namespace App\Modules\Media\Repositories;
 */
class MessageRepositoryEloquent implements MessageRepository
{
    protected $model;
    public function __construct(Message $model)
    {
        $this->model = $model;
    }
    public function data($input){
        
    }
}