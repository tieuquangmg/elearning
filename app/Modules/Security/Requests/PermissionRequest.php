<?php 
namespace App\Modules\Security\Requests;
use App\Http\Requests\Request;

class PermissionRequest extends Request
{
  public function authorize(){ return false;}
  public function rules(){ return [];}
}
