<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    protected $fillable = ['name', 'mobile', 'otp', 'email', 'password'];

    protected $attributes = [
        'otp' => '0',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
