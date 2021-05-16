<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="آرشیو اخبار و اطلاعیه های پژوهشکده مجمع الفکر الاسلامی تحت اشراف آیت الله اراکی">
    <meta name="keywords" content="مجمع الفکر,انتشارات مجمع الفکر,مجمع الفکر الاسلامی,آرشیو اخبار,اخبار مجمع الفکر">
    <meta name="author" content="Mahdi Samian" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>آرشیو اخبار و اطلاعیه های پژوهشکده مجمع الفکر</title>

    <!--Stylesheet-->
    {{--<link rel="stylesheet" href="/css/admin.css">--}}

    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="/css/homepage.css">
    <style>
        .pagination > li > a, .pagination > li > span{
            float: right;
        }
        .pagination{
            direction: rtl;
        }
        .pagination > li:first-child > a, .pagination > li:first-child > span {
            margin-left: 0;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
        }
        .pagination > li:last-child > a, .pagination > li:last-child > span{
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            border-bottom-right-radius: 0px;
            border-top-right-radius: 0px;
        }
        a:focus, a:hover{
            text-decoration: none;
        }

    </style>

</head>

<body>

<!-- Preloader -->
<div id="loader">
    <!-- Preloader inner -->
    <div id="loaderInner">

        <!-- Loader bars -->
        <div class="loaderBars"> <span class="bar1 bar"></span> <span class="bar2 bar"></span> <span class="bar3 bar"></span> </div>
        <!-- End loader bars -->

    </div>
    <!-- End preloader inner -->
</div>
<!-- End preloader -->

<!--Wrapper-->
<div id="wrapper">

    <!--Header-->
    <header id="header" class="default">

        <!--Main header-->
        <div class="mainHeader">

            <!--Container-->
            <div class="container clearfix"> <a href="#" class="mobileBtn" ><i class="fa fa-bars"></i></a>
                <div class="six columns nav first">
                    <!--Navigation-->
                    <nav class="mainNav" >
                        <ul>
                            <li><a class="scroll" href="#about">درباره ما</a></li>
                            <li><a class="scroll" href="#new-products"> انتشارات</a></li>
                            <li><a class="scroll" href="#portfolio">گالری تصاویر</a></li>

                        </ul>
                    </nav>
                    <div class="new2"></div>

                    <!--End navigation-->

                </div>
                <div class="four columns logo">
                    <!--Logo-->
                    <a  class="scroll" href="{{route('index.main')}}"><img src="images/mainlogo.png" alt="مجمع الفکر الاسلامی"></a>
                    <!--<h1 id="main-name">مجمع الفکر الاسلامی</h1>-->
                    <!--End logo-->
                </div>
                <div class="six columns nav second">
                    <!--Navigation-->
                    <nav class="mainNav" >
                        <ul>
                            <li><a class="scroll" href="#latest-news">اخبار و اطلاعیه ها </a></li>
                            <li><a class="scroll" href="#division-intro"> واحدها</a></li>
                            <li><a class="scroll" href="#contact">ارتباط با ما</a></li>
                        </ul>
                    </nav>
                    <!--End navigation-->

                </div>
            </div>
            <!--End container-->

        </div>
        <!--End main header-->

    </header>
    <!--End header-->

    <!--Slider-->
    <div class="slider">


    </div>
    <!--End  slider-->

    <!--About section-->
    <section id="about">


        <!--Last work holder-->
        <div class="lastWorkHolder tCenter " id="latest-news">

            <!--Big title-->
            <div class="bigTitle">
                <h6>.</h6>
                <img src="images/star.png" alt=""> </div>
            <!--End big title-->

            <!--Last work -->
            <ul class="owl-slider latestWork owl-carousel clearfix">

                <!--Latest -->
                @foreach($news as $i => $new)
                    @if($i>2)

            </ul>
            @break
            @endif
                <li class="latest">
                    <!--Latest desc-->
                    <div class="latestDesc">
                        <div class="latestDescInner">
                            <!--<h3>الیاف طبیعی <span> - طراحی و تولید بومی</span></h3>-->
                            <h2>{{$new->title}}</h2>
                            <p>{{$new->description}}</p>

                            <a  class="btn latestBtn" href="{{route('article.show.client', ['article' => $new->slug])}}"> مشاهده</a> </div>
                    </div>
                    <!--End latest desc-->

                    <img src="{{$new->images['thumb']}}" alt="{{$new->slug}}"> </li>
                @endforeach
                <!--End latest-->
            </ul>

            <!--End last work-->
            <ul class="owl-slider latestWork owl-carousel clearfix">

                <!--Latest -->
                @foreach($news as $i => $new)
                    @if($i<3)
                        @continue
                    @endif
                @if($i>5)
            </ul>
            @break
                        @endif
                    <li class="latest">

                        <!--Latest desc-->
                        <div class="latestDesc">
                            <div class="latestDescInner">
                                <!--<h3>الیاف طبیعی <span> - طراحی و تولید بومی</span></h3>-->
                                <h2>{{$new->title}}</h2>
                                <p>{{$new->description}}</p>

                                <a  class="btn latestBtn" href="{{route('article.show.client', ['article' => $new->slug])}}"> مشاهده</a> </div>
                        </div>
                        <!--End latest desc-->

                        <img src="{{$new->images['thumb']}}" alt="{{$new->slug}}"> </li>
            @endforeach
            <!--End latest-->
            </ul>
            <!--End last work-->
            <ul class="owl-slider latestWork owl-carousel clearfix">

                <!--Latest -->
                @foreach($news as $i => $new)
                    @if($i<6)
                        @continue
                    @endif
                @if($i>8)
            </ul>
            @break
                        @endif
                    <li class="latest">

                        <!--Latest desc-->
                        <div class="latestDesc">
                            <div class="latestDescInner">
                                <!--<h3>الیاف طبیعی <span> - طراحی و تولید بومی</span></h3>-->
                                <h2>{{$new->title}}</h2>
                                <p>{{$new->description}}</p>

                                <a  class="btn latestBtn" href="{{route('article.show.client', ['article' => $new->slug])}}"> مشاهده</a> </div>
                        </div>
                        <!--End latest desc-->

                        <img src="{{$new->images['thumb']}}" alt="{{$new->slug}}"> </li>
            @endforeach
            <!--End latest-->
            </ul>


        </div>
        <!--End last work holder-->

