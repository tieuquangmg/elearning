<?php
namespace App\Modules\Auth\Repositories;

use App\Modules\Auth\Models\Nguoidung;
use App\Modules\Media\Models\News;
use App\Modules\Security\Models\RoleUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class NguoidungRepositoryEloquent implements NguoidungRepository
{
    protected $model;

    public function __construct(Nguoidung $model)
    {
        $this->model = $model;
    }

    public function data($key, $value = null, $prepage, $url)
    {
        if ($prepage == null) {
            $prepage = 10;
        }
        $data = $this->model->where(function ($query) use ($value, $key) {
            if ($value != null) {
                $query->where($key, 'like', '%' . $value . '%');
            }
        })
            ->orderBy('id', 'desc')->paginate($prepage);
        $data->setPath($url . '?s=' . $value . '&f_select_number=' . $prepage);
        return $data;
    }

    public function create($input)
    {
        $input['birthday'] = new Carbon($input['birthday']);
        if ($input['password'] == null) {
            $input['password'] = Hash::make(123456);
        } else {
            $input['password'] = Hash::make($input['password']);
        }
        return $this->model->create($input);
    }

    public function update($input)
    {
        $data = $this->model->find($input['id']);
        $data->first_name = $input['first_name'];
        $data->last_name = $input['last_name'];
        $data->email = $input['email'];
        $data->phone_number = $input['phone_number'];
        $data->sex = $input['sex'];
        $data->birthday = new Carbon($input['birthday']);
        if (isset($input['manager']))
            $data->manager = $input['manager'];
        if (isset($input['active']))
            $data->active = $input['active'];
        $data->address = $input['address'];
        if(isset($input['password']))
            $data->password = Hash::make($input['password']);
        $data->save();
        return $data;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function delete($input)
    {
        News::whereIn('user_id', $input['ids'])->delete();
        RoleUser::whereIn('user_id', $input['ids'])->delete();
        return $this->model->whereIn('id', $input['ids'])->delete();
    }
}
