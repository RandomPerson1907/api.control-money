<?php

namespace App\Events;

class GetGroupEvent extends Event
{
    private $groupId;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($apiToken, $groupId)
    {
        parent::__construct($apiToken);
        $this->groupId = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }
}
