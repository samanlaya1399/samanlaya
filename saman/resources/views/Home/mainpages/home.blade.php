<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا</title>
    <meta name="description" content="سامان لعیا بزرگ‌ترین فروشگاه پخش لباس زیر کشور، اینک در آستانه‌ی بیستمین سال فعالیت، با گستره‌ای از کالاهای متنوع برای تمام اقشار جامعه و هر رده‌ی سنی، برای کاربران خود «تجربه‌ی لذت‌بخش یک خرید اینترنتی» را تداعی می‌کند. «ارسال سریع»، «ضمانت بهترین قیمت» و «تضمین اصل بودن کالا» سه اصل اولیه است که سامان لعیا از نخستین روز تاسیس سعی کرده به آن پایبند باشد و با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات، به دایره‌ی فعالیت خود افزوده است. گستره‌ای به وسعت کلیه ارقام پوشاک و لباس زیر از برندهای متنوع، متعدد و سرشناس جهانی همچون شارمین، لعیا، ایزابلا، شب تاب، لین، نیو، تی بی ان و ...">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <!-- all css here -->
  @include('Home.mainpages.section.css')

    <style>
        header{
            direction: rtl;
        }

        .category-right{
            position: absolute;
            top: 40%;
            right: 60px;
            z-index: 99;

        }
        .category-item{
            position: relative;
            font-size: 1.5rem;
            font-weight: normal;
            line-height: 2.5;
            /*margin-bottom: 30px;*/
            color: #fffffe;
        }
        .category-item:hover{
            font-size: 50px;
            font-size: 3.125rem;
            font-weight: 700;
            letter-spacing: normal;
            line-height: 2;
            padding-right: 10px;
            background: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .category-item:hover::before{
            content: "";
            background-color: #96E6A1;
            height: 2px;
            width: 500px;
            position: absolute;
            right: -1000px;
            top: 50%;
            -webkit-transform: translate(calc(100% - 995px),-50%);
            transform: translate(calc(100% - 995px),-50%);

        }

        .currency-2 li i:hover{
            background: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 30px;
        }
        .parallax-container{
            width: 100%;
            height: 300px;
            background-image: -webkit-gradient(linear,left top,right bottom,from(rgba(144,243,199,.9)),to(rgba(80,167,194,.9)));
            background-image: linear-gradient(to bottom right,rgba(144,243,199,.9),rgba(80,167,194,.9));
        }
        /*.parallax-container div{*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*background-image: radial-gradient(circle at 26% 46%,rgba(26,26,26,.5),#216a73)*/
        /*}*/
        .parallax-container h2{
            font-size: 37px;
            position: relative;
            left: 42%;
            top: 20%;
            z-index: 999;
        }
        body{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        }
        .footer-top-area{
            /*width: 100%;*/
            /*height: 500px;*/
            -moz-transition: all 2s ease-in;
            -o-transition: all 2s ease-in;
            -webkit-transition: all 2s ease-in;
            transition: all 2s ease-in;
        }  .footer-top-area2{
               /*width: 100%;*/
               /*height: 500px;*/
               -moz-transition: all 2s ease-in;
               -o-transition: all 2s ease-in;
               -webkit-transition: all 2s ease-in;
               transition: all 2s ease-in;
           }  .footer-top-area3{
                  /*width: 100%;*/
                  /*height: 500px;*/
                  -moz-transition: all 2s ease-in;
                  -o-transition: all 2s ease-in;
                  -webkit-transition: all 2s ease-in;
                  transition: all 2s ease-in;
              }

    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- header start -->
<header class="header-area wrapper-padding-2 fashion-2-header">
    <div id="main-menu" class="header-sticky-2">
        <div class="container-fluid">
            <div class="logo-menu-wrapper">
                <div class="logo-watch navbar-header">
                    <a class="navbar-brand" href="{{route('index.main')}}"><img src="{{asset('assets/img/logo/saman55.png')}}" alt="سامان لعیا"></a>
                    <div class="handicraft-search">
                        <button class="search-toggle">
                            <i class="pe-7s-search s-open"></i>
                            <i class="pe-7s-close s-close"></i>
                        </button>
                        <div class="handicraft-content">
                            <form action="#">
                                <input id="search" placeholder="جستجو" type="text">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-search-cart-login">
                    <div class="header-login">
                        <ul>
                            <li><a href="{{route('login')}}">ورود</a></li>
                            <li><a href="{{route('register')}}">ثبت نام</a></li>
                        </ul>
                    </div>
                    <div class="header-cart">
                            @if(auth()->check())
                        <a class="icon-cart" href="{{route('main.cart')}}">
                            @else
                            <a class="icon-cart" href="{{route('login')}}">
                            @endif
                            <i class="ti-shopping-cart"></i>
                          
                            @if(auth()->check() && count(auth()->user()->basket()->get()) > 0)
                            <span class="shop-count pink">{{count(auth()->user()->basket()->get())}}</span>
                            @endif
                      
                        </a>
                    @include('Home.mainpages.section.sabad')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="search-result" class="category-menu-dropdown shop-menu">
    <div class="category-dropdown-style category-common2 mb-30">
        <h4 class="categories-subtitle"> محصولات </h4>
        <ul id="ul-result">
            <li><a href="#"> اولی</a></li>
        </ul>
    </div>
</div>
<!-- header end -->
<!-- slider start -->
<div class="slider-area">
    <div class="slider-active owl-carousel">
        @foreach($sliders as $slider)
        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url({{$slider->images['images']['original']}})">
            <div class="container">
                <div class="slider-content slider-animation slider-content-style-fashion slider-animated-1">
                    <!--<div class="text-bg animated">-->
                    <!--<img class="tilter-2 animated" src="assets/img/icon-img/slogo.png" alt="">-->
                    <!--</div>-->
                    <a href="{{route('article.show.client',['slug'=>$slider->slug])}}">
                    <p class="animated">{{$slider->title}} </p>
                    </a>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <div class="category-right">
        <ul>
            <li class="category-item">
                <a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(1)->first()->slug])}}">زنانه</a>
            </li>
            <li class="category-item">
                <a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(3)->first()->slug])}}">بچه گانه</a>
            </li>
            <li class="category-item">
                <a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(2)->first()->slug])}}">مردانه </a>
            </li>
        </ul>
    </div>
    <div class="currency-2">
        <ul>
            <li>
                <a href="#">
                    <i class="ti-layout-grid2-alt"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ti-layout-grid3-alt"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="clickable-mainmenu-btn">
        <a class="clickable-mainmenu-active" href="#"><img src="assets/img/icon-img/43.png" alt=""></a>
    </div>
