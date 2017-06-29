<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table='cate';
    protected $primaryKey='cate_id';
    public $timestamps=false;
}
