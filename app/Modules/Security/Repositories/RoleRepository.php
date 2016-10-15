<?php 
namespace App\Modules\Security\Repositories; 

interface RoleRepository
{
    public function data($key,$value,$perpage,$url);
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function role_user();
    public function user_assign($input);
    public function permission_role();
    public function role_assign($input);
}
