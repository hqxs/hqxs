<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
   	public function list()
   	{	
   		$res = Order::all()->toArray();
   		
   		return view('admin.goods.order')->with('res',$res);
   	}

   	public function delete($id)
   	{
   		$order = Order::find($id)->delete();
         if ($order) {
            return "<script type='text/javascript'>alert('删除成功');location.href='/admin/order';</script>";
         }
   	}

}
