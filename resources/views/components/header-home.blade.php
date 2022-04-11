<?php 
if(isset($mainContact)){
    $accs = explode(' end_Of_The_Link, ',$mainContact->summary);
    $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
    $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
    $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
    $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
    $info = explode(' end_of_contact, ',$mainContact->description);
    $emailInfo= !empty($info[0])?substr($info[0],strpos($info[0],'Email: ')+7):"";
    $phoneInfo= !empty($info[1])?substr($info[1],strpos($info[1],'Phone: ')+7):"";
    $addInfo= !empty($info[2])?substr($info[2],strpos($info[2],'Address: ')+9):"";
}
?>
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/seku/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 14:01:23 GMT -->

<head>

    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{url('public/site')}}/assets/imgs/logo-brand.png" type="image/x-icon">
    <link rel="icon" href="{{url('public/site')}}/assets/imgs/logo-brand.png" type="image/x-icon">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public/site')}}/assets/css/style.css">
    @yield('css')
</head>

<body class="dia-home">


<!-- 
    <header class="header-area ">
        <div class="top-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @if(isset($mainContact))
                    <div class="col-lg-6 col-sm-8">
                        <ul class="header-content-left">
                            <li>
                                <a
                                    href="https://gmail.com">
                                    <i class="bx bx-envelope"></i>
                                    Email: <span >{{$emailInfo}}</span>
                                </a>
                            </li>
                            <li>
                                <i class="bx bx-location-plus"></i>
                                {{$addInfo}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <ul class="header-content-right">
                            <li>
                                <a href="{{$fblink}}" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$twiterlink}}" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$anotherlink}}" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$instalink}}" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div> -->
    <div id="preloader" class="dia-preloader"></div>
    <div class="up">
        <a href="#" id="scrollup" class="dia-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Start of header section
        ============================================= -->
    <header id="dia-header" class="dia-main-header">
        <div class="container">
            <div class="dia-main-header-content clearfix">
                <div class="dia-logo float-left">
                    <a href="#"><img src="{{url('public/site')}}/assets/imgs/logo.svg"  width="130px" height = "100px" alt=""></a>
                    <div class="straight-line"></div>
                    <div class="company-desc">
                        <div class="txt-company-slogan"></div>
                        <div class="txt-company-name" >LSD TECHNOLOGY ,.JSC</div>
                    </div>
                </div>
                <div class="dia-main-menu-item float-right">
                    <nav class="dia-main-navigation  clearfix ul-li">
                        <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                            <li> <a href="#" class="text-uppercase">Trang chủ</a></li>
                            <li><a href="#dia-service" class="text-uppercase">Dịch vụ</a></li>
                            <li><a href="#dia-about" class="text-uppercase">Về chúng tôi</a></li>
                            <li><a href="#dia-portfolio" class="text-uppercase">Sản phẩm</a></li>
                            <li><a href="#dia-team" class="text-uppercase">Tổ chức</a> </li>
                            <li><a href="#it-up-footer" class="text-uppercase">Liên hệ</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /desktop menu -->
            <div class="dia-mobile_menu relative-position">
                <div class="dia-mobile_menu_button dia-open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="dia-mobile_menu_wrap">
                    <div class="mobile_menu_overlay dia-open_mobile_menu"></div>
                    <div class="dia-mobile_menu_content">
                        <div class="dia-mobile_menu_close dia-open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <a href="!#"><img src="{{url('public/site')}}/assets/imgs/logo.png" alt=""></a>
                        </div>
                        <nav class="dia-mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                <li> <a href="#" class="text-uppercase">Trang chủ</a></li>
                                <li><a href="#dia-service" class="text-uppercase">Dịch vụ</a></li>
                                <li><a href="#dia-about" class="text-uppercase">Về chúng tôi</a></li>
                                <li><a href="#dia-portfolio" class="text-uppercase">Sản phẩm</a></li>
                                <li><a href="#dia-team" class="text-uppercase">Tổ chức</a> </li>
                                <li><a href="#it-up-footer" class="text-uppercase">Liên hệ</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /mobile-menu -->
            </div>
        </div>
    </header>
    