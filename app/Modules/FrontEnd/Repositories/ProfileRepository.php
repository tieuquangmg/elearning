<?php 
namespace App\Modules\FrontEnd\Repositories; 

interface ProfileRepository
{
    public function data();
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function mini_test_detail($id);
}
