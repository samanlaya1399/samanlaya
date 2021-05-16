<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-تماس با ما</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/favicon.png')}}">

    <!-- all css here -->
    @include('Home.mainpages.section.css')

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
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-map-wrapper">
                    <div class="contact-map mb-40">
{{--                        <div id="hastech2"></div>--}}
                    </div>
                    <div class="blog-details-info dir-rtl txt-right">
                        <div class="blog-meta dir-rtl txt-right">
                            <ul>
                                {{--<li>Fashion</li>--}}
                            </ul>
                        </div>
                        <h3>{{$result->title}}</h3>
                        {!! $result->body !!}
    
                    </div>
                    <br>
                    <div class="contact-message dir-rtl">
                        <div class="contact-title txt-right">
                            <h4>فرم تماس</h4>
                        </div>
                        <form id="contact-form" class="contact-form" action="{{route('message.get.client')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 txt-right">
                                    <div class="contact-input-style mb-30">
                                        <label>*نام</label>
                                        <input name="name" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 txt-right">
                                    <div class="contact-input-style mb-30">
                                        <label>*ایمیل</label>
                                        <input name="email" required="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 txt-right">
                                    <div class="contact-input-style mb-30">
                                        <label>موبایل</label>
                                        <input name="mobile" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 txt-right">
                                    <div class="contact-input-style mb-30">
                                            <div class="select-option-part">
                                                <label>موضوع</label>
                                                <select class="select" name="subject">
                                                    <option value="0" disabled>- انتخاب کنید -</option>
                                                    <option value="1">انتقادات و پیشنهادات</option>
                                                    <option value="2"> گزارش تخلف </option>
                                                    <option value="3"> درخواست همکاری  </option>
                                                
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-12 txt-right">
                                    <div class="contact-textarea-style mb-30">
                                        <label>*متن پیام</label>
                                        <textarea class="form-control2" name="body" required=""></textarea>
                                    </div>
                                    <button class="submit contact-btn btn-hover" type="submit">
                                        ارسال پیام
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-wrapper">
                    <div class="contact-title txt-right">
                        <h4>اطلاعات تماس</h4>
                    </div>
                    <div class="contact-info dir-rtl txt-right">
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>آدرس: </span>  قم- خیابان زنگارکی <br> بین کوی 24 و 26 - پلاک 280 </p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-mail"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>ایمیل:  </span> Info@samanlaya.ir</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>تلفن:  </span>  ۰۲۵۳۸۶۰۸۶۶۶ <br> ۰۲۵۳۸۶۰۸۴۹۸ </p>
                            </div>
                        </div>
                    </div>
                </div>
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
