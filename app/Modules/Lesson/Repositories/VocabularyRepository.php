<?php

namespace App\Modules\Lesson\Repositories;

interface VocabularyRepository 
{
    public function byUnit($unit_id);
    public function createMulti($input);   
    public function delete_all($unit_id);
}