</div>


<!-- banner area start -->
<div class="banner-area">
    <div class="row no-gutters">
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/1.jpg" alt=""></a>
                <div class="banner-content banner-content-style1">
                    <h2>تولیدی <br> <span>بانو</span></h2>
                    <p>ست کامل رنگ سال</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/2.jpg" alt=""></a>
                <div class="banner-content banner-content-style2">
                    <span>-  ویژه  -</span>
                    <h2>۳۰٪ تخفیف</h2>
                    <p>حراج تابستانه</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-banner">
                <a href="#"><img src="assets/img/banner/3.jpg" alt=""></a>
                <div class="banner-content banner-content-style3">
                    <h2>برند برتر <br>2019</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area end -->




<!-- all products area start -->
<div class="all-products-area pt-115 pb-50">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="section-title text-center mb-60 ">
                <h2>آخرین محصولات</h2>
            </div>
            <div class="product-style">
                <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                    @foreach($types as $i => $type)
                    <a class="@if($i == 4) active @endif" href="#home{{$i+1}}" data-toggle="tab" role="tab" aria-selected="@if($i == 4)true @else false @endif" aria-controls="home{{$i+1}}">
                    <h4 title="{{$type->description}}">{{$type->title}} </h4>
                    </a>
                    @endforeach
                    
                 
                </div>
                <div class="tab-content dir-rtl">
                    <div class="tab-pane  fade" id="home1" role="tabpanel">
                        <div class="custom-row ">
                           @foreach($firsts as $pro)
                            <div class="custom-col-5 custom-col-style mb-65">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{route('main.product',['slug'=>$pro->slug])}}">
                                            <img src="{{$pro->images['images']['300']}}" alt="{{$pro->title}}">
                                        </a>
                                        {{--<span>ویژه</span>--}}
                                        <div class="product-action">
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            @if(!empty($pro->price[0]->price) && auth()->check())
                                            <a class="animate-top" title="Add To Cart" href="{{route('mybasket.add',['price_id'=>$pro->price[0]->id,'number'=>1])}}">
                                                    <i class="pe-7s-cart"></i>
                                            </a>
                                                @else
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            @endif
                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#first'.$pro->id}}" href="#">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('main.product',['slug'=>$pro->slug])}}">{{$pro->title}}</a></h4>
                                        @if(!empty($pro->price[0]->price))
                                        <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($pro->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                               @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="home2" role="tabpanel">
                        <div class="custom-row">
                            @foreach($seconds as $pro)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{route('main.product',['slug'=>$pro->slug])}}">
                                                <img src="{{$pro->images['images']['300']}}" alt="{{$pro->title}}">
                                            </a>
                                            {{--<span>ویژه</span>--}}
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#first'.$pro->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('main.product',['slug'=>$pro->slug])}}">{{$pro->title}}</a></h4>
                                            @if(!empty($pro->price[0]->price))
                                                <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($pro->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="home3" role="tabpanel">
                        <div class="custom-row">
                            @foreach($thirds as $pro)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{route('main.product',['slug'=>$pro->slug])}}">
                                                <img src="{{$pro->images['images']['300']}}" alt="{{$pro->title}}">
                                            </a>
                                            {{--<span>ویژه</span>--}}
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#first'.$pro->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('main.product',['slug'=>$pro->slug])}}">{{$pro->title}}</a></h4>
                                            @if(!empty($pro->price[0]->price))
                                                <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($pro->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="home4" role="tabpanel">
                        <div class="custom-row">
                            @foreach($forths as $pro)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{route('main.product',['slug'=>$pro->slug])}}">
                                                <img src="{{$pro->images['images']['300']}}" alt="{{$pro->title}}">
                                            </a>
                                            {{--<span>ویژه</span>--}}
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#first'.$pro->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('main.product',['slug'=>$pro->slug])}}">{{$pro->title}}</a></h4>
                                            @if(!empty($pro->price[0]->price))
                                                <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($pro->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane active show fade" id="home5" role="tabpanel">
                        <div class="custom-row">
                            @foreach($fifths as $pro)
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="{{route('main.product',['slug'=>$pro->slug])}}">
                                                <img src="{{$pro->images['images']['300']}}" alt="{{$pro->title}}">
                                            </a>
                                            {{--<span>ویژه</span>--}}
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#first'.$pro->id}}" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('main.product',['slug'=>$pro->slug])}}">{{$pro->title}}</a></h4>
                                            @if(!empty($pro->price[0]->price))
                                                <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($pro->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- all products area end -->




<!-- banner3 area start -->
<div class="banner-area3 pt-10 pb-115">
    <div class="pl-100 pr-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="banner-wrapper mrgn-negative">
                        <a href="#"><img src="assets/img/banner/8.jpg" alt=""></a>
                        <div class="banner-wrapper2-content">
                            <h3>فروش ویژه </h3>
                            <h2>پیراهن</h2>
                            <br>
                            <span>از  ۵۰۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="row no-gutters banner-mrg">
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                <img src="assets/img/banner/9.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">فانتزی</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5">
                                <img src="assets/img/banner/10.jpg" alt="">
                                <div class="banner-wrapper3-content banner-text-color">
                                    <a href="#">اسپورت</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-r-5">
                                <img src="assets/img/banner/11.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">برند</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper">
                                <img src="assets/img/banner/12.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">ست کامل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner3 area end -->
<!-- all products area start -->
<div class="all-products-area pb-70">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="row dir-rtl">
                @foreach($latest as $late)
                <div class="col-lg-3 col-xl-3 col-md-6">
                    <div class="product-wrapper mb-45">
                        <div class="product-img">
                            <a href="{{route('main.product',['slug'=>$late->slug])}}">
                                <img src="{{$late->images['images']['900']}}" alt="{{$late->title}}">
                            </a>
                            {{--<span>محبوب</span>--}}
                            <div class="product-action">
                                <a class="animate-left" title="علاقه مندی" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                @if(!empty($late->price[0]->price) && auth()->check())
                                <a class="animate-top" title="اضافه به سبدخرید" href="{{route('mybasket.add',['price_id'=>$late->price[0]->id,'number'=>$late->price[0]->minimum])}}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                @else
                                    <a class="animate-top" title="موجود شد، اطلاع بده" href="{{route('notify.add',['product_id'=>$late->id])}}">
                                        <i class="pe-7s-bell"></i>
                                    </a>
                                    @endif
                                <a class="animate-right" title="مشاهده سریع" data-toggle="modal" data-target="{{'#late'.$late->id}}" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="{{route('main.product',['slug'=>$late->slug])}}">{{$late->title}}</a></h4>
                            @if(!empty($late->price[0]->price))
                            <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($late->price[0]->price)}}</span> <span>تومان</span>
                                @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- all products area end -->
