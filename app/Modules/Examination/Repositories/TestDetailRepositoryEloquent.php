<?php

namespace App\Modules\Examination\Repositories;

use App\Modules\Exercise\Repositories\FillInBlankRepository;
use App\Modules\Exercise\Repositories\MatchingRepository;
use App\Modules\Exercise\Repositories\MultipleChoiceRepository;
use App\Modules\Exercise\Repositories\MultipleChoiceTextRepository;
use App\Modules\Exercise\Repositories\MultipleResponseRepository;
use App\Modules\Exercise\Repositories\SequenceRepository;
use App\Modules\Exercise\Repositories\TypeInRepository;
use App\Modules\Exercise\Repositories\WordBlankRepository;
use App\Modules\Exercise\Repositories\TrueFalseRepository;
use App\Modules\Examination\Models\TestDetail;


class TestDetailRepositoryEloquent implements TestDetailRepository
{
    protected $model;
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
        WordBlankRepository $word,
        TestDetail $model
    )
    {
        $this->model = $model;
        $this->fill = $fill; $this->matching = $matching;
        $this->multi = $multi; $this->text = $text; $this->response = $response;
        $this->sequence = $sequence; $this->true = $true; $this->type = $type; $this->word = $word;       
    }


    public function pushEx(TrueFalseRepository $trueFalse, MultipleChoiceRepository $multiChoice){

    }
    public function postPush($input){
        switch ($input['exercise']){
            case 'ex_true_false': $ex = $this->true->create($input);  break;
            case 'ex_multi_choice': $ex = $this->multi->createReply($input); break;
            case 'ex_multi_response': $ex = $this->response->createReply($input); break;
            case 'ex_multi_choice_text': $ex = $this->text->createReply($input);break;
            case 'ex_sequence': $ex = $this->sequence->createReply($input);break;
            case 'ex_fill_in_blank': $ex = $this->fill->createReply($input);break;
            case 'ex_type_in': $ex = $this->type->createReply($input);break;
            case 'ex_matching': $ex = $this->matching->createReply($input);break;
            case 'ex_word_blank': $ex = $this->word->createReply($input);break;
            default: return false; break;
        }
        return $this->model->create(['test_id'=>$input['test_id'], 'question_id'=> $ex->id, 'table'=>$input['exercise']]);
    }

    
}
