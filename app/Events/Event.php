<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;

    private $apiToken;
    private $user;

    public function __construct($apiToken)
    {
        try {
            $this->apiToken = $apiToken;
            $this->user = User::getByToken($apiToken);
        } catch (\Exception $e) {
            $this->user = false;
        }
    }

    public function getApiToken()
    {
        return $this->apiToken;
    }

    public function getUser()
    {
        if (!$this->user) {
            throw new \Exception;
        }
        return $this->user;
    }
}
