<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\MultiChoice;
use App\Modules\Exercise\Share\BuilderReplyTrait;

/**
 * Class MultipleChoiceRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class MultipleChoiceRepositoryEloquent implements MultipleChoiceRepository
{
    use BuilderReplyTrait;
    protected $model;
    public function __construct(MultiChoice $model)
    {
       $this->model = $model;
    }
    public function createReply($input){
        foreach($input['reply'] as $k => $reply){
            $answer = 0;
            if($k == $input['answer']) $answer = 1;
            $data = $this->builderReply([$input['question_id'], $reply, $answer]);
            $this->model->create($data);
        }
    }
    
}
