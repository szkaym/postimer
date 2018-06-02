<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TUser extends Authenticatable
{
    protected $guarded = ['id'];
    
    // specify of account password field
    public function getAuthPassword()
    {
        return $this->user_password;
    }

}
