<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content="Mahdi Samian" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> - موسسه مجمع الفکر الاسلامی </title>

    <!--Stylesheet-->

    <!--[if IE 7]>
    <!--<link rel="stylesheet" href="css/fontello-ie7.css">-->

    <link href="/css/devision.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/js/devision.js"></script>
    {{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>--}}

    <style>

        html {
            height: 100%;
        }

        body {
            font-family: 'sahel',Helvetica, arial, sans-serif;
            /*background-color: #000;*/
            height: 100%;
            /*background: linear-gradient(to bottom, #020111 10%, #3a3a52 100%);*/
        }

        .accordion {
            max-width: 500px;
            margin: 30px auto;
            direction: rtl;
        }
        .accordion__title {
            font-family: 'yekan', sans-serif;
            font-weight: 300;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.125em;
        }
        .accordion__list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .accordion__item {
            border-bottom: 1px solid #000;
            visibility: hidden;
        }
        .accordion__item:last-child {
            border-bottom: 0;
        }
        .accordion__item.is-active .accordion__itemTitleWrap::after {
            -webkit-transform: translateX(-20%);
            transform: translateX(-20%);
        }
        .accordion__item.is-active .accordion__itemIconWrap {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .accordion__itemTitleWrap {
            display: flex;
            height: 2.5em;
            align-items: center;
            padding: 0 1em;
            color: #fff;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .accordion__itemTitleWrap::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background: #4ac2be;
            background: linear-gradient(45deg, #4ac2be 0%, #4ac2be 25%, #4ac2be 51%, #ff357f 100%);
            z-index: 1;
            transition: -webkit-transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
        }
        .accordion__itemTitleWrap.is-active::after, .accordion__itemTitleWrap:hover::after {
            -webkit-transform: translateX(-20%);
            transform: translateX(-20%);
        }
        .accordion__itemIconWrap {
            width: 1.25em;
            height: 1.25em;
            margin-right: auto;
            position: relative;
            z-index: 10;
        }
        .accordion__itemTitle {
            margin: 0;
            font-family: 'yekan', sans-serif;
            font-weight: 300;
            font-size: 1em;
            position: relative;
            z-index: 10;
        }
        .accordion__itemContent {
            font-size: 0.875em;
            height: 0;
            overflow: hidden;
            background-color: #d4f0ff;
            padding: 0 1.25em;
            text-align: right;
        }
        .accordion__itemContent p {
            margin: 2em 0;
        }

        #wrapper, .bgGrey{
            background-image: url('/images/pattern.png');
        }
        #header{
            padding-left: 60px;
        }

        .shamse{
            width: 200px;
            height: 200px;
            background-color: #0b0b0b;

            position: absolute;
            top: 45%;
            left: 2px;
        }

        .right-shamse{
            position: absolute;
            top: 43%;
            right: 24.8%;
        }
        .left-shamse{
            position: absolute;
            top: 43%;
            left: 24.8%;
        }

        .accordion__item:after{
            content: '';
            border-left: 2px solid gray;
            height: 41px;
            position: absolute;
            top: -8%;
            right: -2%;
            width: 2px;
        }
        .accordion__item:before{
            content: '';
            border-right: 2px solid gray;
            height: 41px;
            position: absolute;
            top: -8%;
            left: -2%;
            width: 2px;
        }

        /*.accordion:after{*/
            /*content: url('/images/shamse-1.png');*/
            /*position: absolute;*/
            /*top: 38%;*/
            /*right: 24.8%;*/
            /*width: 2px;*/
            /*display: ruby-text-container;*/
        /*}*/

        .accordion__title{
            color: grey;
        }
        /*.accordion:before {*/
            /*content: url('/images/shamse-2.png');*/
            /*position: relative;*/
            /*top: 70%;*/
            /*right: 52.2%;*/
            /*width: 2px;*/
            /*display: inline-block;*/
        /*}*/

        /*.accordion__list:after{*/
            /*content: url('/images/shamse-1.png');*/
            /*position: relative;*/
            /*top: -11%;*/
            /*left: 57.8%;*/
            /*width: 2px;*/
        /*}*/
        /*.accordion__list:before{*/
            /*content: url('/images/shamse-2.png');*/
            /*position: relative;*/
            /*!*top: 120px;*!*/
            /*bottom: 92%;*/
            /*right: 57.8%;*/
        /*}  */
        /*.accordion__list:after{*/
            /*content: url('/images/shamse-2.png');*/
            /*position: relative;*/
            /*!*top: 120px;*!*/
            /*top: 40%;*/
            /*right: 57.8%;*/
            /*display: ruby-text-container;*/
        /*}*/
    </style>


    <!--[if lt IE 9]>
    <!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
{{--<![endif]-->--}}


