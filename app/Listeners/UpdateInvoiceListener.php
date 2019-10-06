<?php

namespace App\Listeners;

use App\Events\UpdateInvoiceEvent;
use App\Models\Invoice;

class UpdateInvoiceListener
{
    public function handle(UpdateInvoiceEvent $event)
    {
        try {
            $validation = Invoice::isValid($event->getInvoiceParameters(), $event->getInvoiceGroup(), $event->getInvoiceId());

            if (!$validation->fails()) {
                $invoice = $event->getUser()->invoices()->where("invoices.id", "=", $event->getInvoiceId())->first();

                if (!$invoice)
                    throw new \Exception("Invoice {$event->getInvoiceId()} couldn`t been found");

                $invoice->fill($event->getInvoiceParameters());
                $invoice->group()->associate($event->getInvoiceGroupId());
                $invoice->save();
                $invoice->group = $event->getInvoiceGroup();

                return [
                    "status" => true,
                    "message" => "Invoice {$invoice->name} has been updated successfully",
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
