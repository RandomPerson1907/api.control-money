<?php

namespace App\Listeners;

use App\Events\GetGroupEvent;
use App\Models\User;

class GetGroupListener
{
    const GROUP_NOT_FOUND = "Group hasn`t been found";
    const GROUP_FOUND = "Group has been found";

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
              "group" => $event->getUser()->group($event->getGroupId())->with("invoices")->firstOrFail()
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::GROUP_NOT_FOUND
            ];
        }
    }
}
