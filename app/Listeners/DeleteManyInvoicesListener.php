<?php

namespace App\Listeners;

use App\Events\DeleteInvoiceEvent;
use App\Events\DeleteManyInvoicesEvent;
use Illuminate\Support\Facades\Event;

class DeleteManyInvoicesListener
{
    /**
     * Handle the event.
     *
     * @param  DeleteManyInvoicesEvent  $event
     * @return array
     */
    public function handle(DeleteManyInvoicesEvent $event)
    {
        if (!empty($event->getInvoicesIds())) {
            $status = true;
            $messages = [];
            $notFoundIds = [];

            foreach ($event->getInvoicesIds() as $id) {
                $result = Event::dispatch(new DeleteInvoiceEvent($event->getApiToken(), ["id" => $id]))[0];

                if (!$result["status"]) {
                    $notFoundIds[] = $id;
                    $status = false;
                }

                $messages[] = $result["message"];
            }

            if (empty($messages))
                $messages[] = "Invoices have been deleted successfully";

            return [
                "status" => $status,
                "messages" => $messages,
                "notFoundIds" => $notFoundIds
            ];
        } else {
            return [
                "status" => false,
                "message" => "Invoices hasn`t been selected"
            ];
        }
    }
}
