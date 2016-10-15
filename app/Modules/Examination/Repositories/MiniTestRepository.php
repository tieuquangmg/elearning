<?php

namespace App\Modules\Examination\Repositories;

interface MiniTestRepository 
{
    public function data($key,$value,$perpage,$url);
    public function create($input);
    public function update($input ,$id);
    public function find($id);
    public function findBy($key,$vaule,$pag);
    public function delete($input);
}
