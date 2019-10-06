<?php

namespace App\Listeners;

use App\Events\GetGroupEvent;
use App\Models\User;

class GetGroupListener
{
    const GROUP_NOT_FOUND = "GroupTrait hasn`t been found";
    const GROUP_FOUND = "GroupTrait has been found";

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
     * @param  GetGroupEvent  $event
     * @return array
     */
    public function handle(GetGroupEvent $event)
    {
        try {
            return [
              "status" => true,
              "message" => self::GROUP_FOUND,
              "group" => $event->getUser()->group($event->getGroupId())
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::GROUP_NOT_FOUND
            ];
        }
    }
}
