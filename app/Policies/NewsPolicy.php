<?php

namespace App\Policies;

use App\Modules\Exercise\Models\News;
use App\Modules\Auth\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *    
     */
    public function __construct()
    {
        //
    }
    public function owner(User $user, News $news){
        return $user->id === $news->user_id;
        //$this->authorize('owner', $news); ---> function
        //@can('owner', $news) --->blade
    }
}
