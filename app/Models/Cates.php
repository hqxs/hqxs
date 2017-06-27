<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
    protected $table="goods_cates";
//    首页
    static public $select = [
        "goods_cates.id as cid",
        "goods_cates.name",
        "goods_cates.path",
        "goods_cates.pid",
        "goods_gifts.id as gid"
    ];

//    礼品馆
    static public $cate = [
        "id",
        "pid",
        "path"
        ,"name"
    ];
}
