<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopGiftAllController extends Controller
{
   public function index()
   {
       return view("home/shop/shopAll");
   }
}