<!-- fashion banner area start -->
@php
    $off = \App\Offer::where([['expire','>',\Carbon\Carbon::now()],['status',0]])->latest()->first()
@endphp
@if($off)
<div class="fashion-banner-area pb-120">
    <div class="container">
        <div class="fashion-banner-wrapper">
            <img src="{{$off->images['images']['original']}}" alt="{{$off->product->title}}">
            <div class="fashion-banner-content">
                <h2>{{$off->product->title}}</h2>
                <a class="btn-hover fashion-2-btn" href="{{route('main.product',['slug'=>$off->product->slug])}}">خرید</a>
            </div>
            <div class="timer">
                مهلت تخفیف
                                <div data-countdown="{{$off->expire}}"></div>
                            </div>
        </div>

    </div>
</div>
@endif

<!-- product area start -->

<div class="product-area pt-10 pb-120">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="section-title text-center mb-60">
                <h2>محصولات پربازدید </h2>
            </div>
            <div class="product-style">
                <div class="arrival-active owl-carousel">
                    @foreach($models as $model)
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="{{route('main.product',['slug'=>$model->slug])}}">
                                <img src="{{$model->images['images']['900']}}" alt="{{$model->title}}">
                            </a>
                            {{--<span>ویژه</span>--}}
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                @if(!empty($model->price[0]))
                                <a class="animate-top" title="اضافه به سبد خرید" href="{{route('mybasket.add',['price_id'=>$model->price[0]->id,'number'=>$model->price[0]->minimum])}}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                @else
                                    <a class="animate-top" title="موجود شد، اطلاع بده" href="{{route('notify.add',['product_id'=>$model->id])}}">
                                        <i class="pe-7s-bell"></i>
                                    </a>
                                    @endif
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#model'.$model->id}}" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content dir-rtl">
                            <h4><a href="{{route('main.product',['slug'=>$model->slug])}}">{{$model->title}}</a></h4>
                            @if(!empty($model->price[0]->price))
                            <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($model->price[0]->price)}}</span> <span>تومان</span>
                                @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area end -->

