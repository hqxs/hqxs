<?php

namespace App\Http\Controllers\Admin;

use App\Goods_gift;
use App\Models\Gift_image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    //显示商品列表
    public function list()
    {   //获取数据
        $goods = DB::table('goods_gifts')->orderBy('id')->get()->toArray();
        //加载视图文件
        return view('admin.goods.list')->with('goods', $goods);
    }

    public function edit($id)
    {
        $goods = DB::table('goods_gifts')->where('id',$id)->get()->toArray();
        return view('admin.goods.edit')->with('goods',$goods);
    }

    public function update(Request $request,$id)
    {
        echo $id;
        $data = $request->all();
        var_dump($data);
        $goods = Goods_gift::find($id);
        $goods->name = $data['name'];
        $goods->price = $data['price'];
        $goods->desc = $data['desc'];
        $goods->isReserve = $data['isReserve'];
        $goods->save();

    }

    public function image()
    {   //orderBy为什么不存在
        $result = Gift_image::all()->toArray();
        return view('admin.goods.image')->with('result',$result);
    }

    public function imgedit($id)
    {
        $result = Gift_image::where('goodsId',$id)->get()->toArray();
        return view('admin.goods.imgedit')->with('result',$result);
    }


    public function upload(Request $request,$id)
    {
//        dump($request->file('img'));
//        dump($request->all());
//        dump($request->img);
//        $info = $upload->store('uploads);
        if ($request->hasFile('img') && $request->file('img')->isValid())
        {
            $upload = $request->img;
            $info = $upload->move('uploads');

            Gift_image::where('id',$id)
                            ->update([
                            'icon' => $info
                            ]);
            return back();
        }

        //上传失败删除图片
    }
}
