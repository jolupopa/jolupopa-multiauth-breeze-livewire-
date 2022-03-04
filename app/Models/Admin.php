<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Custom\MyTraits\HasProfilePhoto;

class Admin extends Authenticatable
{
    use Notifiable;
    use HasProfilePhoto;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];

}
