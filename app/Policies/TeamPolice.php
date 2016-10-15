<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolice
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
}
