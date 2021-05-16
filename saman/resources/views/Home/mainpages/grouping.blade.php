<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-{{$slug}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/favicon.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- header start -->
<header>
    @include('Home.mainpages.section.nav')
</header>
<!-- header end -->
<!--<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">-->
<!--<div class="container-fluid">-->
<!--<div class="breadcrumb-content text-center">-->
<!--<h2> shop grid</h2>-->
<!--<ul>-->
<!--<li><a href="#">home</a></li>-->
<!--<li>shop grid</li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row dir-rtl txt-right">
            <div class="col-lg-3">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">جستجوی محصول</h3>
                        <div class="sidebar-search">
                            <form action="{{route('main.keyword',['keyword'=>' '])}}" method="get">
                              
                                <input  placeholder="جستجوی محصول ..." type="text" name="keyword">
                                <button type="submit" ><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">براساس قیمت</h3>
                        <form action="{{route('main.ranging')}}" method="post">
                       {{ csrf_field() }}
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>قیمت : </label>
                                    <input type="text" id="amount" name="price"  placeholder="اضافه کردن قیمت" />
                                </div>
                                <button type="submit">فیلتر</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">دسته بندی</h3>
                        <div class="sidebar-categories">
                            <ul>
                                @foreach($types as $type)
                                    <li><a title="{{$type->grouping->title}}" href="{{route('main.typing',['slug'=>$type->slug])}}">{{$type->title}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{--<div class="sidebar-widget sidebar-overflow mb-45">--}}
                        {{--<h3 class="sidebar-title">رنگ</h3>--}}
                        {{--<div class="product-color">--}}
                            {{--<ul>--}}
                                {{--<li class="red">b</li>--}}
                                {{--<li class="pink">p</li>--}}
                                {{--<li class="blue">b</li>--}}
                                {{--<li class="sky">b</li>--}}
                                {{--<li class="green">y</li>--}}
                                {{--<li class="purple">g</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="sidebar-widget mb-40">--}}
                        {{--<h3 class="sidebar-title">سایز</h3>--}}
                        {{--<div class="product-size">--}}
                            {{--<ul>--}}
                                {{--<li><a href="#">xl</a></li>--}}
                                {{--<li><a href="#">m</a></li>--}}
                                {{--<li><a href="#">l</a></li>--}}
                                {{--<li><a href="#">ml</a></li>--}}
                                {{--<li><a href="#">lm</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">کلیدواژه</h3>
                        <div class="product-tags">
                            <ul>
                            @foreach ($tags as $i => $tag)
                            @if($i > 3)
                            @break
                            @endif
                                <li><a href="{{route('main.keyword',['keyword'=> $tag])}}">{{$tag}}</a></li>
                            @endforeach
                            

                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">محصولات پرطرفدار</h3>
                        <div class="sidebar-top-rated-all">
                            @foreach($common as $comm)
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            @if(!empty($comm->images['images']['100']))
                                                <a href="{{route('main.product',['slug'=>$comm->slug])}}"><img src="{{$comm->images['images']['100']}}" alt="{{$comm->title}}"></a>
                                            @endif
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="{{route('main.product',['slug'=>$comm->slug])}}">{{$comm->title}}</a></h4>
                                            {{--<div class="top-rated-rating">--}}
                                            {{--<ul>--}}
                                            {{--<li><i class="pe-7s-star"></i></li>--}}
                                            {{--<li><i class="pe-7s-star"></i></li>--}}
                                            {{--<li><i class="pe-7s-star"></i></li>--}}
                                            {{--<li><i class="pe-7s-star"></i></li>--}}
                                            {{--<li><i class="pe-7s-star"></i></li>--}}
                                            {{--</ul>--}}
                                            {{--</div>--}}
                                            @if(!empty($comm->price[0]->price))
                                                <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($comm->price[0]->price)}}</span> <span>تومان</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper res-xl res-xl-btn">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    {{--<p><span>23</span> محصولات موجود <span>50</span></p>--}}
                                    <p><span></span> {{$slug}} <span></span></p>
                                </div>
                                <div class="shop-selector">
                                    {{--<label>مرتب سازی: </label>--}}
                                    {{--<select name="select">--}}
                                        {{--<option value="">Default</option>--}}
                                        {{--<option value="">A to Z</option>--}}
                                        {{--<option value=""> Z to A</option>--}}
                                        {{--<option value="">In stock</option>--}}
                                    {{--</select>--}}
                                </div>
                            </div>
                            <div class="shop-filter-tab">
                                <div class="shop-tab nav" role=tablist>
                                    <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                                        <i class="ti-layout-grid4-alt"></i>
                                    </a>
                                    <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar1" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($all as $prod)
                                        <div class="col-lg-6 col-md-6 col-xl-3">
                                            <div class="product-wrapper mb-30">
                                                <div class="product-img">
                                                    <a href="{{route('main.product',['slug'=>$prod->slug])}}">
                                                        @if(!empty($prod->images['images']['300']))
                                                            <img src="{{$prod->images['images']['300']}}" alt="{{$prod->title}}">
                                                        @endif
                                                    </a>
                                                    {{--<span>hot</span>--}}
                                                    <div class="product-action">
                                                        <a class="animate-left" title="Wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                         @if(!empty($prod->price[0]->price) && auth()->check())
                                                        <a class="animate-top" title="Add To Cart" href="{{route('mybasket.add',['price_id'=>$prod->price[0]->id,'number'=>1])}}">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        @else
                                                         <a class="animate-top" title="Add To Cart" href="#">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                        @endif
                                                        <a class="animate-right" title=" نمایش سریع" data-toggle="modal" data-target="#{{'late'.$prod->id}}" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h4><a href="{{route('main.product',['slug'=>$prod->slug])}}">{{$prod->title}} </a></h4>
                                                    @if(!empty($prod->price[0]->price))
                                                        <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($prod->price[0]->price)}}</span> <span>تومان</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="grid-sidebar2" class="tab-pane fade">
                                <div class="row">
                                    @foreach($all as $prod)
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                <div class="product-img list-img-width">
                                                    <a href="{{route('main.product',['slug'=>$prod->slug])}}">
                                                        @if(!empty($prod->images['images']['300']))
                                                            <img src="{{$prod->images['images']['300']}}" alt="{{$prod->title}}">
                                                        @endif
                                                    </a>
                                                    {{--<span>hot</span>--}}
                                                    <div class="product-action-list-style">
                                                        <a class="animate-right" title="نمایش سریع" data-toggle="modal" data-target="#{{'late'.$prod->id}}" href="#">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-list">
                                                    <div class="product-list-info">
                                                        <h4><a href="{{route('main.product',['slug'=>$prod->slug])}}">{{$prod->title}}</a></h4>
                                                        @if(!empty($related->price[0]->price))
                                                            <span>$related->price[0]->price</span>
                                                        @endif
                                                        <p>{{$prod->description}}</p>
                                                    </div>
                                                    <div class="product-list-cart-wishlist">
                                                        <div class="product-list-cart">
                                                           @if(!empty($prod->price[0]->price) && auth()->check())
                                                            <a class="btn-hover list-btn-style" href="{{route('mybasket.add',['price_id'=>$prod->price[0]->id,'number'=>1])}}">سبد خرید</a>
                                                            @else
                                                            <a class="btn-hover list-btn-style" href="#">سبد خرید</a>
                                                            @endif
                                                        </div>
                                                        <div class="product-list-wishlist">
                                                            <a class="btn-hover list-btn-wishlist" href="#">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-style mt-30 text-center">
                    {{--<ul>--}}
                        {{--<li><a href="#"><i class="ti-angle-left"></i></a></li>--}}
                        {{--<li><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">...</a></li>--}}
                        {{--<li><a href="#">19</a></li>--}}
                        {{--<li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>--}}
                    {{--</ul>--}}
                    {{$all->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('Home.mainpages.section.footer')
<!-- modal -->
@foreach($all as $late)
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
                            <label>سایز / رنگ*</label>
                                <select class="select">
                                    {{-- <option value="">- انتخاب کنید -</option> --}}
                                   @foreach($late->price as $price)
                                <option value="{{$price->id}}">{{'سایز: '. $price->size->title . ' | رنگ: '. $price->color->title . ' | قیمت: '. \Morilog\Jalali\CalendarUtils::convertNumbers($price->price)}}</option>
                                @endforeach
                                </select>
                            </div>
                           
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                             @if(!empty($late->price[0]->price) && auth()->check())
                                <a class="btn-hover-black" href="{{route('mybasket.add',['price_id'=>$late->price[0]->id,'number'=>1])}}">+ سبد خرید</a>
                                  @else
                                <a class="btn-hover-black" href="#">+ سبد خرید</a>
                             @endif
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
  {{-- @foreach($all as $prod) --}}
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
                        <h3>Handcrafted Supper Mug</h3>
                        <div class="price">
                            <span class="new">$90.00</span>
                            <span class="old">$120.00  </span>
                        </div>
                        <div class="rating-number">
                            <div class="quick-view-rating">
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                            </div>
                            <div class="quick-view-number">
                                <span>2 Ratting (S)</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                        <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>Size*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">900</option>
                                    <option value="">700</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>Color*</label>
                                <select class="select">
                                    <option value="">- Please Select -</option>
                                    <option value="">orange</option>
                                    <option value="">pink</option>
                                    <option value="">yellow</option>
                                </select>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">add to cart</a>
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
{{-- @endforeach --}}
<!-- modal -->
<div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-compare-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#">
                    <div class="table-content compare-style table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <a href="#">Remove <span>x</span></a>
                                    <img src="assets/img/cart/4.jpg" alt="">
                                    <p>Blush Sequin Top </p>
                                    <span>$75.99</span>
                                    <a class="compare-btn" href="#">Add to cart</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="compare-title"><h4>Description </h4></td>
                                <td class="compare-dec compare-common">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>Sku </h4></td>
                                <td class="product-none compare-common">
                                    <p>-</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>Availability  </h4></td>
                                <td class="compare-stock compare-common">
                                    <p>In stock</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>Weight   </h4></td>
                                <td class="compare-none compare-common">
                                    <p>-</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>Dimensions   </h4></td>
                                <td class="compare-stock compare-common">
                                    <p>N/A</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>brand   </h4></td>
                                <td class="compare-brand compare-common">
                                    <p>HasTech</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>color   </h4></td>
                                <td class="compare-color compare-common">
                                    <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"><h4>size    </h4></td>
                                <td class="compare-size compare-common">
                                    <p>XS, S, M, L, XL, XXL </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="compare-title"></td>
                                <td class="compare-price compare-common">
                                    <p>$75.99 </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
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
