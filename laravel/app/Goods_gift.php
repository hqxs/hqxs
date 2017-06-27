<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_gift extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ['_token','updated_at'];
}
