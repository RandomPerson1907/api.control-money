<?php

namespace App\Events;

class StoreGroupEvent extends Event
{
    private $groupParameters;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($apiToken, $groupParameters)
    {
        parent::__construct($apiToken);
        $this->groupParameters = $groupParameters;
    }

    public function getGroupParameters()
    {
        return $this->groupParameters;
    }

    public function getGroupName()
    {
        return $this->getGroupParameters()["name"];
    }

    public function getGroupDescription()
    {
        return (isset($this->getGroupParameters()["description"])) ? $this->getGroupParameters()["description"] : "";
    }
}
