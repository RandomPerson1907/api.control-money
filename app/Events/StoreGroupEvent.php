<?php

namespace App\Events;

use App\Traits\GroupTrait;

class StoreGroupEvent extends Event
{
    use GroupTrait;
}
