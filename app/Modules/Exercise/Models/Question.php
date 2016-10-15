<?php

namespace App\Modules\Exercise\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{
    
    public $table = 'question';
    public $fillable = ['question', 'score', 'type', 'mini_test_id'];

    public function ans(){
        switch ($this->type){
            case 'fill_in_blank': return $this->hasMany(FillInBlank::class, 'question_id'); break;
            case 'matching': return $this->hasMany(Matching::class, 'question_id'); break;
            case 'multi_choice': return $this->hasMany(MultiChoice::class, 'question_id'); break;
            case 'multi_choice_text': return $this->hasMany(MultiChoiceText::class, 'question_id'); break;
            case 'multi_response': return $this->hasMany(MultiResponse::class, 'question_id'); break;
            case 'sequence': return $this->hasMany(Sequence::class, 'question_id'); break;
            case 'true_false': return $this->hasMany(TrueFalse::class, 'question_id'); break;
            case 'type_in': return $this->hasMany(TypeIn::class, 'question_id'); break;
            case 'word_blank': return $this->hasMany(WordBlank::class, 'question_id'); break;
            default: return false;
        }
    }

    public function replyDelete(){
        switch ($this->type){
            case 'fill_in_blank': return FillInBlank::where('question_id', $this->id)->delete(); break;
            case 'matching': return Matching::where('question_id', $this->id)->delete(); break;
            case 'multi_choice': MultiChoice::where('question_id', $this->id)->delete(); break;
            case 'multi_choice_text': return MultiChoiceText::where('question_id', $this->id)->delete(); break;
            case 'multi_response': return MultiResponse::where('question_id', $this->id)->delete(); break;
            case 'sequence': return Sequence::where('question_id', $this->id)->delete(); break;
            case 'true_false': return TrueFalse::where('question_id', $this->id)->delete(); break;
            case 'type_in': return TypeIn::where('question_id', $this->id)->delete(); break;
            case 'word_blank': return WordBlank::where('question_id', $this->id)->delete(); break;
            default: dd(1);return false;
        }
    }

    public function fill_in_blank(){
        return $this->hasMany(FillInBlank::class, 'question_id');
    }
    public function matching(){
        return $this->hasMany(Matching::class, 'question_id');
    }
    public function multi_choice(){
        return $this->hasMany(MultiChoice::class, 'question_id');
    }
    public function multi_choice_text(){
        return $this->hasMany(MultiChoiceText::class, 'question_id');
    }
    public function multi_response(){
        return $this->hasMany(Sequence::class, 'question_id');
    }
    public function sequence(){
        return $this->hasMany(Sequence::class, 'question_id');
    }
    public function true_false(){
        return $this->hasMany(TrueFalse::class, 'question_id');
    }
    public function type_in(){
        return $this->hasMany(TypeIn::class, 'question_id');
    }
    public function word_blank(){
        return $this->hasMany(WordBlank::class, 'question_id');
    }
}
