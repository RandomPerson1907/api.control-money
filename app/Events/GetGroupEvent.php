<?php

namespace App\Events;

use App\Traits\GroupTrait;

class GetGroupEvent extends Event
{
    use GroupTrait;
}
