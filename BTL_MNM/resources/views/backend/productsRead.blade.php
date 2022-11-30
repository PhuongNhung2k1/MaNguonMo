@extends("backend.home-admin")
@section("load-noi-dung")
  <!-- Primary table start -->


<style type="text/css">
	.text-center td,
	.text-center th {
		width: 400px;
		height: 50px;
		font-size: 15px;
	}
</style>
<!-- Progress Table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <div style="margin-bottom:5px;">
        <a href="{{ url('backend/products/create') }}" class="btn btn-primary">Add</a>
          </div>
            <h4 class="header-title">Progress Table</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Stock</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	   	<!-- lay ra danh sach tat ca cac thu muc va phai foreach thi no moi hien thi nha -->
                     @foreach($data as $rows)
                            <tr>
                                <th scope="row">{{$rows->id}}</th>
                               <td><img src="{{ asset('upload/products/'.$rows->photo)}}" width="60px" height="60px"></td>
                              <td align="left">{{$rows->name}}</td>
                                 <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                               <td><span class="status-p bg-success">complate</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{url('backend/products/update/'.$rows->id)}}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="{{url('backend/products/delete/'.$rows->id)}}" class="text-danger" onclick="return window.confirm('Are you sure?');"><i class="ti-trash"></i></a></li>

                                     
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection