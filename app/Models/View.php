<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $table="view";
//    首页
    static public $select = [
        'id',
        'icon',
        'title'
    ];
}
