<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome-free-6.2.0-web/css/all.css') }}">
    <title>Home main</title>
</head>

<body>

	<header>
        <div class="top-header">
            <div class="logo-header">
                <img src="../img/icon-logo.jpg" alt="">
            </div>
            <div class="search">
                <input type="text" name="search" width="200px">
                <label for="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
            <div class="right-header">
                <ul>
                    <li><a href="{{ url('customer/login') }}"><i class="fas fa-right-to-bracket"></i></i>Login</a></li>
                    <li><a href="{{ url('customer/register') }}"><i class="fas fa-user-plus"></i>Register</a></li>
                    <li><a href="#">
                            <i class="fa-solid fa-cart-plus"></i>Cart</a></li>
                </ul>
            </div>
        </div>
    </header>
      <section class="container menu-header">
        <ul class="header-menu">
           <li style="color:red;display: inline-block;"><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('category') }}">Category</a>
                <ul class="header-subMenu">
                    <li><a href="#">Nho</a></li>
                    <li><a href="#">Xoài </a>
                    </li>
                    <li><a href="#">Sub menu1 </a></li>
                </ul>
            </li>
            <li><a href="#">Thanh long</a></li>
            <li><a href="#">Sầu riêng</a></li>
            <li><a href="#">Táo</a></li>
            <li><a href="#">More</a></li>
        </ul>
    </section>
    <!-- @yield("header") -->

    <!-- thêm class products bên main-home để css  -->
    <main class="container category_prod products">
        <div class="cate_filter">
            <div class="list_category">
                <div class="cate--ByProduct">
                    <h3>Product by category</h3>
                    <select name="" id="">
                        <option value="nameDesc">Tên giảm dần</option>
                        <option value="nameDesc">Tên giảm dần</option>
                        <option value="nameDesc">Tên giảm dần</option>
                        <option value="nameDesc">Tên giảm dần</option>
                        <option value="nameDesc">Tên giảm dần</option>
                    </select>
                </div>
                
                <div class="cate--Price">
                    <h3>Product by Price</h3>
                    <select name="" id="">
                        <option value="priceAsc">100 - 2000 VND</option>
                        <option value="priceAsc">200 - 2000 VND</option>
                        <option value="priceAsc">300 - 2000 VND</option>
                        <option value="priceAsc">400 - 2000 VND</option>
                        <option value="priceAsc">500 - 2000 VND</option>
                    </select>
                    
                </div>
                <div class="search-byprice" >
                    <div><h3>Search Price</h3>
                        <ul>
                            <li><a href="#"><span>Gía từ</span>  <input type="number" min="0"></a></li>
                            <li><a href="#"><span>Gía đến </span><input type="number"></a></li>
                        </ul>
                       <input type="button" name="" id="" value="Tìm kiếm"></div>
                </div>
                <div class="cate--ByColor">
                    <h3>Product by Color</h3>
                    <ul>
                        <li>
                            <input id="cateID_1" type="checkbox" name="category" />
                            <label for="cateID_1">Red</label>
                        </li>
                        <li>
                            <input id="cateID_2" type="checkbox" name="category" />
                            <label for="cateID_2">Green</label>
                        </li>
                        <li>
                            <input id="cateID_3" type="checkbox" name="category" />
                            <label for="cateID_3">White</label>
                        </li>
                        <li>
                            <input id="cateID_4" type="checkbox" name="category" />
                            <label for="cateID_4">Yellow</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="cate_product">
           <!--  <div class="cate_Byresult-search">
                <ul>
                    <li><a href="">Mới nhất</a></li>
                    <li><a href="">Liên quan</a></li>
                    <li><a href="">Bán chạy nhất</a></li>
                    <li><a href="">Sale</a></li>
                </ul>
            </div> -->
          <!-- hthi ds san pham  -->
          @yield("load-noi-dung")
        </div>
    </main>
    <section class="hot-news">
        <h2>Hot news</h2><br>
       <div class="hot-new-left">
        
        <!-- start news -->
        <div class="news-item">
            <a href="#">
                <div class="news-img">
                    <img src="../img/nho-den.JPG" height="120px" />
                </div>
                <div class="news-info">
                    <h3>Nho đen Mỹ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aspernatur, eligendi, voluptatem blanditiis
                        asperiores veritatis saepe repudiandae ratione ipsam dolorum voluptatibus velit inventore? Deleniti esse
                        ad ipsa eveniet accusamus mollitia.</p>
                </div>
            </a><hr>
        </div> 
        <!-- end news -->
        <!-- start news -->
        <div class="news-item">
            <a href="#">
                <div class="news-img">
                    <img src="../img/nho-den.JPG" height="120px" />
                </div>
                <div class="news-info">
                    <h3>Nho đen Mỹ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aspernatur, eligendi, voluptatem blanditiis
                        asperiores veritatis saepe repudiandae ratione ipsam dolorum voluptatibus velit inventore? Deleniti esse
                        ad ipsa eveniet accusamus mollitia.</p>
                </div>
            </a><hr>
        </div> 
        <!-- end news -->
       </div>
       <div class="hot-new-right">
       
        <!-- start news -->
        <div class="news-item">
            <a href="#">
                <div class="news-img">
                    <img src="../img/nho-den.JPG" height="120px" />
                </div>
                <div class="news-info">
                    <h3>Nho đen Mỹ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aspernatur, eligendi, voluptatem blanditiis
                        asperiores veritatis saepe repudiandae ratione ipsam dolorum voluptatibus velit inventore? Deleniti esse
                        ad ipsa eveniet accusamus mollitia.</p>
                </div>
            </a><hr>
        </div> 
        <!-- end news -->
        <!-- start news -->
        <div class="news-item">
            <a href="#">
                <div class="news-img">
                    <img src="../img/nho-den.JPG" height="120px" />
                </div>
                <div class="news-info">
                    <h3>Nho đen Mỹ</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aspernatur, eligendi, voluptatem blanditiis
                        asperiores veritatis saepe repudiandae ratione ipsam dolorum voluptatibus velit inventore? Deleniti esse
                        ad ipsa eveniet accusamus mollitia.</p>
                </div>
            </a><hr>
        </div> 
        <!-- end news -->
       </div>
    </section>
    <footer>
        <div class="contact">
            <h2>Liên Hệ</h2>
            <ol>
                <li><a href="#">Địa chỉ : 289 Minh khai, Q. Bắc Từ Liêm, Hà Nội</a></li>
                <li><a href="#">SĐT : 036715281289</a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i> https:/nhung/github.com</a></li>
                <li><a href="#">email : fruitFresh@gmail.com</a></li>
                <li><a href="#">website : htttp:/freshfriut.vn</a></li>
            </ol>
            <ul>
                <li>
                    <span><i class="fa-brands fa-square-twitter"></i></span>
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-youtube"></i></span>
                </li>
            </ul>
        </div>
        <div class="assistant">
            <h2>Chính Sách</h2>
            <ul>
                <li><a href="#">Chính sách bảo hành.</a></li>
                <li><a href="#">Chính sách đổi trả</a></li>
                <li><a href="#">Chính sách xử lý khiếu nại</a></li>
                <li><a href="#">Chính sách bảo mật thông tin</a></li>
                <li><a href="#">Chính sách thanh toán</a></li>
                <li><a href="#">Chính sách vận chuyển</a></li>
            </ul>
        </div>
        <div class="purchase">
            <h2>Thanh toán</h2>
            <ul>
                <span><a href=""><img src="../img/contact4.png"></a></span>
                <span><a href=""><img src="../img/contact2.png"></a></span>
                <span><a href=""><img src="../img/contact3.png"></a></span>
                <span><a href=""><img src="../img/visa.png"></a></span>
            </ul>
        </div>
        <div class="google-map">
            <h2>Vị trí</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.527322620672!2d105.73582430026107!3d21.05159088591729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454f79fd137b7%3A0x656d4311d5baa961!2zQ2jhu6MgTmd1ecOqbiBYw6EsIE1pbmggS2hhaSwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1663665841842!5m2!1svi!2s"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
    </section>

</html>