<?php 
namespace App\Modules\Media\Repositories; 

interface NotifyRepository
{
   public function data();
   public function create($input);
   public function update($input);
   public function find($id);
   public function delete($input);
}
