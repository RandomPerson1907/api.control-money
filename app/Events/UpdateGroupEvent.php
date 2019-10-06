<?php

namespace App\Events;

use App\Traits\GroupTrait;

class UpdateGroupEvent extends Event
{
    use GroupTrait;
}
