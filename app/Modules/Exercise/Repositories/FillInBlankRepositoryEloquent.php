<?php

namespace App\Modules\Exercise\Repositories;
use App\Modules\Exercise\Models\FillInBlank;
use App\Modules\Exercise\Share\BuilderReplyTrait;


class FillInBlankRepositoryEloquent implements FillInBlankRepository
{
    use BuilderReplyTrait;

    protected $model;

    public function __construct(FillInBlank $model)
    {
        $this->model = $model;
    }

    public function createReply($input){
        //dd($input);
        foreach ($input['flag'] as $index => $flag){
            $this->loopReply($input, $flag, $index);
        }
    }

    public function loopReply($input, $flag, $index){
        foreach ($input['reply'.$flag] as $key => $reply){
            $data = $this->builderReply([$input['question_id'], $reply, $index]);
            $this->model->create($data);
        }
    }
}
