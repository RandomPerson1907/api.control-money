<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Invoice extends Model
{
    protected $fillable = [
        "name",
        "description",
        "amount"
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public static function isValid($groupParameters, $group, $exceptId = false)
    {
        $validator = Validator::make($groupParameters, [
            "name" => [
                "required",
                "max:191",
                function ($attribute, $value, $fail) use ($group, $exceptId) {
                    if ($group->invoices()->where("name", "=", $value)->where("id", "!=", $exceptId)->first()) {
                        return $fail("Invoice {$attribute} must be unique in current group");
                    }
                }
            ],
            "description" => "max:60000",
            "amount" => "numeric",
            "groupId" => "required|integer"
        ]);

        return $validator;
    }

    public function group()
    {
        return $this->belongsTo(Group::class, "groupId", "id");
    }
}
