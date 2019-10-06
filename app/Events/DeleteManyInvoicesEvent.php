<?php

namespace App\Events;

use App\Traits\InvoiceTrait;

class DeleteManyInvoicesEvent extends Event
{
    use InvoiceTrait;
}
