<?php

namespace App\Http\Controllers\Home;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    //登录
    public function login()
    {
        return view('home/login');
    }

    public function doLogin(Request $request)
    {
        $user = User::where('phone',$request->phone)->first();
        if(Hash::check($request->password,$user->password)){
            $date = $request->all();
            $phone = $date['phone'];
            $pwd = $date['password'];
            $id = DB::table('users')->select('id')->where('phone',$phone)->get()->first()->id;
            $name = DB::table('users')->select('name')->where('phone',$phone)->get()->first()->name;
            session(['phone'=> $date['phone']]);
            session(['id'=> $id]);
            session(['name'=> $name]);
            return redirect('group_index');
        }else{
            return redirect('login');
        }
    }

    public function outLogin(Request $request)
    {
        session()->flush();
        return redirect(URL::previous());
    }

    //注册
    public function register()
    {
        return view ('home.register');
    }

    public function doRegister(Request $request)
    {
        $sim = $request->all();
        $phone = $request->all()['phone'];
        $sim['name'] = $phone;
        $re = User::create($sim);
        if($re){
            return redirect('login');
        }else{
            return back();
        }

    }
}
