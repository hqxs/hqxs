<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goods_cart extends Model
{
    static public $select = [
        "goods_carts.id as id",
        "goods_carts.gid as gid",
        "goods_carts.count",
        "goods_gifts.name",
        'goods_gifts.price',
        "goods_gifts.store",
        "goods_gifts.desc",
        "goods_images.icon"
    ];
}
