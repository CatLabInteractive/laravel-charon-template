<?php

namespace App\Policies;

use App\Models\User;

/**
 * Class UserPolicy
 * @package App\Policies
 */
class UserPolicy
{
    /**
     * @return bool
     */
    public function index()
    {
        return true;
    }

    /**
     * @param User $user
     * @param $identity
     * @return bool
     */
    public function view(User $user, $identity)
    {
        return true;
    }
}