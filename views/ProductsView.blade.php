@extends("frontend.views.LayoutTrangTrong")
<!-- thay doi hien thi dsdsp o day -->
@section("danh-sach-san-pham")

<?php 
    $products = DB::table("products")->where("id","=",$category_id)->first();
 ?>
  <div class="list-product">
                <!-- start -->
                <div class="item">
                    <div class="product">
                        <div class="info-prod">
                            <div class="img-prod">
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
                            </div>
                            <h3>{{ $product->name}}</h3>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
                                <a href="../layouts/detai-product.html"><img src="../img/cherry.jpg" /></a>
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
@stop