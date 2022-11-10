@extends("frontend.views.LayoutTrangTrong")
<!-- form login o day  -->
@section("load-noi-dung")
<section class="container register-page">
        <div class="form-register">
           
                <fieldset>
                <legend>
                    <h2>Thông tin đăng nhập </h2>
                </legend>
                 @if(Request::get("notify") == "invalid")
                        <div class="alert alert-warning">Please check email and password!</div>
                        @endif
                <form method="post" action="">
                   @csrf
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder=" Input email" required />
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder=" Input password" required/>
                </div>
                <div class="btn btn-register">
                    <input type="submit" value="Login" class="input-control"></input>
                    <input type="reset" class="input-control" value="Reset"></input>
                </div> </form>
            </fieldset>
          
        </div>
        <div class="note-register">
            <h3>Khách hàng chưa có tài khỏan</h3>
            <hr>
            <p>Trở thành thành viên của FRESHFRUIT, là bạn đã gia nhập vào dòng vận động liên tục của mobile marketing. Trong
                môi trường năng động như vậy, có một người đồng hành cùng bạn tiến lên phía trước là điều tất yếu. Chúng
                tôi chính là người đồng hành đó của bạn. Chúng tôi đã phát triển hàng loạt các chương trình, dữ liệu, và
                hoạt động để chắc chắn rằng thành viên của chúng tôi được hưởng nhiều quyền lợi nhất, doanh nghiệp của
                họ phát triển bền vững nhất, và chương trình mobile marketing của họ luôn thành công. Sau đây là một số
                điểm nhấn mà chúng tôi khuyến khích các bạn nên tham khảo.</p>
            <a href="{{ url('register') }}" style="color:#000;">Đăng ký</a>
        </div><hr>
    </section>
@stop