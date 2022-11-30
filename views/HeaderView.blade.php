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
                    <li><a href="{{ url('login') }}"><i class="fas fa-right-to-bracket"></i></i>Login</a></li>
                    <li><a href="{{ url('register') }}"><i class="fas fa-user-plus"></i>Register</a></li>
                    <li><a href="#">
                            <i class="fa-solid fa-cart-plus"></i>Cart</a></li>
                </ul>
            </div>
        </div>
    </header>