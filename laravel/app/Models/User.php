<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //设置允许或者不允许的字段
     protected $guarded = ['_token'];

     //在将数据写到数据库的时候 需要将某些字段进行额外的处理  修改器
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
