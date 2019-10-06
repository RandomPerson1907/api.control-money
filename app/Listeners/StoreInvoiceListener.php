<?php

namespace App\Listeners;

use App\Events\StoreInvoiceEvent;
use App\Models\Group;
use App\Models\Invoice;

class StoreInvoiceListener
{
    /**
     * Handle the event.
     *
     * @param  StoreInvoiceEvent  $event
     * @return array
     */
    public function handle(StoreInvoiceEvent $event)
    {
        try {
            $validation = Invoice::isValid($event->getInvoiceParameters(), $event->getInvoiceGroup());

            if (!$validation->fails()) {
                $invoice = new Invoice;
                $invoice->fill($event->getInvoiceParameters());
                $invoice->group()->associate($event->getInvoiceGroupId());
                $invoice->save();
                $invoice->group = $event->getInvoiceGroup();

                return [
                    "status" => true,
                    "message" => "Invoice {$invoice->name} has been saved successfully",
                    "invoice" => $invoice
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
