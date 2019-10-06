<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Group extends Model
{
    protected $fillable = [
        "name",
        "description"
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        "userId"
    ];

    public static function isValid($groupParameters, $user, $exceptId)
    {
        $validator = Validator::make($groupParameters, [
            "name" => [
                "required",
                "max:191",
                function ($attribute, $value, $fail) use ($user, $exceptId) {
                    if ($user->groups()->where("name", "=", $value)->where("id", "!=", $exceptId)->first()) {
                        return $fail("GroupTrait {$attribute} must be unique");
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
