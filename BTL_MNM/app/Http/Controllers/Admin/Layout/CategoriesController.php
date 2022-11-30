<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use View;
// model

use App\Models\Categories;
class CategoriesController extends Controller
{
    //
   public $model;
    public function __construct(){
        //gan bien $model tro thanh bien object cua class products
        $this->model = new Categories();//khi do tu bien model co the truy cap duoc vao cac ham, bien cua class products tu day
    }

    public function read(){
        $data = Categories::orderBy("id","desc")->paginate(5);
        return View::make("backend.CategoriesRead",["data"=>$data]);
    }

    public function update($id){
        $record = Categories::where("id","=",$id)->first();
        return view("backend.CategoriesCreateUpdate",["record"=>$record]);
    }

    public function updatePost($id){
        $name = request("name");
        $parent_id = request("parent_id");

        Categories::where("id","=",$id)->update(["name"=>$name,"parent_id"=>$parent_id]);

        return redirect(url('backend/categories'));

    }

    public function create(){
        return view("backend.CategoriesCreateUpdate");
    }
    //create - POST
    public function createPost(){
        $name = request("name");
        $parent_id = request("parent_id");
        Categories::insert(["name"=>$name,"parent_id"=>$parent_id]);
        //di chuyen den mot url khac
        return redirect(url('backend/categories'));
    }
    //delete
    public function delete($id){
        //lay mot ban ghi
        Categories::where("id","=",$id)->delete();
        //di chuyen den mo url khac
        return redirect(url("backend/categories"));
    }

    //   public function read(){
    //     $data = $this->model->modelRead();
    //     return view("backend.categoriesRead",["data"=>$data]);
    // }

    // //update
    // public function update($id){
    //     //lay du lieu tu model
    //     $record = $this->model->modelGetRecord($id);
    //     return view("backend.CategoriesCreateUpdate",["record"=>$record]);
    // }
    // //update POST
    // public function updatePost($id){
    //     $this->model->modelUpdate($id);
    //     return redirect(url('backend/categories'));

    // }
    // //create
    // public function create(){
    //     return view("backend.categoriesCreateUpdate");
    // }
    // //create post
    // public function createPost(){
    //     $this->model->modelCreate();
    //     return redirect(url('backend/categories'));
    // }
    // //delete
    // public function delete($id){
    //     $this->model->modelDelete($id);
    //     return redirect(url('backend/categories'));
    // }


}
