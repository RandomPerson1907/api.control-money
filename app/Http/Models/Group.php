<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Group extends Model
{
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        "userId"
    ];

    public static function isValid($groupParameters, $user)
    {
        $validator = Validator::make($groupParameters, [
            "name" => [
                "required",
                "max:191",
                function ($attribute, $value, $fail) use ($user) {
                    if ($user->groups()->where("name", "=", $value)->first()) {
                        return $fail("Group name must be unique");
                    }
                }
            ],
            "description" => "max:60000",
        ]);

        return $validator;
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, "groupId", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "userId", "id");
    }
}
