<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gifts extends Model
{
    protected $table="goods_gifts";
//    首页,礼品馆
    static public $select = [
        "goods_gifts.id",
        "goods_gifts.price",
        "goods_images.icon",
        "goods_gifts.desc",
        "goods_gifts.name"
    ];
}
