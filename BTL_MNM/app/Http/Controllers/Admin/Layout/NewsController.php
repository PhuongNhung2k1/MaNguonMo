<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use DB;
class NewsController extends Controller
{
    //

   public $model;
    //ham tao
    public function __construct(){
        //gan bien $model tro thanh bien object cua class News
        $this->model = new News();//khi do tu bien model co the truy cap duoc vao cac ham, bien cua class News tu day
    }
    //lay danh sach cac ban ghi
    public function read(){
        //lay du lieu tu ham modelRead0 cua class news
        $data = $this->model->modelRead();
        //goi view, truyen du lieu ra view
        return view("backend.NewsRead",["data"=>$data]);
    }
    //update
    public function update($id){
        //lay du lieu tu model
        $record = $this->model->modelGetRecord($id);
        return view("backend.NewsCreateUpdate",["record"=>$record]);
    }
    //update POST
    public function updatePost($id){
        $this->model->modelUpdate($id);
        return redirect(url('backend/news'));
    }


    //create
    public function create(){
        return view("backend.newsCreateUpdate");
    }
    //create post
    public function createPost(){
        $this->model->modelCreate();
        return redirect(url('backend/news'));
    }
    //delete
    public function delete($id){
        $this->model->modelDelete($id);
        return redirect(url('backend/news'));
    }
}
