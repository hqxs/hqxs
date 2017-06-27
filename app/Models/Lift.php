<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lift extends Model
{
    protected $table="goods_lifes";
//    首页
    static public $select = [
        'goods_lifes.id',
        'life_images.icon',
        'goods_lifes.name'
    ];
}
