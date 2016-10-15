<?php 
namespace App\Modules\Security\Repositories; 

interface PermissionRepository
{
    public function index();
    public function data($key,$value,$perpage,$url);
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
}
