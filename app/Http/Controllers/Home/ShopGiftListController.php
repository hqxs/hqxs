<?php

namespace App\Http\Controllers\Home;

use App\Models\Cates;
use App\Models\Describe;
use App\Models\Detail;
use App\Models\Gifts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopGiftListController extends Controller
{
    public function index($id)
    {
//        商品详情
        $list = Gifts::select(Gifts::$list)
                        ->join("goods_images","goods_images.goodsId","goods_gifts.id")
                        ->where("goods_gifts.id",$id)
                        ->where("goods_gifts.up",'1')
                        ->where("goods_images.face",'1')
                        ->where("goods_gifts.store",">","0")
                        ->get();
//        小图片
        $icon = Gifts::select(Gifts::$icon)
                        ->leftJoin("goods_images","goods_images.goodsId","goods_gifts.id")
                        ->where("goods_gifts.id",$id)
                        ->where("goods_images.face","2")
                        ->where("goods_gifts.store",">","0")
                        ->where("goods_gifts.up","1")
                        ->limit("3")
                        ->get()->toArray();
        $sold = Gifts::select(["goods_gifts.id","goods_gifts.name","goods_gifts.price","goods_images.icon","goods_gifts.sold"])
                        ->leftJoin("goods_images","goods_gifts.id","goods_images.goodsId")
                        ->where("goods_gifts.up","1")
                        ->where("goods_images.face","1")
                        ->where("goods_gifts.store",">","0")
                        ->orderBy("sold","desc")
                        ->limit("8")
                        ->get()->toArray();
//        dd($sold);
//        商品详情图片
        $det = Detail::select(Detail::$pic)
                        ->leftJoin("goods_gifts","goods_gifts.id","goods_details.gid")
                        ->where("goods_details.paramet","1")
                        ->orderBy("goods_details.id")
                        ->limit("4","desc")
                        ->get();
//        产品参数图片
        $detail = Detail::select(Detail::$pic)
                        ->leftJoin("goods_gifts","goods_gifts.id","goods_details.gid")
                        ->where("goods_details.paramet","2")
                        ->orderBy("goods_details.id")
                        ->get();
//        礼品描述
        $desc = Describe::select(["describe"])
                        ->LeftJoin("goods_gifts","goods_describes.gid","goods_gifts.id")
                        ->where("goods_gifts.up","1")
                        ->where("goods_gifts.store",">","0")
                        ->where("goods_describes.show","1")
                        ->orderBy("goods_describes.id")
                        ->get();
//        dd($desc);
        return view("home/shop/shopList")
                        ->with("icon",$icon)
                        ->with("sold",$sold)
                        ->with("det",$det)
                        ->with("desc",$desc)
                        ->with("detail",$detail)
                        ->with("list",$list);
    }
}
