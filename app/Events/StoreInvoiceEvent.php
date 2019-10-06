<?php

namespace App\Events;

use App\Traits\InvoiceTrait;

class StoreInvoiceEvent extends Event
{
    use InvoiceTrait;
}