{{--        {{$news->links('pagination::simple-bootstrap-4')}}--}}


    </section>
    <!--End about section-->



    <!--Footer-->
    <footer id="footer" class="footer tCenter">
    {{$news->links()}}
        <!--Footer top-->
        <div class="footerTop ofsInTop ofsBMedium">
            <!--Container-->
            <div class="container clearfix">

                <!--Footer top inner-->
                <div class="ftInner">
                    <div class="ftLogo"> <img src="images/mainlogo.png" alt=""> </div>
                    <ul class="socialsFooter">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="top"> <a class="scroll" href="#wrapper"><i class="fa fa-angle-double-up"></i></a> </div>
                </div>
                <!--End footer top inner-->

            </div>
            <!--End container-->

        </div>
        <!--End footer top-->

        <!--Footer bottom-->
        <div class="footerBottom ofsTSmall ofsBSmall">
            <!--Container-->
            <div class="container clearfix">

                <!--Footer bottom inner-->
                <div class="fbInner">
                    <p> نسخه آزمایشی&copy; 2018 کلیه حقوق مادی و معنوی برای مجمع الفکر الاسلامی محفوظ است .</p>
                </div>

                <!--End footer bottom inner-->

            </div>
            <!--End container-->
        </div>
        <!--End footer bottom-->

    </footer>
    <!--End footer-->
</div>

<!--End wrapper-->

<script src="/js/homepage.js"></script>
{{--<script src="/js/modernizr.custom.js"></script>--}}
{{--<script src="/js/admin.js" type="text/javascript"></script>--}}
    <script>

        // Inline popups
        $('#inline-popups').magnificPopup({
            delegate: 'a',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });


        // Image popups
        $('#image-popups').magnificPopup({
            delegate: 'a',
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function() {
                    // just a hack that adds mfp-anim class to markup
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            closeOnContentClick: true,
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });


        // Hinge effect popup
        $('a.hinge').magnificPopup({
            mainClass: 'mfp-with-fade',
            removalDelay: 1000, //delay removal by X to allow out-animation
            callbacks: {
                beforeClose: function() {
                    this.content.addClass('hinge');
                },
                close: function() {
                    this.content.removeClass('hinge');
                }
            },
            midClick: true
        });

    </script>

</body>

</html>