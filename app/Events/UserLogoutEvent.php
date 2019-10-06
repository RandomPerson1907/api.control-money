<?php

namespace App\Events;

use http\Env\Request;

class UserLogoutEvent extends Event
{
    /**
     * @var bool|string
     */
    private $apiToken;

    /**
     * Create a new event instance.
     *
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->apiToken = (isset($parameters["apiToken"]) && strlen(trim($parameters["apiToken"]))) ? trim($parameters["apiToken"]) : false;
    }

    public function getApiToken()
    {
        return $this->apiToken;
    }
}
