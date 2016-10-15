<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\WordBlank;
use App\Modules\Exercise\Share\BuilderReplyTrait;

/**
 * Class WordBlankRepositoryEloquent
 * @package namespace App\Modules\Exercise\Repositories;
 */
class WordBlankRepositoryEloquent implements WordBlankRepository
{
    use BuilderReplyTrait;
    
    public function model()
    {
        return WordBlank::class;
    }

    public function createReply($input){    
        foreach($input['reply'] as $k => $v){
            $this->builderReply([$input['question_id'], $v, $k]);         
        }
    }
    
}
