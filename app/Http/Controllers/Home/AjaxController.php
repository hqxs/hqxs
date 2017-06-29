<?php

namespace App\Http\Controllers\Home;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AjaxController extends Controller
{
    //路由分组设置
    public function cate()
    {
        $data = $_GET['data'];
        $data = Category::all()->where('cate_pid',$data);
        return $data;
    }
}
