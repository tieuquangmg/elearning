<?php

namespace App\Modules\Lesson\Repositories;
use App\Modules\Knowledge\Models\Unit;
use App\Modules\Lesson\Models\Grammar;

/**
 * Class GrammarRepositoryEloquent
 * @package namespace App\Repositories\Lesson;
 */
class GrammarRepositoryEloquent implements GrammarRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Grammar::class;
    }

    public function byUnit($unit_id){
        $data['unit'] = Unit::find($unit_id);
        $data['vocabularies'] = $data['unit']->grammar;
        return $data;
    }

    
}
