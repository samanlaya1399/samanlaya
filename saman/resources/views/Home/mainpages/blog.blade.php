<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-اخبار</title>
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
<div class="blog-area pt-95 pb-100">
    <div class="container">
        <div class="blog-mesonry">
            <div class="row grid dir-rtl">
                @foreach($posts as  $post)
                    <div class="col-lg-4 col-md-6 grid-item">
                        <div class="blog-wrapper mb-40">
                            <div class="blog-img">
                                <a href="{{route('article.show.client',['slug'=>$post->slug])}}"><img src="{{$post->images['images']['300']}}" alt="{{$post->title}}"></a>
                            </div>
                            <div class="blog-info-wrapper dir-rtl txt-right">
                                <div class="blog-meta ">
                                    <ul class="dir-rtl txt-left">
                                        {{--<li><a href="#">Fashion  </a></li>--}}
                                        <li>{{\Morilog\Jalali\CalendarUtils::convertNumbers(jdate($post->created_at)->format('%d %B %y', true))}}</li>
                                    </ul>
                                </div>
                                <h4><a href="{{route('article.show.client',['slug'=>$post->slug])}}">{{$post->title}}</a></h4>
                                <p>{{$post->description}}</p>
                                <a class="blog-btn btn-hover" href="{{route('article.show.client',['slug'=>$post->slug])}}"> ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
        <div class="pagination-style mt-20 text-center">
           {{$posts->links()}}
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
@include('Home.mainpages.section.footer')
<!-- modal -->





<!-- all js here -->
<script src="{{asset('/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>--}}
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>
<script src="{{asset('/assets/js/simpleParallax.min.js')}}"></script>
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
