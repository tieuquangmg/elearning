<?php
namespace App\Modules\Subject\Repositories;

interface CommentRepository
{
    public function data();
    public function create($input);
    public function update($input,$id);
    public function find($id);
    public function delete($input);
}