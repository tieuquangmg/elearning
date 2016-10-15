<?php

namespace App\Modules\Lesson\Repositories;

use App\Modules\Lesson\Models\Summary;

/**
 * Class SummaryRepositoryEloquent
 * @package namespace App\Repositories\Lesson;
 */
class SummaryRepositoryEloquent implements SummaryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Summary::class;
    }

    
}
