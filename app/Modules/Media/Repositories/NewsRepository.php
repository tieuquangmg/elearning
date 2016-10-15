<?php 
namespace App\Modules\Media\Repositories;

interface NewsRepository
{
    public function data();
    public function create($input);
    public function update($input);
    public function delete($input);
    public function find($id);
    public function detail($id);
}
