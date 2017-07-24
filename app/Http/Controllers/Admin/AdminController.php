<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //显示登录表单
    public function loginForm()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        if(Auth::guard('admin')->attempt(['name' => $request->name,'password' => $request->password]))
        {
            return view('admin.index');
        }else{
            session(['num'=> 1]);
            return back();
        }
    }
}
