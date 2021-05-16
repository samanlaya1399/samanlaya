<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-آدرس ارسال</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/favicon.png')}}">

    <!-- all css here -->
    @include('Home.mainpages.section.css')
    <link rel="stylesheet" href="{{asset('assets/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/easyzoom.css')}}">
    <style>
        .img-small{
            width: 140px;
        }
    </style>

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

<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row dir-rtl">

            <div class="container dir-rtl">
                <ul class="progressbar">
                    <li class="active">سبد خرید</li>
                    <li class="active">اطلاعات ارسال</li>
                    <li >پرداخت</li>
                    <li >نتیجه پرداخت</li>
                </ul>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">ثبت آدرس</h1>
                <form action="{{route('main.factor')}}" method="post">
                    {{csrf_field()}}

                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>تایید</th>
                                <th>استان/شهر</th>
                                <th>آدرس</th>
                                <th>گیرنده</th>
                                <th>کدپستی</th>
                                <th>موبایل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($address != null)
                                @foreach($address as $i => $ads)
                                    <tr>
                                        <td class="product-remove"><input type="radio" value="{{$ads->id}}" name="address_id" @if($i==0) checked @endif></td>
                                        <td class="product-thumbnail">
                                         {{$ads->province . '/' . $ads->city}}
                                        </td>
                                        <td class="product-name">
                                        {{$ads->address}}
                                        </td>
                                        <td class="product-price-cart">
                                            {{$ads->first_name.' '.$ads->last_name}}
                                        </td>
                                        <td class="product-quantity">
                                            {{$ads->post_code}}
                                        </td>

                                        <td class="product-subtotal">
                                            {{$ads->mobile .' - '. $ads->phone}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td class="product-remove"><input type="radio" value="new" name="address_id"></td>
                                <td><input type="text" name="province" placeholder="استان">- <input name="city" type="text" placeholder="شهر"></td>
                                <td><input type="text" name="address" placeholder="آدرس"></td>
                                <td><input type="text" name="first_name" placeholder="نام "><input type="text" name="last_name" placeholder="نام خانوادگی"></td>
                                <td><input type="text" name="post_code" placeholder="کدپستی"></td>
                                <td><input type="text" name="mobile" placeholder="موبایل"><input type="text" name="phone" placeholder="تلفن"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="row dir-rtl">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">انتخاب درگاه پرداخت</h1>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="کد تخفیف" type="text">
                                                <input class="button" name="apply_coupon" value="ثبت کد تخفیف" type="submit">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total" >


                                            <a href="#">
                                                <img src="{{asset('/assets/img/logo/zarin.jpg')}}" style="width: 40%;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">

                                <button type="submit">ثبت آدرس</button>

                                {{--<a href="#">انتخاب نوع پرداخت</a>--}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
@include('Home.mainpages.section.footer')
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
