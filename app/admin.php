<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Admin extends Model implements Authenticatable
{

    use BasicAuthenticatable;

    protected $fillable = [
        'username','name','email','password',
    ];

}
