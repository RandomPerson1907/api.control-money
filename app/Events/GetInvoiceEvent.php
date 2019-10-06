<?php

namespace App\Events;

use App\Traits\InvoiceTrait;

class GetInvoiceEvent extends Event
{
    use InvoiceTrait;
}
