<?php 
namespace App\Modules\Auth\Repositories; 

interface UserRepository
{
   public function data($key,$value,$perpage,$url);
   public function create($input);
   public function update($input);
   public function find($id);
   public function delete($input);
}
