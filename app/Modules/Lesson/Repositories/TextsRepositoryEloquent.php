<?php

namespace App\Modules\Lesson\Repositories;

use App\Modules\Lesson\Models\Texts;

/**
 * Class TextsRepositoryEloquent
 * @package namespace App\Repositories\Lesson;
 */
class TextsRepositoryEloquent implements TextsRepository
{
    protected $model;
    public function __construct(Texts $model)
    {
        $this->model = $model;
    }

    public function find($id){
        return $this->model->find($id);
    }
    
}
