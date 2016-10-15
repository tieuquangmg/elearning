<?php
/**
 * Created by PhpStorm.
 * User: diamond
 * Date: 7/7/16
 * Time: 10:04 AM
 */

namespace App\Entities\Guard;


use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable,
        Authorizable,
        CanResetPassword,
        EntrustUserTrait // add this trait to your user model
    {
        EntrustUserTrait ::can insteadof Authorizable; //add insteadof avoid php trait conflict resolution
    }

}