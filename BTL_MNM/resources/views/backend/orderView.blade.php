@extends("backend.home-admin")
@section("load-noi-dung")
<div class="col-md-12">
 	<div class="panel panel-primary">
 		<div class="panel-heading">List orders</div>
 		<div class="panel-body">
 			<table class="table table-hover table-borderd">
 				<tr>
 					<th>ID</th>
 					<th>Date</th>
 					<th>Giá</th>
 					<th style="width: 150px;">Status</th>
 					<th style="width:150px;"></th>
 				</tr>
 				@foreach($data as $rows)
 					@foreach($customers as $customer)
 				<tr>
 					
 					<td>{{$rows->customer_id}}</td>
 					<td>{{$customer->email}}</td>
 					<td>{{$rows->date}}</td>
 					<td>{{$rows->price}}</td>
 					<td style="width: 300px;">
 						
 							<div>Đã giao hàng</div>
 					
 							<div>Chưa giao hàng</div>
 					
 					</td>
 					<td style="text-align:center;width: 400px;">
 						
 							<a href="#" class="label label-info">Giao hàng</a>
 							&nbsp;&nbsp;
 						
 						<a href="{{ url('admin/orders/detail/'.$rows->id) }}" class="label label-success">Chi tiết</a>
 					</td>
 				</tr>
 				@endforeach
 				@endforeach
 			<style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
            </ul>
 		</div>
 	</div>
 </div>
 @endsection