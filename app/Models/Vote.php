<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table ="votes";
//    礼品馆投票
    static public $select = [
        "id",
        "gid",
        "name",
        "disc",
        "count",
        "icon"
    ];
}