<!-- brand logo area start -->
<div class="brand-logo-area pl-100 pr-100 gray-bg">
    <div class="ptb-135">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand">
                <img src="assets/img/brand-logo/1.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/2.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/1.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/3.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/4.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/5.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-logo/6.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- brand logo area end -->
<!-- testimonials area start -->
<div class="testimonials-area pt-105 pb-105">
    <div class="container">
        <div class="section-title-2 text-center mb-35">
            <h2>نظر مشتریان</h2>
        </div>
        <div class="testimonials-active owl-carousel">
            <div class="single-testimonial-4 text-center">
                <img src="assets/img/icon-img/42.png" alt="">
                <p>
                    این عینک آفتابی دارای فریم ویفرر است رنگ لنز عینک طلایی و رنگ فریم قهوه ای است دسته عینک ساده و به رنگ قهوه ای است پد های بینی عینک غیر قابل تنظیم هستند مناسب استفاده در آب و هوای آفتابی، نیمه ابری طول فریم 120 میلی متر، طول دسته 145 میلی متر، طول لنز 49 میلی متر، طول پل 22 میلی متر است
                </p>
                <h4>احمد سروری / خرید عمده</h4>
            </div>
            <div class="single-testimonial-4 text-center">
                <img src="assets/img/icon-img/42.png" alt="">
                <p>
                    من سه سایز ۳۸و ۴۰ و ۴۲ را خریدم که هرسه گشااااد بودن
                    واقعا به این سایزبندی اعتمادی نیس سایز ۳۸ بنظرم ۴۴ هستش!درلین حد گشاد
                </p>
                <h4>سارا سلطانی / خرید تک</h4>
            </div>
            <div class="single-testimonial-4 text-center">
                <img src="assets/img/icon-img/42.png" alt="">
                <p>
                    کفش تخت زنانه از سری کفش های Jadalis برند جی اوکس است , کفش جلو باز و پشت آن بسته است، همچنین در قسمت روی پنجه با بند بسته می شود , این کفش قابلیت گردش هوا دارد، قابلیت تنفس و گردش هوا از ایجاد رطوبت در داخل آن جلوگیری می کند و باعث ایجاد راحتی بیشتر پا می شود , زیره با استفاده از تکنولوژی Cutting-edge طراحی شده است که همزمان با قرار دادن سوراخ هایی جهت گردش هوا در عین حال در مقابل عبور آب مقاوم است , مناسب برای استفاده روزمره و مهمانی , ارتفاع پاشته کفش برابر 4 سانتی متر است
                </p>
                <h4>شاهین مرتضوی / کاربر</h4>
            </div>
        </div>
    </div>
