<?php

namespace App\Http\Controllers;

use App\Events\UserLoginEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "random.person.1907@gmail.com";
        $user->password = Hash::make("test");
        $user->apiToken = Str::random();

        $user->save();

        return [
            "status" => true,
            "message" => "success"
        ];
    }

    public function login(Request $request)
    {
        return Event::dispatch(new UserLoginEvent($request->all()));
    }
}
