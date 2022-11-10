@extends("frontend.views.LayoutTrangChu")
<!-- load header -->
<!-- add main -->
<!-- Thay doi hien thi trong pham trang chu o day  -->
@section("load-noi-dung")
 <main class="container products">
        <!-- start session -->
        <h2>Trái cây nội địa</h2>
        <hr>
        <?php 
                // $hotProducts = DB::select("select * from products where hot = 1 order by id desc limit 0,8");
                $hotProducts = DB::table("products")->where("hot","=",1)->get();
             ?>
        <div class="list-product">
         
             @foreach($hotProducts as $rows)
           <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="{{ $rows->photo }}" />
                        </div>
                       <h3>{{ $rows->name}}</h3>
                        <div class="des-prod"><a href="{{ url('products/detail/'.$rows->id) }}">
                         {{ $rows->description}}</a>
                        </div>
                        <div class="rate-prod">
                           <ul>
                               <li><a href="{{ url(
                                'products&action=rating&productId=<?php echo $rows->id; ?>&star=1') }}"><img src="{{ asset('img/star.jpg') }}"></a></li>
                                <li><a href="{{ url(
                                'products&action=rating&productId=<?php echo $rows->id; ?>&star=1') }}"><img src="{{ asset('img/star.jpg') }}"></a></li>
                                <li><a href="{{ url(
                                'products&action=rating&productId=<?php echo $rows->id; ?>&star=1') }}"><img src="{{ asset('img/star.jpg') }}"></a></li>
                                <li><a href="{{ url(
                                'products&action=rating&productId=<?php echo $rows->id; ?>&star=1') }}"><img src="{{ asset('img/star.jpg') }}"></a></li>


                           </ul>
                        </div>
                        <div class="price-prod">
                            <span>{{ number_format($rows->price) }}</span><span>{{ number_format($rows->price-($rows->price*$rows->discount/100)) }}</span>
                        </div>
                        
                    </div>
                    <form>
                        <div class="add-cart">
                            <a href="{{ url('cart')}}" class="button">Add cart</a>
                        <a>Mua ngay</a>
                         </div>    
                    <form>
                </div>
            </div>
            @endforeach
            <!-- end  -->
            
        </div>
         <!-- end session -->
         <section class="middle-banner">
            <img src="{{ asset('img/middle-banner2.jpg') }}" height="150px" width="100%" alt="">
         </section>
        <!-- start session -->
        <h2>Trái cây nhập khẩu</h2>
        <hr>
        <div class="list-product">
            <!-- start -->
            <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
             <!-- start -->
             <div class="item">
                <div class="product">
                    <div class="info-prod">
                        <div class="img-prod">
                            <img src="../img/tao-detail1.JPG" />
                        </div>
                       <h3>Name</h3>
                        <div class="des-prod">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis amet, minima fugiat dicta
                            esse
                            
                        </div>
                        <div class="rate-prod">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star-half"></i></i></span>
                        </div>
                        <div class="price-prod">
                            <span>200.000 VNĐ</span><span>200.000 VNĐ</span>
                        </div>
                        
                    </div>
                    <div class="add-cart">
                        <button><i class="fas fa-cart-plus"></i></button>
                        <button>Mua ngay</i></span>
                    </div>
                </div>
            </div>
            <!-- end  -->
        </div>
         <!-- end session -->
    </main>
@endsection