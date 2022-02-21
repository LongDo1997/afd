@extends('master.home')
@section('title',$title)
@section('description', $description)
@section('keywords', $keywords)
@section('css')

@stop()

@section('main')
@if(isset($data['banner']))
    <section id="dia-banner" class="dia-banner-section position-relative">
    @foreach($data['banner'] as $dt)
        <div class="banner-side-img banner-img1 position-absolute"><img src="{{url('public/site')}}/assets/imgs/ns2.png" alt=""></div>
        <div class="banner-side-img banner-img2 position-absolute"><img src="{{$dt->images}}" alt=""></div>
        <div class="container">
            <div class="dia-banner-content dia-headline pera-content">
                <span class="dia-banner-tag text-uppercase">Sứ mệnh của Lasadu</span>
                <h1 class="cd-headline clip is-full-width">
                    <span class="cd-words-wrapper">{!!$dt->summary!!}
                        <!-- <span class="is-visible"></span> -->
                        <!-- <span>Hệ thống Công nghệ thông tin</span>
                        <span>Nguồn lực Công nghệ thông tin</span> -->
                    </span>
                </h1>
                <p><i>"{!!$dt->description!!}"</i></p>
                <!-- <div class="dia-banner-btn d-flex">
                        <div class="dia-play-btn text-center d-inline-block">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="dia-abt-btn text-center d-inline-block">
                            <a href="#">About Our Company</a>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="banner-shape1 position-absolute"><img src="{{url('public/site')}}/assets/imgs/pls3.png" alt=""></div>
        <div class="banner-shape2 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img
                src="{{url('public/site')}}/assets/imgs/ic_smart_home.png" alt=""></div>
            <div class="banner-shape3 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img
                src="{{url('public/site')}}/assets/imgs/ic_fingerprint.png" alt=""></div>
    @endforeach
    </section>
@endif
@if(isset($data['service']))
<section id="dia-service" class="soft-m-feature-section">
    <div class="container">
        <div class="soft-m-section-title text-center soft-m-headline">
            <span class=" text-uppercase">{{$data['cat_service']->meta_keyword}}</span>
            <h2>{!!$data['cat_service']->meta_description!!}</h2>
        </div>
        <div class="soft-m-feature-content">
            <div class="row justify-content-center">
            @foreach($data['service'] as $dt)
                <div class="col-lg-4 col-md-6">
                    <div class="soft-m-feature-inner position-relative wow fadeFromUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="soft-m-inner-icon">
                            <div class="soft-m-feature-icon text-center">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="soft-m-feature-box">
                            <div class="soft-m-feature-text soft-m-headline pera-content">
                                <h3><a href="#">{{$dt->tittle}}</a></h3>
                                <p>{!!$dt->summary!!}</p>
                                <a class="soft-f-more" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@if(isset($data['aboutService']))
<section id="dia-exp" class="dia-exp-section">
    <div class="container">
        <div class="dia-exp-content">
            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="dio-exp-text-area">
                        <div class="dia-exp-text">
                            <div class="dia-about-title-text">
                                <div class="dia-section-title text-left text-capitalize dia-headline">
                                    <span class=" text-uppercase">{{$data['cat_aboutService']->meta_keyword}}</span>
                                    <h2>{!!$data['cat_aboutService']->meta_description!!}</h2>
                                </div>
                            </div>
                        </div>
                        @foreach($data['aboutService'] as $dt)
                        <div class="skill-progress-bar">
                            <div class="skill-set-percent dio-headline">
                                <h4>{{$dt->tittle}}</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="{!!$dt->summary!!}"></div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="dia-exp-btn text-center">
                            <a href="#">Our Team</a>
                        </div> -->
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="dia-exp-img text-center position-relative">
                        <img src="{{url('public/site')}}/assets/imgs/rating.svg" alt="">
                        <div class="ab-shape1 position-absolute" data-parallax='{"x" : -30}'> <img src="{{url('public/site')}}/assets/imgs/as1.png" alt=""></div>
                        <div class="ab-shape2 position-absolute" data-parallax='{"x" : 30}'> <img src="{{url('public/site')}}/assets/imgs/as1.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(isset($data['about']))
