<?php
namespace App\Modules\Cohot\Repositories;

interface BoMonRepository{
    public function data($request);
    public function create($input);
    public function update($input);
    public function find($id);
    public function delete($input);
    public function detail($id);
    public function filter($input,$class_id);
    public function attendance($id);
    public function updatetest($input);
    public function updatescore($input);
}