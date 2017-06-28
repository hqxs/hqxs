<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //显示主页视图
    public function index()
    {
        return view('admin/index');
    }

    //显示登录表单
    public function loginForm()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
//        Admin::create(['nmae'=>'admin','password'=>Hash::make('123456')]);
//        return  '后台登录';
        if (Auth::guard('admin')->attempt(['name']=>$request->name,'password'=>$request->password))
        {
            return '登录成功';
        } else {
            return '登录失败';
    }
    }

}
