<?php

namespace App\Modules\Exercise\Repositories;


use App\Modules\Exercise\Models\MultiResponse;
use App\Modules\Exercise\Share\BuilderReplyTrait;

/**
 * Class MultipleResponseRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class MultipleResponseRepositoryEloquent implements  MultipleResponseRepository
{

    use BuilderReplyTrait;
    protected $model;

    public function __construct(MultiResponse $model)
    {
        $this->model = $model;
    }
    public function createReply($input){
        foreach($input['reply'] as $k => $v){
            $reply = new MultiResponse();
            $reply->question_id	= $input['question_id'];
            $reply->reply = $v;
            if( in_array($k, $input['answer'])){
                $reply->answer = 1;
            }
            $reply->save();
        }
        return 1;
    }

    
}
