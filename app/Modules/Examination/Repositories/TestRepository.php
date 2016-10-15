<?php

namespace App\Modules\Examination\Repositories;

interface TestRepository 
{
    public function data();
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function getDo($id);
    public function postDo();
}
