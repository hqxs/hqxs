<?php

namespace App\Http\Controllers\Admin;
use App\Models\Addr;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddrController extends Controller
{
    public function list()
    {	
    	$res = Addr::all()->toArray();
    	return view('admin.goods.addr')->with('res',$res);
    }

    public function edit($id)
    {	
    	$res = Addr::find($id)->toArray();
        var_dump($res);
    	return view('admin.goods.addredit')->with('res',$res);

    }

    public function addredit(Request $request)
    {   
        $res = $request->all();
        Addr::where('id',$res['id'])
               ->update([
                    'receiver' => $res['receiver'],
                    'phone' => $res['phone'],
                    'address' => $res['address']
                    ]);
        return "<script type='text/javascript'>location.href='/admin/addr';</script>";
    }
}
