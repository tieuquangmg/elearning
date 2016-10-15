<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/6/2016
 * Time: 5:26 PM
 */
namespace App\Modules\Exercise\Models;

class Exercise
{
    public function ex(){
        return [
            'true_false',
            'multi_choice',
            'multi_response',
            'multi_choice_text',
            'sequence',
            'fill_in_blank',
            'type_in',
            'matching',
            'word_blank',
        ];
    }
    public function model(){
       return [
            'true_false' => new TrueFalse(),
            'multi_choice' => new MultiChoice(),
            'multi_response' => new MultiResponse(),
            'multi_choice_text' => new MultiChoiceText(),
            'sequence' => new Sequence(),
            'fill_in_blank' => new FillInBlank(),
            'type_in' => new TypeIn(),
            'matching' => new Matching(),
            'work_blank' => new WordBlank(),
        ];
    }
    
    public function entity($name){
        foreach ($this->model() as $k => $v){
            if($k = $name) {
                return $v;
                break;
            }
        }
        return false;
    }
}