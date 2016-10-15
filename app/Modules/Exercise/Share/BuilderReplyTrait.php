<?php
/**
 * Created by PhpStorm.
 * User: JellyFish
 * Date: 7/13/2016
 * Time: 9:12 AM
 */
namespace App\Modules\Exercise\Share;
trait BuilderReplyTrait
{
    public function builderReply($array_values){
        $array_values = array_pad($array_values, count($this->model->fillable), null);
        return array_combine($this->model->fillable, $array_values);
    }
}