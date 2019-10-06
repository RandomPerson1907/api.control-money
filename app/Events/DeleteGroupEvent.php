<?php

namespace App\Events;

use App\Traits\GroupTrait;

class DeleteGroupEvent extends Event
{
    use GroupTrait;
}
