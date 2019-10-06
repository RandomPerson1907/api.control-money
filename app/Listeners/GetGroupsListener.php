<?php

namespace App\Listeners;

use App\Events\GetGroupsEvent;
use App\Models\Group;

class GetGroupsListener
{
    const GROUPS_NOT_FOUND = "Groups hasn`t been found";
    const GROUPS_FOUND = "Groups has been found";

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GetGroupsEvent  $event
     * @return array
     */
    public function handle(GetGroupsEvent $event)
    {
        try {
            $groups = $event->getUser()->groups()->get();
            return [
                "status" => true,
                "message" => self::GROUPS_FOUND,
                "groups" => $groups
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::GROUPS_NOT_FOUND
            ];
        }
    }
}
