<?php

namespace App\Events;

use App\Traits\InvoiceTrait;

class UpdateInvoiceEvent extends Event
{
    use InvoiceTrait;
}
