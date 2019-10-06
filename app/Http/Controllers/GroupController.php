<?php

namespace App\Http\Controllers;

use App\Events\DeleteGroupEvent;
use App\Events\GetGroupEvent;
use App\Events\GetGroupsEvent;
use App\Events\StoreGroupEvent;
use App\Events\UpdateGroupEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class GroupController extends Controller
{
    public function list(Request $request)
    {
        return Event::dispatch(new GetGroupsEvent($request->apiToken));
    }

    public function one(Request $request, $id)
    {
        return Event::dispatch(new GetGroupEvent($request->apiToken, $id));
    }

    public function store(Request $request)
    {
        return Event::dispatch(new StoreGroupEvent($request->apiToken, $request->all()));
    }

    public function update(Request $request, $id)
    {
        return Event::dispatch(new UpdateGroupEvent($request->apiToken, array_merge($request->all(), ["id" => $id])));
    }

    public function delete(Request $request, $id)
    {
        return Event::dispatch(new DeleteGroupEvent($request->apiToken, array_merge($request->all(), ["id" => $id])));
    }

    public function deleteMany(Request $request)
    {
        if (isset($request->groups)) {
            $status = true;
            $messages = [];
            $notFoundIds = [];

            foreach ($request->groups as $id) {
                $result = Event::dispatch(new DeleteGroupEvent($request->apiToken, array_merge($request->all(), ["id" => $id])))[0];

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
