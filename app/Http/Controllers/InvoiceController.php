<?php

namespace App\Http\Controllers;

use App\Events\DeleteInvoiceEvent;
use App\Events\GetInvoiceEvent;
use App\Events\GetInvoicesEvent;
use App\Events\StoreInvoiceEvent;
use App\Events\UpdateInvoiceEvent;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Event;

class InvoiceController extends Controller
{
    public function list(Request $request)
    {
        return Event::dispatch(new GetInvoicesEvent($request->apiToken));
    }

    public function one(Request $request, $id)
    {
        return Event::dispatch(new GetInvoiceEvent($request->apiToken, ["id" => $id]));
    }

    public function store(Request $request)
    {
        return Event::dispatch(new StoreInvoiceEvent($request->apiToken, $request->all()));
    }

    public function update(Request $request, $id)
    {
        return Event::dispatch(new UpdateInvoiceEvent($request->apiToken, array_merge($request->all(), ["id" => $id])));
    }

    public function delete(Request $request, $id)
    {
        return Event::dispatch(new DeleteInvoiceEvent($request->apiToken, array_merge($request->all(), ["id" => $id])));
    }

    public function deleteMany(Request $request)
    {
        if (isset($request->groups)) {
            $status = true;
            $messages = [];
            $notFoundIds = [];

            foreach ($request->groups as $id) {
                $result = Event::dispatch(new DeleteInvoiceEvent($request->apiToken, array_merge($request->all(), ["id" => $id])))[0];

                if (!$result["status"]) {
                    $messages[] = $result["message"];
                    $notFoundIds[] = $id;
                    $status = false;
                }
            }

            if (empty($messages))
                $messages[] = "Groups have been deleted successfully";

            return [
                "status" => $status,
                "messages" => $messages,
                "notFoundIds" => $notFoundIds
            ];
        }

        return [
            "status" => false,
            "message" => "Groups hasn`t been selected"
        ];
    }
}
