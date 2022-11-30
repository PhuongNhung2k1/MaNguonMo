<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    //

    public function viewcart($id){
        // return view("frontend.homepage.shopping-cart");
        $products = DB::table("products")->where("id","=",$id)->get();
        $info = DB::table("customers")->where("id","=",$id)->get();
        return view("frontend.homepage.cart",["products"=>$products,"info"=>$info]);
    }

    public function orders(){
        
        return view("frontend.homepage.order");
    }
  
}
