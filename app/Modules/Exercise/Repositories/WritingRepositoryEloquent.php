<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\Writing;


class WritingRepositoryEloquent implements WritingRepository
{

    public function model()
    {
        return Writing::class;
    }

    
}
