<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use View;
class UsersController extends Controller
{
    //
      public function read(){
        $data  = DB::table("users")->get();
        return view("backend.usersRead",["data"=>$data]);
    }

     public function delete($id){
         $data = DB::table("users")->where("id","=",$id)->get();
        return redirect(url('backend/users'));
    }

}