<section id="dia-about" class="dia-fun-fact-section position-relative">
        <span class="dia-about-bg1 position-absolute"><img src="{{url('public/site')}}/assets/imgs/blg-shape1.png" alt=""></span>
        <span class="dia-about-bg2 position-absolute"><img src="{{url('public/site')}}/assets/imgs/blg-shape2.png" alt=""></span>
        <div class="container">
            <div class="dia-section-title text-center text-capitalize dia-headline">
                <span class=" text-uppercase">{{$data['cat_about']->meta_keyword}}</span>
                <h2>{!!$data['cat_about']->meta_description!!}</h2>
            </div>
            <div class="dia-fun-fact-content">
                <div class="dia-fun-fact-counter">
                    <div class="row">
                    @foreach($data['about'] as $dt)
                        <div class="col-lg-4 col-md-4">
                            <div class="dia-fun-fact-item dia-headline pera-content text-center">
                                <span class="fun-fact-tag text-uppercase">{{$dt->tittle}}</span>
                                <div class="fun-fact-number d-flex">
                                    <h3 class="odometer" data-count="{!!$dt->summary!!}">0</h3><span>+</span>
                                </div>
                                <p>{!!$dt->description!!}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif
@if(isset($data['product']))
<section id="dia-portfolio" class="dia-portfolio-section">
    <div class="container">
        <div class="dia-section-title text-center text-capitalize dia-headline">
            <span class="text-uppercase">{{$data['cat_product']->meta_keyword}}</span>
            <h2>{!!$data['cat_product']->meta_description!!}</h2>
        </div>
    </div>
    <div class="dia-portfolio-content">
        <div id="dia-portfolio-slider" class="dia-portfolio-slide-area owl-carousel">
        @foreach($data['product'] as $dt)
        
            <div class="dia-portfolio-img-text">
                <div class="dia-portfolio-img">
                    <img src="{{$dt->images}}" alt="">
                </div>
                <div class="dia-portfolio-text dia-headline text-center">
                    <h3><a href="#">{{$dt->tittle}}</a></h3>
                    <span>{!!$dt->summary!!} </span>
                </div>
            </div>
        @endforeach
        </div>
        <!-- <div class="dia-port-more text-center">
            <a class="d-block text-center" href="#">View All</a>
        </div> -->
    </div>
</section>

@endif

@if(isset($data['staff']))
<section id="dia-team" class="dia-team-section">
    <div class="container">
        <div class="dia-section-title text-center text-capitalize pera-content dia-headline">
            <span>{{$data['cat_staff']->meta_keyword}}</span>
            <h2>{!!$data['cat_staff']->meta_description!!}</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
        </div>
        <div id="dia-team-slide" class="dia-team-content owl-carousel">
        @foreach($data['staff'] as $dt)
        <?php 
            $accs = explode(' end_Of_The_Link, ',$dt->summary);
            $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
            $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
            $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
            $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
        ?>
            <div class="dia-team-pic-text wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="dia-team-img position-relative">
                    <div class="team-mem-img-ei text-center position-relative">
                        <img src="{{url($dt->images)}}" alt="">
                        <span class="mshape-bg shape-bg1"><img src="{{url('public/site')}}/assets/imgs/msbg1.png"
                                alt=""></span>
                        <span class="mshape-bg shape-bg2"><img src="{{url('public/site')}}/assets/imgs/msbg2.png"
                                alt=""></span>
                    </div>
                    <div class="dia-team-social">
                        <a href="{{$fblink}}"><i class="fab fa-facebook-f "></i></a>
                        <a href="{{$anotherlink}}"><i class="fab fa-behance"></i></a>
                        <a href="{{$twiterlink}}"><i class="fab fa-linkedin"></i></a>
                        <a href="{{$instalink}}"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="dia-team-text dia-headline text-center pera-content">
                    <h3><a href="#">{{$dt->tittle}}</a></h3>
                    <p>{{$dt->description}}</p>
                </div>
            </div>
        @endforeach 
        </div>
    </div>
</section>

@endif
    
  

   
@stop()