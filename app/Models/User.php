<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model; // MongoDB model class
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, JWTSubject
{
    use Authenticatable; // This trait provides authentication-related methods

    // Specify the MongoDB collection name
    protected $collection = 'users';

    // Fillable attributes for mass assignment
    protected $fillable = ['name', 'phone', 'email', 'password'];

    // Hidden attributes when returning user data
    protected $hidden = ['password'];

    /**
     * Get the identifier that will be stored in the JWT subject claim.
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key-value array containing custom claims to be added to the JWT.
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
