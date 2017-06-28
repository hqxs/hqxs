<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table ="votes";
    public $timestamps = false;
//    礼品馆投票
    static public $select = [
        "id",
        "gid",
        "name",
        "count",
        "icon"
    ];
}
