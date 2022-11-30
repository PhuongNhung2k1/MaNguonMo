<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB;
class HomeCustomController extends Controller
{
    //
    public function home(){
        //lay csdl
        
        $categories = DB::table("categories")->take(3)->get();
        $products = DB::table("products")->take(8)->get();
        return view("frontend.homepage.layout-trang-chu",["categories"=>$categories,"products"=>$products]);
    }
}
