<?php

namespace App\Events;

class UserLoginEvent extends Event
{
    private $name;
    private $email;
    private $password;

    /**
     * Create a new event instance.
     *
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->name = (isset($parameters["name"]) && strlen(trim($parameters["name"]))) ? trim($parameters["name"]) : false;
        $this->email = (isset($parameters["email"]) && strlen(trim($parameters["email"]))) ? trim($parameters["email"]) : false;
        $this->password = (isset($parameters["password"]) && strlen(trim($parameters["password"]))) ? trim($parameters["password"]) : false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
