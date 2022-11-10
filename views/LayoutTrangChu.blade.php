
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
   <!-- header -->
  <header>
        <div class="top-header">
            <div class="logo-header">
                <img src="{{ asset('img/icon-logo.jpg') }}" alt="">
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
                    <li><a href="{{ url('cart') }}">
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
                    <?php 
                        $categories = DB::table("categories")->where("parent_id","= 0")->get();
                     ?>
                     @foreach($categories as $rows)
                    <li><a style="float: left;" href="{{ url('customer/categories/'.$rows->id)}}">{{ $rows->name}}</a></li>
                   
                    @endforeach
                </ul>
            </li>
             <li><a href="{{ url('news')}}">Tin tức</a></li>
             <li><a href="{{ url('contact')}}">Liên Hệ </a></li>
             <li><a href="{{ url('introduce')}}">Introduce </a></li>
           
        </ul>
    </section>
       <section class="slider-header">
         <div class="slide-wrapper">
                <div class="slide"><img src="{{ asset('img/banner2.jpg') }}"/>
        </div>  
                <div class="slide"><img src="{{ asset('img/banner4.jpg') }}"/>
        </div> 
        <div class="slide"><img src="{{ asset('img/banner5.jpg') }}"/>
        </div>
        </section>
    <!-- start main  -->
           <!--   <?php 
                $hotProducts = DB::select("select * from products where hot = 1 order by id desc limit 0,8");
             ?> -->
   @yield("load-noi-dung")
    <section class="list-method">
        <div class="methods">
            <div class="method method1">
                <img src="../img/giaohang2.png" style="color:oranger;" alt="">
              <div> 
                <h3>Giao hàng</h3>
                <p>Giao hàng nhanh tiện lợi.Miễn phí giao hàng trong nội thành Hà Nội</p>
            </div>
            </div>
            <div class="method method2">
               
                <img src="../img/quatang2.jpg" style="color:oranger;" alt="">
                <div> <h3>Qùa tặng</h3>
                <p>Giao hàng nhanh tiện lợi</p></div>
            </div>
            <div class="method method3">
                
                <img src="../img/thanhtoan3.jpg" style="color:oranger;" alt="">
                <div> <h3>Khuyến mại</h3>
                <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p></div>
            </div>
            <div class="method method4">
                
                <img src="../img/doitra.png" style="color:oranger;" alt="">
                <div><h3>Đổi trả</h3>
                <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p></div>
            </div>
        </div>
    </section>
    <!-- End main  -->
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
                <li >
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
                <span><a href=""><img src="{{ asset('img/contact4.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/contact2.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/contact4.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/visa.png') }}"></a></span>
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
</body>

</html>