<!--[if lt IE 8]>
    <!--<style>-->
    <!--/* For IE < 8 (trigger hasLayout) */-->
    <!--.clearfix {-->
    <!--zoom:1;-->
    <!--}-->
    <!--</style>-->
    {{--<![endif]-->--}}




</head>

<body>

<!-- Preloader -->
<div id="loader">
    <!-- Preloader inner -->
    <div id="loaderInner">

        <!-- Loader bars -->
        <div class="loaderBars">
            <span class="bar1 bar"></span>
            <span class="bar2 bar"></span>
            <span class="bar3 bar"></span>
        </div>
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
            <div class="container clearfix">


                <a href="#" class="mobileBtn" ><i class="fa fa-bars"></i></a>
                <div class="six columns nav first">
                    <!--Navigation-->
                    <nav class="mainNav" >

                        <ul>
                            <li><a href="{{route('index.main')}}">واحدها</a></li>
                            <li><a href="{{route('index.main')}}">مجموعه آثار</a></li>
                            <li><a href="{{route('index.main')}}">درباره ما</a></li>

                        </ul>

                    </nav>
                    <!--End navigation-->

                </div>

                <div class="four columns logo">
                    <!--Logo-->
                    <a  href="{{route('index.main')}}"><img src="/images/mainlogo.png" alt="موسسه مجمع الفکر الاسلامی"></a>
                    <!--End logo-->
                </div>


                <div class="six columns nav second">
                    <!--Navigation-->
                    <nav class="mainNav" >

                        <ul>
                            <li><a href="{{route('index.main')}}">تماس باما</a></li>
                            <li><a href="{{route('index.main')}}">اخبار</a></li>
                            <li><a href="{{route('index.main')}}">تصاویر</a></li>

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


    <!--Single teaser -->

    <section class="singleTeaser ofsTop">



        <!--Single teaser holder-->
        <div class="stHolder">


            <!--Images teaser single-->
            <div class="imgTS" style="background-image: url('http://majmaolfekr.ir/upload/images/2018/BIG-Slide-22.jpg')"></div>
            <!--End single teaser images-->

            <!--Container-->
            <div class="container clearfix">

                <!--Single teaser inner-->
                <div class="stInner ten columns margMTop ">

                    <div class="postContent">

                        <div class="postTitleL">

                            <h1>معرفی بخش های موسسه مجمع الفکر الاسلامی</h1>
                            <div class="postMeta">
                                <span class="metaAuthor"><a href="#">
                                        بخش های مجمع الفکر
                                    </a></span>
                                <span class="metaCategory"><a href="#"> </a></span>
                                <span class="metaDate"><a href="#"></a></span>
                                <span class="metaComments"><a href="#"></a></span>
                            </div>

                        </div>

                    </div>


                </div>

                <!--End single teaser inner-->



                <div class="six columns margBottom margMTop">
                    <a href="{{route('index.main')}}" class=" btnLaunch" >بازگشت به صفحه اصلی</a>
                </div>



            </div>
            <!--End container-->


        </div>
        <!--End single teaser holder-->


    </section>
    <!--End single teaser-->

    <div class="clients bgGrey ofsTMedium ofsBMedium tCenter" style="height: 100%">

    {{--accordion--}}
        {{--<div class="shamse">--}}
        {{--</div>--}}
        {{--<img class="right-shamse" src="/images/shamse-1.png" alt="">--}}
        {{--<img class="left-shamse" src="/images/shamse-2.png" alt="">--}}
    <div class="accordion">
        <h2 class="accordion__title">واحدهای موسسه مجمع الفکر الاسلامی</h2>
        <ul class="accordion__list">
            @foreach($devisions as $devision)
            <li class="accordion__item">
                <div class="accordion__itemTitleWrap">
                    <h3 class="accordion__itemTitle">{{$devision->title}}</h3>
                    <div class="accordion__itemIconWrap"><svg viewBox="0 0 24 24"><polyline fill="none" points="21,8.5 12,17.5 3,8.5 " stroke="#FFF" stroke-miterlimit="10" stroke-width="2"/></svg></div>
                </div>
                <div class="accordion__itemContent">
                    {!! $devision->body !!}
                </div>
            </li>
                @endforeach
        </ul>

    </div>


    </div>
{{--end accordion--}}









