<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('home/login');
    }

    public function login(Request $request)
    {
        $date = $request->all();
        $phone = $date['phone'];
        $pwd = $date['password'];
        $id = DB::table('users')->select('id')->where('phone',$phone)->get()->first()->id;
        session(['phone'=> $date['phone']]);
        session(['id'=> $id]);
        session(['password'=> $date['password']]);
        dd(session('id'));
    }
}
