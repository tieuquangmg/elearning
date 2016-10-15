<?php 
namespace App\Modules\Security\Requests; 
use App\Http\Requests\Request;

class RoleRequest extends Request
{
  public function authorize(){ return true;}
  public function rules(){ return [
    'g-recaptcha-response' => 'required|recaptcha',
    'name'=>'required|min:3|max:50|unique:roles',
    'display_name'=>'required|min:3|max:50|unique:roles',
    'description'=>'min:10|max:500',
  ];}
  public function messages(){ return [

  ];}
}
