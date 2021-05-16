<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-{{$result->title}}</title>
    <meta name="description" content="سامان لعیا بزرگ‌ترین فروشگاه پخش لباس زیر کشور، اینک در آستانه‌ی بیستمین سال فعالیت، با گستره‌ای از کالاهای متنوع برای تمام اقشار جامعه و هر رده‌ی سنی، برای کاربران خود «تجربه‌ی لذت‌بخش یک خرید اینترنتی» را تداعی می‌کند. «ارسال سریع»، «ضمانت بهترین قیمت» و «تضمین اصل بودن کالا» سه اصل اولیه است که سامان لعیا از نخستین روز تاسیس سعی کرده به آن پایبند باشد و با رعایت این سه اصل، هرسال، حوزه‌های تازه‌ای را در فروش کالا و خدمات، به دایره‌ی فعالیت خود افزوده است. گستره‌ای به وسعت کلیه ارقام پوشاک و لباس زیر از برندهای متنوع، متعدد و سرشناس جهانی همچون شارمین، لعیا، ایزابلا، شب تاب، لین، نیو، تی بی ان و ...">
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
<div class="blog-details pt-95 pb-100">
    <div class="container">
        <div class="row dir-rtl txt-right">
            <div class="col-12">
                <div class="blog-details-info">
                    <div class="blog-meta">
                        <ul>
                            {{--<li>Fashion</li>--}}
                            <li>{{\Morilog\Jalali\CalendarUtils::convertNumbers(jdate($result->created_at)->format('%d %B %y', true))}}</li>
                        </ul>
                    </div>
                    <h3>{{$result->title}}</h3>
                    <img class="width-post" src="{{$result->images['images']['original']}}" alt="{{$result->title}}">
                    {!! $result->body !!}

                </div>
                {{--<div class="leave-area">--}}
                    {{--<h4 class="blog-details-title">Leave your thought</h4>--}}
                    {{--<form action="#">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-12">--}}
                                        {{--<div class="leave-form mb-20">--}}
                                            {{--<input placeholder="Name *" type="text">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<div class="leave-form mb-20">--}}
                                            {{--<input placeholder="Email *" type="email">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12">--}}
                                        {{--<div class="leave-form mb-20">--}}
                                            {{--<input placeholder="Website" type="text">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="text-leave">--}}
                                    {{--<textarea placeholder="Comment*"></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12">--}}
                                {{--<div class="leave-btn">--}}
                                    {{--<button class="submit btn-hover" type="submit"><i class="pe-7s-mail"></i> Send</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="blog-replay-wrapper">--}}
                    {{--<h4 class="blog-details-title2">HAVE 2 COMMENTS</h4>--}}
                    {{--<div class="single-blog-replay">--}}
                        {{--<div class="replay-img">--}}
                            {{--<a href="#"><img src="assets/img/blog/14.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="replay-info-wrapper">--}}
                            {{--<div class="replay-info">--}}
                                {{--<div class="replay-name-date">--}}
                                    {{--<h5><a href="#">Tayeb rayed</a></h5>--}}
                                    {{--<span>July 15, 2016 at 2:39 am</span>--}}
                                {{--</div>--}}
                                {{--<div class="replay-btn">--}}
                                    {{--<a href="#">Reply</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="single-blog-replay middle-blog-repley">--}}
                        {{--<div class="replay-img">--}}
                            {{--<a href="#"><img src="assets/img/blog/15.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="replay-info-wrapper">--}}
                            {{--<div class="replay-info">--}}
                                {{--<div class="replay-name-date">--}}
                                    {{--<h5><a href="#">JOHN NGUYEN</a></h5>--}}
                                    {{--<span>July 15, 2016 at 2:39 am</span>--}}
                                {{--</div>--}}
                                {{--<div class="replay-btn">--}}
                                    {{--<a href="#">Reply</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="single-blog-replay">--}}
                        {{--<div class="replay-img">--}}
                            {{--<a href="#"><img src="assets/img/blog/16.jpg" alt=""></a>--}}
                        {{--</div>--}}
                        {{--<div class="replay-info-wrapper">--}}
                            {{--<div class="replay-info">--}}
                                {{--<div class="replay-name-date">--}}
                                    {{--<h5><a href="#">JOHN NGUYEN</a></h5>--}}
                                    {{--<span>July 15, 2016 at 2:39 am</span>--}}
                                {{--</div>--}}
                                {{--<div class="replay-btn">--}}
                                    {{--<a href="#">Reply</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
@include('Home.mainpages.section.footer')

<!-- modal -->





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
