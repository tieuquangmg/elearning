<?php 
namespace App\Modules\FrontEnd\Repositories; 

interface DashBoardRepository
{
   public function data();
   public function create($input);
   public function update($input);
   public function find($id);
   public function delete($input);
}
