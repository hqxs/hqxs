<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    //设置允许或者不允许添加的字符
    protected $guarded = ['_token','sms_code','user_pw'];
    //在添加数据到数据库的时候，需要将模型字段进行额外的处理
    public function setPasswordAttribute($value)
    {
        $this->attributes['pwd'] = Hash::make($value);
    }


}
