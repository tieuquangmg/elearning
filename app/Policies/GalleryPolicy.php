<?php

namespace App\Policies;

use App\Modules\Media\Models\Gallery;
use App\Modules\Auth\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function owner(User $user, Gallery $gallery){
        return $user->id === $gallery->created_by;
    }

    public function ownerById(User $user, Gallery $gallery){
        return $user->id === $gallery->created_by;
    }
}
