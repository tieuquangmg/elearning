<?php

namespace App\Modules\Exercise\Repositories;

use App\Modules\Exercise\Models\TrueFalse;

class TrueFalseRepositoryEloquent implements TrueFalseRepository
{
    protected $model;
    public function __construct(TrueFalse $model)
    {
        $this->model = $model;
    }

    public function createReply($input){
        $this->model->create($input);
    }

}
