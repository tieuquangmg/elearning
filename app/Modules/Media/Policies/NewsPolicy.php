<?php 
namespace App\Modules\Media\Policies; 
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
{
  use HandlesAuthorization;
  public function __construct()
  {

  }
  public function owner()
  {
    
  }
}
