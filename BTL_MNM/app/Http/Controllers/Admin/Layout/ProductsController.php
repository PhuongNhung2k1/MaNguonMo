<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products;


class ProductsController extends Controller
{
   //  //
   public $model;
   // public function __construct(){
   //  $this->model = new Products();

   // }
   //  public function read(){
   //      $data =  $this->model->modelRead();
   //      return view("backend.productsRead",["data"=>$data]);
   //  }

   //  public function fillByCate($catID){
   //      $listprod = $this->model->modelGetProductByCate($catID);
   //      return view("frontend.HomePage.productsByCate");
   //  }


    //ham tao
    public function __construct(){
        //gan bien $model tro thanh bien object cua class products
        $this->model = new Products();//khi do tu bien model co the truy cap duoc vao cac ham, bien cua class products tu day
    }
    //lay danh sach cac ban ghi
    public function read(){
        //lay du lieu tu ham modelRead0 cua class products
        $data = $this->model->modelRead();
        //goi view, truyen du lieu ra view
        return view("backend.productsRead",["data"=>$data]);
    }
    //update
    public function update($id){
        //lay du lieu tu model
        $record = $this->model->modelGetRecord($id);
        return view("backend.productsCreateUpdate",["record"=>$record]);
    }
    //update POST
    public function updatePost($id){
        $this->model->modelUpdate($id);
        return redirect(url('backend/products'));
    }
    //create
    public function create(){
        return view("backend.productsCreateUpdate");
    }
    //create post
    public function createPost(){
        $this->model->modelCreate();
        return redirect(url('backend/products'));
    }
    //delete
    public function delete($id){
        $this->model->modelDelete($id);
        return redirect(url('backend/products'));
    }
}
