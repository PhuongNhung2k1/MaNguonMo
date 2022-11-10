@extends("frontend.views.LayoutCart")
<!-- form login o day  -->
@section("load-noi-dung")<!-- thay doi hien thi dsdsp o day -->
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
                <div class="cate--ByColor">
                    <h3>Contact us</h3>
                    <ul>
                        <li>
                            <input id="cateID_1" type="checkbox" name="category" />
                            <label for="cateID_1">Hot line : 0283270273</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="cate_product">
            <div class="cate_Byresult-search">
                <ul>
                    <h3 style="text-align:center;padding: 10px 0;color: red;">Your Cart</h3>
                </ul>
            </div>
            <form action="">
            <div class="product-shoppingCart">
                <table border="1" cellspacing="0" cellpadding="0" style="border:1px solid #ccc ; text-align:center;">
                    <tr style="height:60px ;">
                        <th></th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <tr>
                        <td><img src="../img/thanhlong.jpg" height="100px"></td>
                        <td>Thanh long ruột đỏ</td>
                        <td><input type="number" value="1" style="height:40px;width:100px;"></td>
                        <td>100000</td>
                        <td>10000</td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td><img src="../img/thanhlong.jpg" height="100px"></td>
                        <td>Thanh long ruột đỏ</td>
                        <td><input type="number" value="1" style="height:40px;width:100px;"></td>

                        <td>10000</td>
                        <td>100000</td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td><img src="../img/thanhlong.jpg" height="100px"></td>
                        <td>Thanh long ruột đỏ</td>
                        <td><input type="number" value="1" style="height:40px;width:100px;"></td>

                        <td>10000</td>
                        <td>100000</td>
                        <td><i class="fa-regular fa-trash-can"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="">Xóa toàn bộ</a></td>
                        <td colspan="2"><a href="{{ url('home')}}">Tiếp tục mua hàng</a></td>
                        <td colspan="2"><a href="">Cập nhật</a></td>
                    </tr>
                
                </table>
 			</form>
                <div class="total-pay" style="height: 60px;float: right;margin-right: 100px;">
                    <h3 style="line-height: 60px;">Tổng tiền thanh toán: <span>Tongtienđ </span>
                     
                     <a href="index.php?controller=cart&action=checkout" style="height: 80px;margin-bottom: 100px;background-color:#f78f3a;color: #fff;border-radius: 8px;border: none;padding: 10px 40px;cursor:pointer;">Thanh toán</a></h3>
                 </div>
                </div>
        </div>
    </main><hr>
    @stop