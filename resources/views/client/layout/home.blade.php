<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">

<!-- Mirrored from thietbiytevp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Mar 2018 03:45:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <base href="{{asset('')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trung tâm mua bán Thiết bị y tế, dụng cụ y khoa, sản phẩm chăm sóc sức khỏe</title>
    <meta name="description" content="Chúng tôi cung cấp các loại máy đo huyết áp, máy đo đường huyết, giường y tế... & các sản phẩm chăm sóc sức khỏe tốt nhất cho bạn"
    />
    <link rel="canonical" href="index.html" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="client/styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="client/styles/products.css" rel="stylesheet" type="text/css" />
    <link href="client/styles/main.css" rel="stylesheet" type="text/css" />
    <link href="client/styles/menu.css" rel="stylesheet" type="text/css" />
    <script src="client/code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="client/js/flaunt.js"></script>
    <script type="text/javascript" src="client/js/jquery.js"></script>
    <script type="text/javascript" src="client/jBasket/fly-to-basket/inc/js/custom.js"></script>
    <script src="client/js/quantity.js"></script>
</head>

<body>
    <header>
        <div class="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo">
                        <a href="index.html">
                            <img src="image/logo.png" height="60" />
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="search">
                            <form id="quicksearch" name="quicksearch" method="post" enctype="multipart/form-data" action="http://thietbiytevp.com/tim-kiem.html">
                                <input type="text" name="quick_key" id="quick_key" value="" placeholder="Nhập sản phẩm bạn cần tìm vào đây" />
                                <button type="submit" class="button-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 mobi-header">
                        <div class="hotline">
                            loading...
                        </div>

                        <div class="addcart">
                            <div id="mini_shopping_cart">
                                <span id="basketTitleWrap">
                                    <a href="gio-hang.html">
                                        <img src="images/icon-cart.png" /> </a>
                                </span>
                                <span id="notificationsLoader"></span>
                                <span id="basketItemsWrap"></span>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="menuheader">
            <div class="container">
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            Loading...
                        </li>
                        <li class="nav-item">
                            <a href="/contact" title="Liên hệ">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6" id="instruction">
                            loading...
                        </div>
                        <div class="col-md-6 footer-thongtin" id="privacy">
                            loading...
                        </div>
                    </div>
                </div>

                <div class="col-md-5 footer-thongtin" id="infomation">
                    loading...
                </div>

            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <i>© Copyright © 2018
                        <a href="#"
                            target="_blank">Thiết kế web</a> bởi
                        <a href="#" target="_blank">PL</a>
                    </i>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup">
        <i class="fa fa-chevron-up"></i>
    </a>
    <script type="text/javascript">
        $(document).ready(function () {
            $('img').hover(function () {
                var current = $(this).attr("src");
                var swap = $(this).attr("data-alt-src");
                $(this).attr("src", swap);
                $(this).attr("data-alt-src", current);
            }, function () {
                var current = $(this).attr("src");
                var swap = $(this).attr("data-alt-src");
                $(this).attr("data-alt-src", current);
                $(this).attr("src", swap);

            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

            $(window).load(function () {
                $('#loadOverlay').fadeOut('slow');
            });
        });
    </script>
    <link rel="stylesheet" href="client/maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <script>
        $(document).ready(function(){

            //loading...
            $('.nav').load('{{asset('')}}api/menu');
            $('#instruction').load('{{asset('')}}api/footer/instruction');
            $('#privacy').load('{{asset('')}}api/footer/privacy');
            $('#infomation').load('{{asset('')}}api/footer/infomation');
            $('.hotline').load('{{asset('')}}api/hotline');
        });
    </script>
</body>
</html>