</div>
<!-- testimonials area end -->
<!-- insta feed start -->
<div class="insta-feed ptb-120  gray-bg">
    <div class="pl-185 pr-185">
        <div class="section-title-2 text-center mb-50">
            <h2>اخبار فروشگاه</h2>
            <h4>در اینستاگرام دنبال کنید <span>@samanlaya</span></h4>
        </div>
        <div class="instafeed-wrapper">
            <div class="instafeed-active owl-carousel">
                @foreach($reports as $report)
                    {{--<a href="#">--}}
                    <a href="{{route('article.show.client',['slug'=>$report->slug])}}">
                <div class="instafeed-img">
                    <img src="{{$report->images['images']['300']}}" alt="{{$report->title}}">
                </div>
                    </a>
                    {{--</a>--}}
                    @endforeach
            </div>
        </div>
    </div>
</div>
<!-- insta feed end -->
<!--parallax start-->
<div class="parallax-container">
    <!--<div>-->
    <!--<h2>برندهای برتر لباس</h2>-->
    <!--</div>-->
    <img class="thumbnail" src="assets/img/slider/cloth.png" alt="image">
    <!--<div class="container">-->
    <!--<div class="section-title-2 text-center mb-35">-->

    <!--</div>-->
</div>

</div>
<!--parallax end-->

