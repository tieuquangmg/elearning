<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/6/2016
 * Time: 5:26 PM
 */

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;


class Reply extends Model 
{
    
    public function ex(){
        $data = [
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
        return $data;
    }

    public function models(){
        $data = [
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
        return $data;
    }
    public function entity($name){
        foreach ($this->models() as $k => $v){
            if($k = $name) {
                return $v;
                break;
            }
        }
        return false;
    }
}