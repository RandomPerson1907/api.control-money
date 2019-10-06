<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        "apiToken",
        "remember_token",
        "created_at",
        "updated_at",
    ];

    public static function getByToken($apiToken)
    {
        if ($apiToken)
            return self::where("apiToken", "=", $apiToken)->whereNotNull("apiToken")->firstOrFail();
        else
            throw new \Exception;
    }

    public function deleteApiToken()
    {
        $this->apiToken = null;
    }

    public function groups()
    {
        return $this->hasMany(Group::class, "userId", "id");
    }

    public function group($groupId)
    {
        return self::groups()->where("id", "=", $groupId)->firstOrFail();
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class, Group::class, "userId", "groupId");
    }
}
