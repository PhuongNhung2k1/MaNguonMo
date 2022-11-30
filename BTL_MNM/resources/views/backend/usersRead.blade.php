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

 <div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Danh sách users </h4>
            <div style="margin-bottom:5px;">
        <a href="{{ url('backend/categories/create') }}" class="btn btn-primary">Add</a>
          </div>
            <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Edit | Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	<!-- lay ra danh sach tat ca cac thu muc va phai foreach thi no moi hien thi nha -->
                    @foreach($data as $rows)
                        <tr>
                        	<td>{{$rows->id}}</td>
                            <td align="left">{{$rows->name}}</td>
                            <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{url('backend/categories/update/'.$rows->id)}}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="{{url('backend/categories/delete/'.$rows->id)}}" class="text-danger" onclick="return window.confirm('Are you sure?');"><i class="ti-trash"></i></a></li>
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
@endsection