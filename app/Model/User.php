<?php

namespace App\Model;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //设置允许不允许
    protected $guarded = ['_token','pwd'];
    //将某些字段进行额外处理
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
