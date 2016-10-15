<?php 
namespace App\Modules\Subject\Repositories; 
use App\Modules\Subject\Models\QuestionBank;
use App\Modules\Subject\Models\Unit;
use App\Services\Upload;
class UnitRepositoryEloquent implements UnitRepository
{
    protected $model;
    public function __construct(Unit $model){
        $this->model= $model;
    }
   public function data(){}
    public function create($input){
        //dd($input);
        if(isset($input['image'])) {
            $i = new Upload();
            $input['image'] = $i->image($input['image'], 'image/subject', 400, 300);
        }
        return $this->model->create($input);
    }
    public function update($input){
        if(isset( $input['image'])) {
            $i = new Upload();
            $input['image'] = $i->image($input['image'], 'image/subject', 400, 300);
        }
        return $this->model->where('id', $input['id'])->update($input);
    }

    public function find($id){
        return $this->model->find($id);
    }
    public function delete($input){
        return $this->model->whereId($input)->delete();
    }
    public function unit($id){
        $this->model->where('id', $id)->update($id);
    }

    public function compose($id){
        $data['unit'] = $this->model
            ->with('subject')
            ->with('theory')
            ->with('document')
            ->with('test')
            ->with('meeting')
            ->find($id);
        $data['question'] = QuestionBank::where('unit_id', $id)->paginate(10);
        return $data;
    }
}