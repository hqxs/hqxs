<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //显示注册表单
    public function registerForm()
    {
       return view('home.register');
    }
    public function doRegister(Request $request)
    {
        //验证数据
        //将数据添加到数据库
        User::create($request->all());

        return redirect('login');
    }

    public function loginForm()
    {
        return view('home.login');
    }

    public function doLogin(Request $request)
    {
        //数据的获取和验证
        //判断用户名是否正确
        //判断密码是否正确
        //用户认证组件
        if (Auth::attempt(['name'=>$request->name,'password'=>$request->password]))
        {
            return redirect('/');
        } else {
            return back();
        }
    }
}
