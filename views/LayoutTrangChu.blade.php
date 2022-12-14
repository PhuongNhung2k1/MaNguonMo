
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
             <li><a href="{{ url('news')}}">Tin t???c</a></li>
             <li><a href="{{ url('contact')}}">Li??n H??? </a></li>
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
                <h3>Giao h??ng</h3>
                <p>Giao h??ng nhanh ti???n l???i.Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
            </div>
            </div>
            <div class="method method2">
               
                <img src="../img/quatang2.jpg" style="color:oranger;" alt="">
                <div> <h3>Q??a t???ng</h3>
                <p>Giao h??ng nhanh ti???n l???i</p></div>
            </div>
            <div class="method method3">
                
                <img src="../img/thanhtoan3.jpg" style="color:oranger;" alt="">
                <div> <h3>Khuy???n m???i</h3>
                <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p></div>
            </div>
            <div class="method method4">
                
                <img src="../img/doitra.png" style="color:oranger;" alt="">
                <div><h3>?????i tr???</h3>
                <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p></div>
            </div>
        </div>
    </section>
    <!-- End main  -->
    <footer>
        <div class="contact">
            <h2>Li??n H???</h2>
            <ol>
                <li><a href="#">?????a ch??? : 289 Minh khai, Q. B???c T??? Li??m, H?? N???i</a></li>
                <li><a href="#">S??T : 036715281289</a></li>
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
            <h2>Ch??nh S??ch</h2>
            <ul>
                <li><a href="#">Ch??nh s??ch b???o h??nh.</a></li>
                <li><a href="#">Ch??nh s??ch ?????i tr???</a></li>
                <li><a href="#">Ch??nh s??ch x??? l?? khi???u n???i</a></li>
                <li><a href="#">Ch??nh s??ch b???o m???t th??ng tin</a></li>
                <li><a href="#">Ch??nh s??ch thanh to??n</a></li>
                <li><a href="#">Ch??nh s??ch v???n chuy???n</a></li>
            </ul>
        </div>
        <div class="purchase">
            <h2>Thanh to??n</h2>
            <ul>
                <span><a href=""><img src="{{ asset('img/contact4.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/contact2.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/contact4.png') }}"></a></span>
                <span><a href=""><img src="{{ asset('img/visa.png') }}"></a></span>
            </ul>
        </div>
        <div class="google-map">
            <h2>V??? tr??</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.527322620672!2d105.73582430026107!3d21.05159088591729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454f79fd137b7%3A0x656d4311d5baa961!2zQ2jhu6MgTmd1ecOqbiBYw6EsIE1pbmggS2hhaSwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1663665841842!5m2!1svi!2s"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>

</html>