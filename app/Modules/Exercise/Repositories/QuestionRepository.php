<?php

namespace App\Modules\Exercise\Repositories;



/**
 * Interface QuestionRepository
 * @package namespace App\Modules\Exercise\Repositories;
 */
interface QuestionRepository 
{
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($id);
}
