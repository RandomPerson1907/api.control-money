<?php

namespace App\Listeners;

use App\Events\UserLoginEvent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class UserLoginListener
{
    const INCORRECT_USER_DATA = "Incorrect user data";
    const PASSWORD_ARE_EMPTY = "Password are empty";
    const SUCCESSFUL_LOGIN = "Successful login";
    const WRONG_CREDENTIALS = "Wrong credentials";

    /**
     * Handle the event.
     *
     * @param UserLoginEvent $event
     * @return array
     */
    public function handle(UserLoginEvent $event)
    {
        if ($event->getPassword()) {
            if ($event->getName()) {
                $result = $this->loginByName($event->getName(), $event->getPassword());
                if ($result["status"])
                    return $result;
            }
            if ($event->getEmail()) {
                $result = $this->loginByEmail($event->getEmail(), $event->getPassword());
                if ($result["status"])
                    return $result;
            }

            return [
                "status" => false,
                "message" => self::INCORRECT_USER_DATA
            ];
        } else {
            return [
                "status" => false,
                "message" => self::PASSWORD_ARE_EMPTY
            ];
        }
    }

    private function loginByName($name, $password)
    {
        try {
            $user = User::where('name', $name)->firstOrFail();

            if ($this->checkHash($user->password, $password)) {
                $apiToken = $this->generateApiToken($user);
            } else {
                throw new \Exception;
            }

            return [
                "status" => true,
                "message" => self::SUCCESSFUL_LOGIN,
                "apiToken" => $apiToken
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::WRONG_CREDENTIALS
            ];
        }
    }

    private function loginByEmail($email, $password)
    {
        try {
            $user = User::where('email', $email)->firstOrFail();

            if ($this->checkHash($user->password, $password)) {
                $apiToken = $this->generateApiToken($user);
            } else {
                throw new \Exception;
            }

            return [
                "status" => true,
                "message" => self::SUCCESSFUL_LOGIN,
                "apiToken" => $apiToken
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::WRONG_CREDENTIALS
            ];
        }
    }

    private function generateApiToken(User $user)
    {
        $apiToken = Str::random(32);
        $user->apiToken = $apiToken;
        $user->save();

        return $apiToken;
    }

    private function checkHash($userPassword, $requestPassword)
    {
        return Hash::check($requestPassword, $userPassword);
    }
}
