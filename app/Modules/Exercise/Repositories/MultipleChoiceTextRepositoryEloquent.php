<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\MultiChoiceText;
use App\Modules\Exercise\Share\BuilderReplyTrait;

/**
 * Class MultipleChoiceTextRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class MultipleChoiceTextRepositoryEloquent implements MultipleChoiceTextRepository
{

    use BuilderReplyTrait;
    
    protected $model;

    public function __construct(MultiChoiceText $model)
    {
        $this->model = $model;
    }

    public function createReply($input){

        foreach ($input['flag'] as $index => $flag){
            $this->loopReply($input, $flag, $index);
        }
    }

    public function loopReply($input, $flag, $index){
        foreach ($input['reply'.$flag] as $key => $reply){
            $answer = 0;
            if($key == $input['answer'.$flag]) $answer = 1;
            $data = $this->builderReply([$input['question_id'], $reply, $index, $answer]);
            $this->model->create($data);
        }
    }


}
