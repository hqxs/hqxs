<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    protected $fillable = ['name', 'pwd', 'email'];
}