@include('Home.mainpages.section.footer')
{{--modal--}}
@foreach($latest as $late)
<div class="modal fade" id="{{'late'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'modal1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'modal2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'modal3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#modal1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#modal2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#modal3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{\Morilog\Jalali\CalendarUtils::convertNumbers($late->price[0]->price)}}</span> <span>تومان</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+ سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
@foreach($firsts as $late)
<div class="modal fade" id="{{'first'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'first1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'first2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'first3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#first1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#first2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#first3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{\Morilog\Jalali\CalendarUtils::convertNumbers($late->price[0]->price)}}</span> <span>تومان</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+ سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
{{--modal--}}
@foreach($seconds as $late)
<div class="modal fade" id="{{'first'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'second1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'second2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'second3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#second1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#second2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#second3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{$late->price[0]->price}}</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#"> + سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
{{--modal--}}
@foreach($thirds as $late)
<div class="modal fade" id="{{'first'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'third1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'third2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'third3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#third1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#third2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#third3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{$late->price[0]->price}}</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+ به سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
{{--modal--}}
@foreach($forths as $late)
<div class="modal fade" id="{{'first'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'forth1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'forth2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'forth3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#forth1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#forth2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#forth3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{$late->price[0]->price}}</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#"> + سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
{{--modal--}}
@foreach($fifths as $late)
<div class="modal fade" id="{{'first'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'fifth1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'fifth2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'fifth3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#fifth1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#fifth2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#fifth3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{$late->price[0]->price}}</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+  سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}
{{--modal--}}
@foreach($models as $late)
<div class="modal fade" id="{{'model'.$late->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="{{'model1'.$late->id}}" role="tabpanel">
                                <img src="{{$late->images['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'model2'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery1['images']['900']}}" alt="">
                            </div>
                            <div class="tab-pane fade" id="{{'model3'.$late->id}}" role="tabpanel">
                                <img src="{{$late->gallery2['images']['900']}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(isset($late->images['images']['100']))
                            <a class="active" href="{{'#model1'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->images['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery1['images']['100']))
                            <a href="{{'#model2'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery1['images']['100']}}" alt="">
                            </a>
                        @endif
                        @if(isset($late->gallery2['images']['100']))
                            <a href="{{'#model3'.$late->id}}" data-toggle="tab" role="tab">
                                <img src="{{$late->gallery2['images']['100']}}" alt="">
                            </a>
                        @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$late->title}}</h3>
                        <div class="price">
                            @if(!empty($late->price[0]->price))
                                <span class="new">{{$late->price[0]->price}}</span>
                            @endif
                            {{--<span class="old">۳۲۰۰۰۰  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star active"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>۲ امتیاز</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <p>
                            {{$late->description}}
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+  سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{--modal--}}



<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="assets/img/quick-view/l1.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="assets/img/quick-view/l2.jpg" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="assets/img/quick-view/l3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="assets/img/quick-view/s1.jpg" alt="">
                        </a>
                        <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="assets/img/quick-view/s2.jpg" alt="">
                        </a>
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="assets/img/quick-view/s3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>دامن مجلس چین دار</h3>
                        <div class="price">
                            <span class="new">۱۹۰۰۰۰</span>
                            <span class="old">۳۲۰۰۰۰  </span>
                        </div>
                        <div class="rating-number">
                            <div class="quick-view-rating">
                                <i class="pe-7s-star active"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                            </div>
                            <div class="quick-view-number">
                                <span>۲ امتیاز</span>
                            </div>
                        </div>
                        <p>
                            کالاهای متنوع برای تمام اقشار جامعه و هر رده‌ی سنی، برای کاربران خود «تجربه‌ی لذت‌بخش یک خرید اینترنتی» را تداعی می‌کند. «ارسال سریع»، «ضمانت بهترین قیمت» و «تضمین اصل بودن کالا» سه اصل اولیه است که سامان لعیا از نخستین روز تاسیس سعی کرده به آن پایبند باشد و با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات، به دایره‌ی فعالیت خود افزوده است.
                        </p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">۴۵</option>
                                    <option value="">۳۹</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">نارنجی</option>
                                    <option value="">صورتی</option>
                                    <option value="">زرد</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">+  سبد خرید</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clickable-mainmenu text-center">
    <div class="clickable-mainmenu-icon">
        <button class="clickable-mainmenu-close">
            <span class="pe-7s-close"></span>
        </button>
    </div>
    <div id="menu" class="text-right">
        <ul>
            <li>
                <a href="{{route('index.main')}}">صفحه اصلی</a>
            </li>

            {{--<li>--}}
                {{--<a href="#">فروشگاه</a>--}}
                {{--<ul>--}}
                    {{--<li>--}}
                        {{--<a href="#">بخش های فروشگاه</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="shop-grid-2-col.html"> بخش آنلاین</a></li>--}}
                            {{--<li><a href="shop-grid-3-col.html"> انبارداری</a></li>--}}
                            {{--<li><a href="shop.html">پیگیری سفارش</a></li>--}}
                            {{--<li><a href="shop-grid-box.html">ارتباط و همکاری</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">لیست فروش</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="shop-list-1-col.html"> لیست گذشته</a></li>--}}
                            {{--<li><a href="shop-list-2-col.html">لیست جدید</a></li>--}}
                            {{--<li><a href="shop-list-box.html">لیست کلی</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <a href="#">محصولات</a>
                <ul>
                    @foreach (\App\Grouping::all() as $group)
                    <li><a href="#">{{$group->title}}</a>
                     <ul>
                    @foreach ($group->type as $type)
                   <li><a href="{{route('main.typing',['slug'=>$type->slug])}}">{{$type->title}}</a></li>   
                    @endforeach
                     </ul>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="{{route('blog.index')}}">بلاگ</a>

            </li>
        </ul>
    </div>
</div>









<!-- all js here -->
@include('Home.mainpages.section.script')
<script>
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
    });
</script>
<script>
    var indexNumber = 0;
    var colors = ["footer-top-area2", "footer-top-area3", "footer-top-area4"];
    $(document).ready(function() {
        setInterval(function() {
                try {
                    $( ".footer-top-area" ).removeClass("footer-top-area2");
                }catch (e) {

                }    try {
                    $( ".footer-top-area" ).removeClass("footer-top-area3");
                }catch (e) {

                }    try {
                    $( ".footer-top-area" ).removeClass("footer-top-area4");
                }catch (e) {

                }
                try {
                    $( ".footer-top-area" ).addClass( colors[Math.floor(Math.random() * 2)] );
                }catch (e) {

                }
                // indexNumber++;
                // // if (indexNumber == 3) {
                // //     console.log(indexNumber);
                // //     indexNumber = 0;
                // // }
//                console.log('l');
            }
            , 5000);


    });
</script>

</body>
</html>
