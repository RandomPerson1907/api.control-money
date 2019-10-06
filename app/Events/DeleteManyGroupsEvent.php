<?php

namespace App\Events;

use App\Traits\GroupTrait;

class DeleteManyGroupsEvent extends Event
{
    use GroupTrait;
}
