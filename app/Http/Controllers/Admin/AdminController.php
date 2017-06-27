<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function loginForm()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {

        if (Auth::guard('admin')->attempt(['name' => $request->name, 'pwd' => $request->pwd]))  {
            return '登录成功';
        } else {
            return '登录失败';
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }


}
