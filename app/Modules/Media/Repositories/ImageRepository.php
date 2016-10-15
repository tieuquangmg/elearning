<?php

namespace App\Modules\Media\Repositories;



/**
 * Interface ImageRepository
 * @package namespace App\Modules\Media\Repositories;
 */
interface ImageRepository 
{
    public function postUpload($request);
    public function getDelete($id);
}
