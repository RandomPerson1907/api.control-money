<?php

namespace App\Listeners;

use App\Events\GetInvoiceEvent;

class GetInvoiceListener
{
    const INVOICE_FOUND = "Invoice has been found";
    const INVOICE_NOT_FOUND = "Invoice hasn`t been found";

    /**
     * Handle the event.
     *
     * @param  GetInvoiceEvent  $event
     * @return array
     */
    public function handle(GetInvoiceEvent $event)
    {
        try {
            $invoice = $event->getUser()->invoices()->where("invoices.id", "=", $event->getInvoiceId())->get();
            return [
                "status" => true,
                "message" => self::INVOICE_FOUND,
                "invoice" => $invoice
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::INVOICE_NOT_FOUND
            ];
        }
    }
}
