<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class blogger extends Authenticatable
{
    use Notifiable;

    protected $guard = 'blog';

    protected $fillable = [
        'name', 'email', 'password', 
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
}
