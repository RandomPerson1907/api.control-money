<?php

namespace App\Listeners;

use App\Events\UpdateGroupEvent;
use App\Models\Group;

class UpdateGroupListener
{
    const GROUP_NOT_FOUND = "Group hasn`t been found";

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UpdateGroupEvent  $event
     * @return array
     */
    public function handle(UpdateGroupEvent $event)
    {
        try {
            $group = $event->getUser()->groups()->where("id", "=", $event->getGroupId())->first();

            if (!$group)
                throw new \Exception(self::GROUP_NOT_FOUND);

            $validation = Group::isValid($event->getGroupParameters(), $event->getUser(), $event->getGroupId());

            if (!$validation->fails()) {
                $group = $event->getUser()->groups()->where("id", "=", $event->getGroupId())->first();
                $oldGroupName = $group->name;

                if (!$group)
                    throw new \Exception(self::GROUP_NOT_FOUND);

                $group->fill($event->getGroupParameters());
                $group->save();

                return [
                    "status" => true,
                    "message" => "Group {$oldGroupName} has been updated successfully"
                ];
            } else {
                throw new \Exception($validation->errors());
            }
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}
