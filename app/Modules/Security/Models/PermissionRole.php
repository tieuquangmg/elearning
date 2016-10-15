<?php
/**
 * Created by PhpStorm.
 * User: FightLightDiamond
 * Date: 5/26/2016
 * Time: 7:54 PM
 */

namespace App\Modules\Security\Models;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    public $table ='permission_role';
    public $timestamps = false;
}