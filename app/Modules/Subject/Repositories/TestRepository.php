<?php 
namespace App\Modules\Subject\Repositories; 

interface TestRepository
{
   public function data($input);
   public function create($input);
   public function update($input);
   public function find($id);
   public function delete($input);
   public function edit($input);
}
