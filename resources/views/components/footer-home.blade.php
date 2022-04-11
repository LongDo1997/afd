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
    $mapInfo= !empty($info[2])?substr($info[3],strpos($info[3],'Map: ')+5):"";
}
?>
 <section id="it-up-footer" class="it-up-footer-section position-relative">
            <div class="container">
                <div class="it-up-footer-content-wrap pb-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="it-up-footer-widget headline-1 pera-content">
                                <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                    <div class="it-up-footer-logo pb-0">
                                        <a href="#"><img src="{{url('public/site')}}/assets/imgs/logo-white.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="dia-footer-widget dia-headline ul-li-block clearfix" style="color: white !important;">
                                <ul>
                                    <li> <a href="#" class="text-uppercase">Trang chủ</a></li>
                                    <li><a href="#dia-service" class="text-uppercase">Dịch vụ</a></li>
                                    <li><a href="#dia-about" class="text-uppercase">Về chúng tôi</a></li>
                                    <li><a href="#dia-portfolio" class="text-uppercase">Sản phẩm</a></li>
                                    <li><a href="#dia-team" class="text-uppercase">Tổ chức</a> </li>
                                    <li><a href="#it-up-footer" class="text-uppercase">Liên hệ</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="it-up-footer-widget headline-1 pera-content">
                            @if(isset($mainContact))
                                <div class="it-up-footer-info-widget ul-li">
                                    <h3 class="widget-title">{{$mainContact->get_cat->meta_keyword}}</h3>
                                    <ul>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> 
                                            <a href="#">{{$mainContact->tittle}} - {{$addInfo}}</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone"></i><a href="tel:0906 505 816">{{$phoneInfo}}</a>
                                        </li><br>
                                        <li>
                                            <i class="fas fa-inbox"></i><a href="mailto:{{$emailInfo}}">{{$emailInfo}}</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="{{url('public/site')}}/assets/js/jquery.js"></script>
    <!-- <script src="{{url('public/site')}}/assets/js/popper.min.js"></script> -->
    <script src="{{url('public/site')}}/assets/js/appear.js"></script>
    <script src="{{url('public/site')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('public/site')}}/assets/js/wow.min.js"></script>
    <script src="{{url('public/site')}}/assets/js/jquery.fancybox.js"></script>
    <script src="{{url('public/site')}}/assets/js/tilt.jquery.min.js"></script>
    <script src="{{url('public/site')}}/assets/js/owl.js"></script>
    <script src="{{url('public/site')}}/assets/js/aos.js"></script>
    <script src="{{url('public/site')}}/assets/js/slick.js"></script>
    <script src="{{url('public/site')}}/assets/js/jquery.barfiller.js"></script>
    <script src="{{url('public/site')}}/assets/js/typer-new.js"></script>
    <script src="{{url('public/site')}}/assets/js/odometer.js"></script>
    <script src="{{url('public/site')}}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('public/site')}}/assets/js/parallax-scroll.js"></script>
    <script src="{{url('public/site')}}/assets/js/script.js"></script>
    @yield('js')
</body>

<!-- Mirrored from templates.envytheme.com/seku/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 14:01:23 GMT -->

</html>