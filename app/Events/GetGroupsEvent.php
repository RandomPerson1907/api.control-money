<?php

namespace App\Events;

class GetGroupsEvent extends Event
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($apiToken, $limit = 10, $offset = 0, $orderBy = "id", $orderDir = "ASC")
    {
        parent::__construct($apiToken);
    }
}
