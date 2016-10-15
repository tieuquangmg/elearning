<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\Matching;
use App\Modules\Exercise\Share\BuilderReplyTrait;

class MatchingRepositoryEloquent implements MatchingRepository
{
    use BuilderReplyTrait;

    protected $model;

    public function __construct(Matching $model)
    {
        $this->model = $model;
    }

    public function createReply($input){
        $i=0;
        foreach($input['premise'] as $k => $answer){
            $data = $this->builderReply([$input['question_id'], $answer, $input['response'][$i++]]);
            $this->model->create($data);
        }
    }
    
}
