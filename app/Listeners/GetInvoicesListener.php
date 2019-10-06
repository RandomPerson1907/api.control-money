<?php

namespace App\Listeners;

use App\Events\GetInvoicesEvent;

class GetInvoicesListener
{
    const INVOICES_FOUND = "Invoices has been found";
    const INVOICES_NOT_FOUND = "Invoices hasn`t been found";

    /**
     * Handle the event.
     *
     * @param  GetInvoicesEvent  $event
     * @return array
     */
    public function handle(GetInvoicesEvent $event)
    {
        try {
            $invoices = $event->getUser()->invoices()->with("group")->get();
            return [
                "status" => true,
                "message" => self::INVOICES_FOUND,
                "invoices" => $invoices
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::INVOICES_NOT_FOUND
            ];
        }
    }
}
