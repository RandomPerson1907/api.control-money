<?php

namespace App\Listeners;

use App\Events\DeleteGroupEvent;

class DeleteGroupListener
{
    const GROUP_NOT_FOUND = "Group hasn`t been found";

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
     * @param  DeleteGroupEvent  $event
     * @return array
     */
    public function handle(DeleteGroupEvent $event)
    {
        try {
            $group = $event
                ->getUser()
                ->groups()
                ->where("id", "=", $event->getGroupId())
                ->first();
            if (!$group)
                throw new \Exception(self::GROUP_NOT_FOUND . " [{$event->getGroupId()}]");

            $group->delete();

            return [
                "status" => true,
                "message" => "Group {$group->name} has been deleted"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}
