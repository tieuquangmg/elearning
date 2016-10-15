<?php 
namespace App\Modules\FrontEnd\Repositories;

use App\Modules\Media\Models\News;

class DashBoardRepositoryEloquent implements DashBoardRepository
{
   protected $model;
public function __construct(){}
   public function data(){
       $data['data'] = News::where('type', 0)->paginate();
       return $data;
   }
   public function create($input){}
   public function update($input){}
   public function find($id){}
   public function delete($input){}
}
