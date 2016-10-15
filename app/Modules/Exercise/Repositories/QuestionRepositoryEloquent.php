<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\Exercise;
use App\Modules\Exercise\Models\Question;


/**
 * Class QuestionRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class QuestionRepositoryEloquent implements QuestionRepository
{
    protected $question, $reply;
    public function __construct(Question $question, ReplyRepository $reply){
        $this->question = $question;
        $this->reply = $reply;
    }
    public function create($input)
    {
        // TODO: Implement create() method.
        $question = $this->question->create($input);
        $input['question_id'] = $question->id;
        $this->reply->create($input);

    }
    public function update($input){

    }
    public function find($id){

    }
    public function delete($id){
        $data = $this->question->find($id);
        if($data){
            $data->replyDelete();
            return $this->question->where('id', $id)->delete();
        }
        return false;
    }
}
