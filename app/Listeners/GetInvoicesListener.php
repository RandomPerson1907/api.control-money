<?php

namespace App\Listeners;

use App\Events\GetInvoicesEvent;
use App\Models\Group;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class GetInvoicesListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param GetInvoicesEvent $event
     * @return void
     */
    public function handle(GetInvoicesEvent $event)
    {
        return Group::where("userId", "=", $event->getUser()->id)->with("invoices")->get();
    }
}
