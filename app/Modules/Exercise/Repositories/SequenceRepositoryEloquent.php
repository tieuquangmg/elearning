<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\Sequence;
use App\Modules\Exercise\Share\BuilderReplyTrait;

class SequenceRepositoryEloquent implements SequenceRepository
{
    use BuilderReplyTrait;
    protected $model;
    public function __construct(Sequence $model)
    {
        $this->model = $model;
    }

    public function createReply($input){       
        foreach($input['reply'] as $no => $reply){
            $data = $this->builderReply([$input['question_id'], $reply, $no]);
            $this->model->create($data);
        }
    }
}
