<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
class OrdersController extends Controller
{
    //

    public function read(){
        $customers = DB::table("customers")->take(3)->orderBy('id','desc')->get();
        $data = DB::table("orders")->orderBy('date','desc')->take(10)->get();
        return view("backend.orderView",["data"=>$data,"customers"=>$customers]);
    }

    public function getDetail($id){
      
        $order = DB::table("orders")->where("id","=",$id)->get();
        return view("backend.orderDetailView",["order"=>$order]);

    }

}
