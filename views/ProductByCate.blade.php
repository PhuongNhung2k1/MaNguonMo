@extends("frontend.views.LayoutTrangTrong")
@section("load-noi-dung")
<body>
      
   <!-- lay ra chi tiet san pham theo id -->
    <section class="container detai_prod_title">
        <h2 class="detai_prod_title">
        
        </h2>
        <div class="container detail_poduct">
            <div class="img_product">
                <!-- // lay ct sp -->
                <div class="img_prod_main" width="30%">
                    <img src="../assets/upload/products/" >
                </div>
            </div>
            <div class="info_product">

                <div>
                    <div class="info_prod_name">
                    <h2 class="info_prod_name">{{ $rows->name}}</h2>
                </div>
                <div class="info_prod_intro">
                    <p>desc</p>
                    <p>Hoa lên tiếng cho sự thinh lặng, hoa là sứ giả cho tình yêu và sự khát khao. Hãy để Điện Hoa
                        Thủ
                        Đô thay bạn gửi tới những người bạn yêu thương nhé!</p>
                </div>
                <div class="button_adds"><span>Số lượng :</span>
                    <input type="button" class="minus is-form" value="-">
                    <input aria-label="quantity" type="number" class="input-qty" max="100" min="0" name="" value="1">
                    <input type="button" class="plus is-form" value="+">
                </div>
                <div class="info_product_price">
                   <span style="margin-right:40px;color: red;text-decoration: line-through;"> 55dVNĐ</span><span style="font-weight: bold";>  dsdsdsdđ</span>
                </div>
                <div class="info_product_rating" style="width:300px">
                  <!--   <ul>
                        <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote1" alt=""></a></li>
                        <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote2" alt=""></a></li>
                        <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote3" alt=""></a></li>
                        <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote4" alt=""></a></li>
                        <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote5" alt=""></a></li>
                    </ul> -->
                     <!-- rating -->
                  <div style="border:1px solid #dddddd; margin-top: 15px;">
                    <h4 style="padding-left: 10px;">Rating</h4>
                  sao
                    <br>
                  </div>
      <!-- /rating -->
                </div>
                 <div class="info_product_descrip">
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At rerum alias optio beatae accusantium,
                        recusandae consequatur, temporibus tenetur provident amet facere. Culpa ab facilis fugiat
                        distinctio dolores ad molestiae quia.</p> -->
                          <form>
                    <div class="btn btn_cart">
                    
                         <a href="index.php?controller=cart">Add cart</a> 
                         <a href="#">Mua ngay</a>   </form>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container similar-prod products">
            <h2>Similar products</h2>
            <div class="list-product">
                 <!-- start -->
                <div class="item">
                    <div class="product">
                        <a href="index.php?controller=products&action=detail&productId=2">
                        <div class="info-prod">
                            <div class="img-prod">
                               <img src="../assets/upload/products/" />
                            </div>
                            <h3>Nmae</h3>
                            <div class="des-prod">
                               descript
                            </div>
                            <div class="rate-prod info_product_rating">
                              <ul>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote1" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote2" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote3" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote4" alt=""></a></li>
                                    <li><a href="#"><img src="../assets/frontend/layout/img/star.jpg" name="vote5" alt=""></a></li>
                             </ul>
                            </div>

                            <div class="price-prod">
                                <span>sdsdsđ</span><span>
                                    666đ
                                </span>
                            </div>
                            </a>
                        </div>
                        <div class="add-cart">
                            <button><i class="fas fa-cart-plus"></i></button>
                            <button>Mua ngay</i></span>
                        </div>
                    </div>
                </div>
                <!-- end  -->
            </div>
        </div>
    </section>

    @endsection