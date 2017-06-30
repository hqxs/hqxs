<?php

namespace App\Http\Controllers\Admin;

use App\Models\Goods_cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Goods_cateController extends Controller
{
    public function cateAdd()
    {
    	return view('admin.goods.cateadd');
    }

    public function catetory()
    {	
        //一级分类
        $result1 = Goods_cate::where('pid',0)->get()->toArray();
//        var_dump($result1);
        // 二级分类
        $result2 = Goods_cate::where('path','like','0._.')->get()->toArray();
//        var_dump($result2);
        // 三级分类
        $result3 = Goods_cate::where('path','like','0.%.%.')->get()->toArray();
//        var_dump($result3);
    	return view('admin.goods.catetory')->with('result1',$result1)
                                           ->with('result2',$result2)
                                           ->with('result3',$result3);
    }

    public function cateSelect()
    {	

    	//一级分类
    	$result1 = Goods_cate::where('pid',0)->get()->toArray();
        //二级分类
        $result2 = Goods_cate::where('path','like','0._.')->get()->toArray();
    	// 三级分类
    	$result3 = Goods_cate::where('path','like','0.%.%.')->get()->toArray();
    	// 二级分类和三级分类
    	$result4 = Goods_cate::where('path','like','0.%.')->get()->toArray();
    	var_dump($result1);
    	var_dump($result2);
    	var_dump($result3);
        var_dump($result4);
    }
}
