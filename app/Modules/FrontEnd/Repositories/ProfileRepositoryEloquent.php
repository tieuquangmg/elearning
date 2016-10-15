<?php 
namespace App\Modules\FrontEnd\Repositories; 


use App\Modules\Examination\Models\MiniTest;


class ProfileRepositoryEloquent implements ProfileRepository
{
    protected $model;
    public function __construct(){

    }

    public function data(){
//        $order = Order::where('user_id', auth()->user()->id)->pluck('id');
//        $course_ids = OrderDetail::whereIn('order_id', $order)->pluck('course_id');
//        $data['courses'] = Course::whereIn('id', $course_ids)->pluck('name', 'id');
//        $data['mini_tests'] = MiniTest::orderBy('id', 'desc')->limit(5)->pluck('insistence', 'id');
//        return $data;

    }
    public function create($input){}
    public function update($input){}
    public function find($id){}
    public function delete($input){}
    public function mini_test_detail($id){

    }
}
