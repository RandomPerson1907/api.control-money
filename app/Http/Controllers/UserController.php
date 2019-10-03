<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "random.person.1907@gmail.com";
        $user->password = "test";
        $user->api_token = Str::random();

        $user->save();
    }
}
