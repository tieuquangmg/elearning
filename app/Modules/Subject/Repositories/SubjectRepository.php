<?php 
namespace App\Modules\Subject\Repositories; 

interface SubjectRepository
{
    public function data($request,$perpage,$url);
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function unit($id);
}
