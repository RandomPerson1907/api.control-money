<?php

namespace App\Events;

use App\Traits\InvoiceTrait;

class DeleteInvoiceEvent extends Event
{
    use InvoiceTrait;
}
