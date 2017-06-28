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
//    详情页
    static public $list = [
        "goods_gifts.name",
        "goods_gifts.price",
        "goods_gifts.focus",
        "goods_gifts.store",
        "goods_gifts.sold",
        "goods_gifts.desc",
        "goods_images.icon"
    ];
//    列表小图片
    static public $icon = "goods_images.icon";
}
