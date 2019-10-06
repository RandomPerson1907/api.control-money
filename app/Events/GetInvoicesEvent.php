<?php

namespace App\Events;

use App\Models\User;
use http\Env\Request;

class GetInvoicesEvent extends Event
{
    private $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($apiToken)
    {
        $this->user = User::getByToken($apiToken);
    }

    public function getUser()
    {
        return $this->user;
    }
}
