<?php

namespace App\Http\Controllers\Home;

use App\Models\Cates;
use App\Models\Gifts;
use App\Models\Lift;
use App\Models\View;
use App\Models\Giftimgs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopIndexController extends Controller
{
    public function index()
    {
        //        商场首页小轮播图
        $imgs = view::select(view::$select)
                        ->where("cate","1")
                        ->where("face","1")->get();
        //        首页礼品馆,
        $gifts = Gifts::select(Gifts::$select)
                        ->join('goods_images','goods_gifts.id','goods_images.goodsId')
                        ->where("goods_gifts.store",">","0")
                        ->where("goods_gifts.up","1")
                        ->where("goods_images.face","1")
                        ->limit(3)
                         ->get();
        //       首页生活馆
        $lifes =Lift::select(Lift::$select)
                        ->join('life_images','goods_lifes.id','life_images.goodsId')
                        ->where('goods_lifes.store','>','0')
                        ->where('goods_lifes.up','1')
                        ->where('life_images.face','1')
                        ->limit(3)
                        ->get();
        //      无极分类
        $cates = Cates::select(Cates::$select)
                        ->leftJoin("goods_gifts","goods_gifts.gcid","goods_cates.id")
                        ->where("path","like","%.2.%")
                        ->where("display","1")
                        ->orderBy("goods_cates.id")
                        ->get()->toArray();
        //      好豆推荐,生活馆
        $all =Lift::select(Lift::$select)
                        ->join('life_images','goods_lifes.id','life_images.goodsId')
                        ->where('goods_lifes.store','>','0')
                        ->where('goods_lifes.up','1')
                        ->where('life_images.face','1')
                        ->get();
        return view("home.shop.shopIndex")->with('imgs',$imgs)
                                            ->with("gifts",$gifts)
                                            ->with("lifes",$lifes)
                                            ->with("cates",$cates)
                                            ->with("all",$all);
    }
}
