<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopLiftController extends Controller
{
    public function index()
    {
        return view("home.shop.shopLift");
    }
}
