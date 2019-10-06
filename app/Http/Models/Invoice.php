<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class, "groupId", "id");
    }
}
