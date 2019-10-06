<?php

namespace App\Listeners;

use App\Events\StoreGroupEvent;
use App\Models\Group;

class StoreGroupListener
{
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
     * @param  StoreGroupEvent  $event
     * @return array
     */
    public function handle(StoreGroupEvent $event)
    {
        try {
            $validation = Group::isValid($event->getGroupParameters(), $event->getUser());

            if (!$validation->fails()) {
                $group = new Group;
                $group->name = $event->getGroupName();
                $group->description = $event->getGroupDescription();
                $group->user()->associate($event->getUser());
                $group->save();

                return [
                    "status" => true,
                    "message" => "Group has been saved successfully",
                    "group" => $group->setRelations([])
                ];
            } else
                throw new \Exception($validation->errors());
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}
