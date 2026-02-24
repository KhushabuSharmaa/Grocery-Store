<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class admin extends Authenticatable
{
    protected $guard ='admin';

    protected $fillable = [
        'name',
        'email',
        'profile',
        'role',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
