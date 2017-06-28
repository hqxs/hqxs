<?php

namespace App\Http\Controllers\Home;

use App\Models\Cates;
use App\Models\Gifts;
use App\Models\View;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopGiftController extends Controller
{

    public function Index()
    {
//        小轮播图
        $pic = View::select(View::$select)
                    ->where("cate","2")
                    ->where("face","1")
                    ->get();
//        分类
        $cateLi = Cates::select()
                                ->where("display","1")
                                ->where("path","like","0.1.%")
                                ->orderBy("pid")
                                ->get()->toArray();
//        热门商品
        $hot = Gifts::select(Gifts::$select)
                                ->leftJoin("goods_images","goods_gifts.id","goods_images.goodsId")
                                ->where("goods_gifts.store",">","0")
                                ->where("goods_gifts.up","1")
                                ->where("goods_gifts.hot","1")
                                ->where("goods_images.face","1")
                                ->orderBy("id","desc")
                                ->get();
//        新品
        $new = Gifts::select(Gifts::$select)
                                ->leftJoin("goods_images","goods_gifts.id","goods_images.goodsId")
                                ->where("goods_gifts.store",">","0")
                                ->where("goods_gifts.up","1")
                                ->where("goods_gifts.hot","1")
                                ->where("goods_images.face","1")
                                ->orderBy("addtime","desc")
                                ->get();
//        购买排行榜
        $buy = Gifts::select(Gifts::$select)
                                ->leftJoin("goods_images","goods_gifts.id","goods_images.goodsId")
                                ->where("goods_gifts.store",">","0")
                                ->where("goods_gifts.up","1")
                                ->where("goods_gifts.hot","1")
                                ->where("goods_images.face","1")
                                ->orderBy("sold","desc")
                                ->limit("5")
                                ->get();
//        dd($buy);
//        投票
        $vote = Vote::select(Vote::$select)
                                ->where("up","1")
                                ->orderBy("count","desc")
                                ->get();
        return view("home.shop.shopGifts")
                    ->with("pic",$pic)
                    ->with("hot",$hot)
                    ->with("new",$new)
                    ->with("buy",$buy)
                    ->with("cate",$cateLi)
                    ->with("vote",$vote);
    }

    public function Up(Request $request)
    {

//        echo $request->count;
        $fir = Vote::select(["count"])
                    ->where("id","$request->id")
                    ->first();
                    if ($fir)
                    {
                        $count = $fir->count;
                        $count++;
                        $vote = Vote::where("id",$request->id)
                                            ->update(["count"=>$count]);
                        return ("投票成功");
                    }else{
                        return ("投票失败,请刷新侯重试");
                    }
//        $vote = Vote::update(["count"=>"$request->"])
//                    ->where("id","$_GET['id']")
//                    ->get();
;
    }


}
