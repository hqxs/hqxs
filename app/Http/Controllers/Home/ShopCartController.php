<?php

namespace App\Http\Controllers\Home;

use App\Models\Giftimgs;
use App\Models\Gifts;
use App\Models\goods_cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopCartController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put("id", "1");

        $cart = goods_cart::select(goods_cart::$select)
            ->join("goods_gifts", "goods_gifts.id", "goods_carts.gid")
            ->join("goods_images","goods_gifts.id","goods_images.goodsId")
            ->where("goods_gifts.store", ">", "0")
            ->where("goods_gifts.up", "1")
            ->where("goods_carts.uid", $request->session()->get("id"))
            ->get();
//        dd($cart);
        return view("home/shop/shopCart")->with("cart",$cart);
    }
}
