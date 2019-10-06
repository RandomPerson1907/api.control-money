<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function invoices()
    {
        return $this->hasMany(Invoice::class, "groupId", "id");
    }
}
