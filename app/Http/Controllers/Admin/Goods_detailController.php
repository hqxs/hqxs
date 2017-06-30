<?php

namespace App\Http\Controllers\Admin;

use App\Models\Goods_detail;
use App\Models\Goods_note;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Goods_detailController extends Controller
{
    public function list()
    {   $res = Goods_detail::all()->toArray();
        dump($res);
        $res2 = Goods_note::all()->toArray();
        dump($res2);

        return view('admin.goods.goodsdetail')->with('res',$res)
                                              ->with('res2',$res2);
    }
}
