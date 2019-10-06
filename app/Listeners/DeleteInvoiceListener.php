<?php

namespace App\Listeners;

use App\Events\DeleteInvoiceEvent;

class DeleteInvoiceListener
{
    const INVOICE_NOT_FOUND = "Invoice hasn`t been found";

    /**
     * Handle the event.
     *
     * @param  DeleteInvoiceEvent  $event
     * @return array
     */
    public function handle(DeleteInvoiceEvent $event)
    {
        try {
            $invoice = $event
                ->getUser()
                ->invoices()
                ->where("invoices.id", "=", $event->getInvoiceId())
                ->first();
            if (!$invoice)
                throw new \Exception(self::INVOICE_NOT_FOUND);

            $invoice->delete();

            return [
                "status" => true,
                "message" => "Invoice {$invoice->name} has been deleted"
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}