<!--Teaser bottom-->
    <!--<section class="teaserB ofsTMedium ofsBMedium">-->

    <!--&lt;!&ndash;Container&ndash;&gt;-->
    <!--<div class="container clearfix">-->

    <!--<div class="twelve columns teaserMsg">-->
    <!--<h1>Are you interested into  bounce template try the buy button !</h1>-->
    <!--</div>-->


    <!--<div class="four columns buyLink">-->

    <!--<a href="#" class="btn">buy bounce now</a>-->

    <!--</div>-->

    <!--</div>-->
    <!--&lt;!&ndash;End container&ndash;&gt;-->


    <!--</section>	-->
    <!--End teaser bottom-->

    <section id="portfolio">

        <!--Title grey holder -->
    {{--<div class="tgreyHolder bgGrey ofsInTop margLTop">--}}

    {{--<!--Big title-->--}}
    {{--<div class="bigTitle tCenter">--}}
    {{--<h6>گالری تصاویر</h6>--}}
    {{--<img src="/images/star.png" alt=""> </div>--}}
    {{--<!--End big title-->--}}
    {{--</div>--}}
    <!--End title grey holder-->

        <!--Container-->
        <div class="container clearfix">

            <!-- Filter nav -->
            <!--<div class="filterNav ofsInTop ofsInBottom">-->
            <!--<ul id="category" class="filter">-->
            <!--<li class="all current"><a href="#">همه</a></li>-->
            <!--<li class="catWeb"><a href="#"> الیاف طبیعی </a></li>-->
            <!--<li class="catGraphic"><a href="#">کتان</a></li>-->
            <!--<li class="catMotion"><a class="last" href="#">اسپورت</a></li>-->
            <!--</ul>-->
            <!--</div>-->
            <!-- End filter nav -->

        </div>
        <!--End container-->

        <!--Container-->
        {{--@if($result->galleries != null)--}}
            {{--<div class="container clearfix">--}}

                {{--<!-- Works list -->--}}
                {{--<div class=" works clearfix ">--}}
                    {{--<!--Portfolio-->--}}
                    {{--<ul class="portfolio clearfix tCenter">--}}
                        {{--@for($i=1; $i<13; $i++)--}}
                            {{--@if(isset($result->galleries['gallery'.$i]))--}}

                                {{--<li class="item one-third column " data-id="id-1" data-type="catWeb">--}}
                                    {{--<div class="itemDesc">--}}
                                        {{--<div class="itemDescInner">--}}

                                            {{--<h3>{{$result->tags}} <span> - {{$result->title}}</span></h3>--}}
                                            {{--<div class=" itemBtn "> <a title="{{$result->tags}}" href="{{$result->galleries['gallery'.$i]['original']}}" class=" folio"><i class="fa fa-expand"></i></a> <a title="{{$result->title}}" href="{{route('article.show.client',['article'=>$result->slug])}}"><i class="fa fa-link"></i></a> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<img src="{{$result->galleries['gallery'.$i]['300']}}" alt="{{$result->slug}}"> </li>--}}
                            {{--@endif--}}
                        {{--@endfor--}}
                    {{--</ul>--}}
                    {{--<!--End portfolio-->--}}
                {{--</div>--}}
                {{--<!-- End works list -->--}}

            {{--</div>--}}
    {{--@endif--}}
    <!--End container-->

    </section>

    <!--Footer-->
    <footer id="footer" class="footer tCenter">



        <!--Footer top-->
        <div class="footerTop ofsInTop ofsBMedium">
            <!--Container-->
            <div class="container clearfix">

                <!--Footer top inner-->
                <div class="ftInner">

                    <div class="ftLogo">
                        <img src="/images/mainlogo.png" alt="">
                    </div>


                    <ul class="socialsFooter">



                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                    </ul>


                    <div class="top">
                        <a class="scroll" href="#wrapper"><i class="fa fa-angle-double-up"></i></a>
                    </div>

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


<!--Javascript-->
<script src="/js/singlepost.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.js" type="text/javascript"></script>

<script>
    var Accordion = function() {

        var
            toggleItems,
            items;

        var _init = function() {
            toggleItems     = document.querySelectorAll('.accordion__itemTitleWrap');
            toggleItems     = Array.prototype.slice.call(toggleItems);
            items           = document.querySelectorAll('.accordion__item');
            items           = Array.prototype.slice.call(items);

            _addEventHandlers();
            TweenLite.set(items, {visibility:'visible'});
            TweenMax.staggerFrom(items, 0.9,{opacity:0, x:-100, ease:Power2.easeOut}, 0.3)
        }

        var _addEventHandlers = function() {
            toggleItems.forEach(function(element, index) {
                element.addEventListener('click', _toggleItem, false);
            });
        }

        var _toggleItem = function() {
            var parent = this.parentNode;
            var content = parent.children[1];
            if(!parent.classList.contains('is-active')) {
                parent.classList.add('is-active');
                TweenLite.set(content, {height:'auto'})
                TweenLite.from(content, 0.6, {height: 0, immediateRender:false, ease: Back.easeOut})

            } else {
                parent.classList.remove('is-active');
                TweenLite.to(content, 0.3, {height: 0, immediateRender:false, ease: Power1.easeOut})
            }
        }

        return {
            init: _init
        }

    }();

    Accordion.init();
</script>



<!-- Google analytics -->


<!-- End google analytics -->


</body>
</html>