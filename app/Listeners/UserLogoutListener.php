<?php

namespace App\Listeners;

use App\Events\UserLogoutEvent;
use App\Models\User;

class UserLogoutListener
{
    const SUCCESSFUL_LOGOUT = "Successful logout";
    const USER_NOT_FOUND = "User not found";

    /**
     * Handle the event.
     *
     * @param  UserLogout  $event
     * @return array
     */
    public function handle(UserLogoutEvent $event)
    {
        try {
            $user = User::getByToken($event->getApiToken());
            $user->deleteApiToken();
            $user->save();

            return [
                "status" => true,
                "message" => self::SUCCESSFUL_LOGOUT
            ];
        } catch (\Exception $e) {
            return [
                "status" => false,
                "message" => self::USER_NOT_FOUND
            ];
        }
    }
}
