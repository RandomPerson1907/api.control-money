<?php

namespace App\Listeners;

use App\Events\DeleteGroupEvent;
use App\Events\DeleteManyGroupsEvent;
use Illuminate\Support\Facades\Event;

class DeleteManyGroupsListener
{
    /**
     * Handle the event.
     *
     * @param  DeleteManyGroupsEvent  $event
     * @return array
     */
    public function handle(DeleteManyGroupsEvent $event)
    {
        if (!empty($event->getGroupsIds())) {
            $status = true;
            $messages = [];
            $notFoundIds = [];

            foreach ($event->getGroupsIds() as $id) {
                $result = Event::dispatch(new DeleteGroupEvent($event->getApiToken(), ["id" => $id]))[0];

                if (!$result["status"]) {
                    $notFoundIds[] = $id;
                    $status = false;
                }

                $messages[] = $result["message"];
            }

            if (empty($messages))
                $messages[] = "Groups have been deleted successfully";

            return [
                "status" => $status,
                "messages" => $messages,
                "notFoundIds" => $notFoundIds
            ];
        } else {
            return [
                "status" => false,
                "message" => "Groups hasn`t been selected"
            ];
        }
    }
}
