<?php

namespace App\Http\Controllers\Admin;

use App\Models\Goods_cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

class Goods_cateController extends Controller
{
    public function cateAdd()
    {
        $result = Goods_cate::select('id','name')->get()->toArray();
        // var_dump($result);
    	return view('admin.goods.cateadd');
    }

    public function catetory()
    {	
        //一级分类
        $result1 = Goods_cate::where('pid',0)->get()->toArray();
        // 二级分类
        $result2 = Goods_cate::where('path','like','0._.')->get()->toArray();
        // 三级分类
        $result3 = Goods_cate::where('path','like','0.%.%.')->get()->toArray();
    	return view('admin.goods.catetory')->with('result1',$result1)
                                           ->with('result2',$result2)
                                           ->with('result3',$result3);
        // 二级分类和三级分类
        // $result4 = Goods_cate::where('path','like','0.%.')->get()->toArray();        
    }

    public function cateSelect()
    {	
        $result = Goods_cate::all();
        return $result;
    }
}
