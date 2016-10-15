<?php

namespace App\Policies;

use App\Modules\Exercise\Models\Image;
use App\Modules\Auth\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy
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
    public function owner(User $user, Image $image){
        return $user->id === $image->created_by;
    }
}
