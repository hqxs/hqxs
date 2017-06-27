<?php

namespace App\Http\Controllers\Home;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('home.register');
    }

    public function doRegister(Request $request)
    {
        //验证的数据

        //将数据添加到数据库中
        User::create($request->all());
        //注册成功跳转到登录页
        //return redirect('login');
    }

    //用户登录
    public function loginForm()
    {
        return view('home.login');
    }

    public function doLogin(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'pwd' => $request->pwd])) {
            return redirect('/');
        } else {
            return back();
        }
    }
}

