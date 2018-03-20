@extends('client.layout.home') 
@section("content")
<section class="breacrumb">
    <div class="container">
        <div class="breacrumb-w">
            <a href="./" class="homebreadcrumb" title="Trang chủ">Trang chủ</a>
            <a href="./dat-hang-thanh-cong.html" title="Đặt hàng thành công">Đặt hàng thành công</a>
        </div>
    </div>
</section>
<section class="productscate">
    <div class="container">
        <div class="iconcheck">
            <span>
                <div>Cám ơn bạn đã đặt hàng</div>
                <div>Bộ phận kinh doanh của Vĩnh Phúc sẽ liên hệ để thông báo và vận chuyển sản phẩm đến tay bạn.</div>
                <div class="iconcheck_icon">Chúc bạn shopping vui vẻ!</div>
            </span>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-md-6 thankyou-infos-left">
                    <div class="order_back">
                        <div class="order_title">Địa chỉ giao hàng &amp; thanh toán</div>
                        <div class="order-summary">
                            <p>Họ và tên: s</p>
                            <p>Địa chỉ: ngoa long</p>
                            <p>Điện thoại: 0966810999</p>
                            <p>Email: ngoalong@gmail.com</p>
                            <p>Nội dung: ngoa long</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 thankyou-infos-left">
                    <div class="order_back">
                        <div class="order_title">Đơn hàng</div>
                        <div class="donhang_bottom">
                            <img class="pull-left product-image" src="products/OXY JAY 5.jpg">
                            <div class="product-info pull-left">
                                <span class="product-info-name">
                                    <strong>Máy tạo oxy 5 lít  JAY - 5AW</strong> x 1
                                </span>
                            </div>
                            <strong class="product-price pull-right">8.799.000 VNĐ</strong>

                        </div><div class="donhang_bottom">
                            <img class="pull-left product-image" src="products/OXY JAY 3.jpg">
                            <div class="product-info pull-left">
                                <span class="product-info-name">
                                    <strong>Máy tạo oxy 3 lít  JAY - 3AW</strong> x 1
                                </span>
                            </div>
                            <strong class="product-price pull-right">6.499.000 VNĐ</strong>

                        </div>
                        <div class="clear"></div>
                        <div class="total-line total-line-total">
                            <span class="total-line-name pull-left tongcongdh"> Tổng cộng </span>
                            <span class="total-line-price pull-right totaldh">15.298.000 VNĐ</span>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection