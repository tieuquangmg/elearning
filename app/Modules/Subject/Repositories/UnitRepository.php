<?php 
namespace App\Modules\Subject\Repositories; 

interface UnitRepository
{
    public function data();
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function compose($id);
}
