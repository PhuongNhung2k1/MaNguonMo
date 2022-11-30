@extends("frontend.homepage.layout-trang-trong")
<!-- Name: {{$detailProd->name}}
Content: {{$detailProd->content}}
Description: {{$detailProd->description}} -->
@section("load-du-lieu")
  <!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('upload/products/'.$detailProd->photo) }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1" style="font-size: 15px;">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder">{{$detailProd->name}}</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through" style="text-decoration: line-through;color: red;margin-right:20px;font-size: 19px;">Gía bán : {{ number_format($detailProd->price)}}    </span>
                    <span>{{ number_format($detailProd->price - $detailProd->discount) }}</span>
                </div>
               <div class="fs-5 mb-5">{{$detailProd->content}}</div> 
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>

                   <a href="{{ url('customer/cart/'.$detailProd->id)}}" >Add to cart</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection
 @section("title")
    <h5>Detail Products</h3>
@endsection