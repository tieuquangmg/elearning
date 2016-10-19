<?php 
namespace App\Modules\Organize\Repositories;

interface ClassRepository
{
   public function data($request,$perpage,$url);
   public function create($input);
   public function update($input);
   public function find($id);
   public function delete($input);
   public function detail($id);
   public function filter($input,$class_id);
   public function attendance($id);
}