<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\TypeIn;
use App\Modules\Exercise\Share\BuilderReplyTrait;

class TypeInRepositoryEloquent implements TypeInRepository
{
    use BuilderReplyTrait;

    protected $model;

    public function __construct(TypeIn $model)
    {
        $this->model = $model;
    }

    public function createReply($input){
        foreach($input['reply'] as $k => $answer){
            $data = $this->builderReply([$input['question_id'], $answer]);
            $this->model->create($data);
        }
    }
    
}
