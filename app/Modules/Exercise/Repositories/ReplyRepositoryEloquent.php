<?php

namespace App\Modules\Exercise\Repositories;


class ReplyRepositoryEloquent implements ReplyRepository
{
    protected $fill, $matching, $multi, $text, $response, $sequence, $true, $type, $word;

    public function __construct(
        FillInBlankRepository $fill,
        MatchingRepository $matching,
        MultipleChoiceRepository $multi,
        MultipleChoiceTextRepository $text,
        MultipleResponseRepository $response,
        SequenceRepository $sequence,
        TrueFalseRepository $true,
        TypeInRepository $type,
        WordBlankRepository $word      
    )
    {
        $this->fill = $fill; $this->matching = $matching;
        $this->multi = $multi; $this->text = $text; $this->response = $response;
        $this->sequence = $sequence; $this->true = $true; $this->type = $type; $this->word = $word; 
    }

    public function create($input){
        switch ($input['type']){
            case 'true_false': $this->true->createReply($input);  break;
            case 'multi_choice': $this->multi->createReply($input); break;
            case 'multi_response': $this->response->createReply($input); break;
            case 'multi_choice_text': $this->text->createReply($input);break;
            case 'sequence': $this->sequence->createReply($input);break;
            case 'fill_in_blank': $this->fill->createReply($input);break;
            case 'type_in': $this->type->createReply($input);break;
            case 'matching': $this->matching->createReply($input);break;
            case 'word_blank': $this->word->createReply($input);break;
            default: return false; break;
        }
//        return $this->create(['test_id'=>$input['test_id'], 'question_id'=> $ex->id, 'table'=>$input['exercise']]);
        return true;
    }

    
}
