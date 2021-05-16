<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="{{$result->description}}">
    <meta name="keywords" content=" مجمع الفکر,موسسه مجمع الفکر اسلامی,{{$result->tags}} ">
    <meta name="author" content="Mahdi Samian" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{$result->title}} - موسسه مجمع الفکر الاسلامی </title>

    <!--Stylesheet-->

    <!--[if IE 7]>
    <!--<link rel="stylesheet" href="css/fontello-ie7.css">-->

    <link href="/css/singlepost.css" rel="stylesheet" type="text/css">

    <style>
        ul  img{
            /*height: 300px;*/
        }
        .marg-btm{
            margin-bottom: 3px;
        }
        #wrapper{
            background-image: url('/images/pattern.png');
        }
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
            <div class="imgTS" style="background-image: url('{{$result->images['thumb']}}')"></div>
            <!--End single teaser images-->

            <!--Container-->
            <div class="container clearfix">

                <!--Single teaser inner-->
                <div class="stInner ten columns margMTop ">

                    <div class="postContent">

                        <div class="postTitleL">

                            <h1>{{$result->title}}</h1>
                            <div class="postMeta">
                                <span class="metaAuthor"><a href="#">
                                      @foreach($result->categories->pluck('name') as $key=>$name )
                                            {{$name}}
                                        @endforeach
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





    <!--BLog single section-->
    <section id="blogSingle" class="blogSingle  margHTop margHBottom">

        <!--Container-->
        <div class="container clearfix">
            <div class="eleven columns">

                <!--Post Single-->
                <div class="postSingle">

                    <!--Post content-->
                    <div class="postContent"  id="main-content">

                        <!--Post image-->
                        <div class="postMedia">

                            <img alt="{{$result->slug}}" src="{{$result->images['images']['original']}}">

                        </div>
                        <!--End post image-->
                        <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers(jdate($result->created_at)->format('%d %B %y', true))}}</span>

                        <blockquote>{{$result->description}}</blockquote>

                        <p>{!! $result->body !!}</p>



                        <div class="tagsSingle clearfix">
                            <h4><i class="icon-tag-1"></i> کلیدواژه: </h4>
                            <ul class="tagsListSingle">
                                @foreach($article_tags as $tag)
                                    <li class="marg-btm"><a href="#">{{$tag}}</a></li>
                                @endforeach
                            </ul>
                        </div>



                    </div>
                    <!--End post content-->

                </div>
                <!--End post single-->


{{--                <img src="{{$result->galleries['gallery1']['300']}}" alt="">--}}

                <!--Comments-->
                <!--<div class="comments">-->
                <!--<h2>20 Comments</h2>-->


                <!--&lt;!&ndash;Entries container&ndash;&gt;	-->
                <!--<div class="entriesContainer">																		-->

                <!--&lt;!&ndash;Comments and replys&ndash;&gt;-->

                <!--<ul class="comments clearfix">-->
                <!--<li>-->
                <!--<div class="comment"> -->

                <!--<div class="img">-->
                <!--<i class="fa fa-user"></i>-->
                <!---->
                <!--</div>  -->
                <!--<div class="commentContent">-->
                <!--<div class="commentsInfo">-->
                <!--<div class="author"><a href="#">Mutation Media</a></div>-->
                <!--<div class="date"><a href="#">July 19, 2013 at 12 am</a></div>-->
                <!--</div>-->
                <!--<p class="expert">Pellentesque habitant morbi tristique senectus -->
                <!--et netus et malesuada fames ac turpis egestas. Curabitur tempor-->
                <!--vehicula porta. Phasellus magna arcu, commodo non porta vulputate,-->
                <!--mattis eget lacus. Nulla eget leo ipsum.</p>-->
                <!--</div>-->

                <!--<div class="reply-btn">-->
                <!--<a href="#replyForm" class="replyDisplay">-->
                <!--Reply</a></div> -->
                <!--</div>-->


                <!--<ul class="replys">-->
                <!--<li>-->
                <!--<div class="comment children">-->
                <!--<div class="img">-->
                <!--<i class="fa fa-user"></i>-->
                <!---->
                <!--</div> -->



                <!--<div class="commentContent">-->
                <!--<div class="commentsInfo">-->
                <!--<div class="author"><a href="#">Mutation Media</a></div>-->
                <!--<div class="date"><a href="#">July 19, 2013 at 12 am</a></div>-->
                <!--</div>-->
                <!--<p class="expert">Pellentesque habitant morbi tristique senectus et netus et malesuada fames-->
                <!--ac turpis egestas. Curabitur tempor vehicula porta.-->
                <!--Phasellus magna arcu, commodo non porta vulputate, mattis eget lacus. Nulla eget leo ipsum.</p>-->
                <!--</div>-->

                <!--<div class="reply-btn">-->
                <!--<a href="#replyForm" class="replyDisplay">Reply</a></div> -->
                <!--</div>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--&lt;!&ndash;End replys children&ndash;&gt;-->
                <!--<ul class="replys children">-->
                <!--<li>-->
                <!--<div class="comment children">-->
                <!--<div class="img">-->
                <!--<i class="fa fa-user"></i>-->
                <!---->
                <!--</div> -->

                <!--<div class="commentContent">-->
                <!--<div class="commentsInfo">-->
                <!--<div class="author"><a href="#">Mutation Media</a></div>-->
                <!--<div class="date"><a href="#">July 19, 2013 at 12 am</a></div>-->
                <!--</div>-->
                <!--<p class="expert">Pellentesque habitant morbi tristique senectus et netus et malesuada fames-->
                <!--ac turpis egestas. Curabitur tempor vehicula porta.-->
                <!--Phasellus magna arcu, commodo non porta vulputate, mattis eget lacus. Nulla eget leo ipsum.</p>-->
                <!--</div>-->

                <!--<div class="reply-btn">-->
                <!--<a href="#replyForm" class="replyDisplay">Reply</a></div> -->
                <!--</div>-->
                <!--</li>-->
                <!--</ul>-->
                <!--&lt;!&ndash;End replys children&ndash;&gt;-->
                <!--</li>-->
                <!--</ul>-->
                <!--&lt;!&ndash;End comments and replys&ndash;&gt;-->


                <!--</div>-->

                <!--&lt;!&ndash;End  entries container &ndash;&gt;	-->

                <!--</div>-->
                <!--End comments-->



                <!--Respond-->
                <!--<div class="respond margTop">-->
                <!--<h2>Leave a comment</h2>-->

                <!--&lt;!&ndash;Reply form&ndash;&gt;-->
                <!--<div class="replyForm">-->
                <!--<form method="post" action="#">-->

                <!--&lt;!&ndash;Input columns&ndash;&gt;-->
                <!--<div class="inputColumns clearfix">-->

                <!--<div class="column1">-->
                <!--<div class="columnInner">-->
                <!--<input type="text" placeholder="Name *" value="" id="name" name="name" >-->
                <!--</div>-->
                <!--</div>-->

                <!--&lt;!&ndash;Column&ndash;&gt;-->
                <!--<div class="column2">-->
                <!--<div class="columnInner">-->
                <!--<input type="text" placeholder="Email *" value="" id="email" name="email">-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash;End column&ndash;&gt;-->

                <!--</div>-->
                <!--&lt;!&ndash;End input columns&ndash;&gt;-->

                <!--<input type="text" placeholder="WebSite" value="" id="website" name="website" >-->
                <!--<textarea name="message"  placeholder="Message *" id="message" cols="45" rows="10"></textarea>-->
                <!--<div id="submit" class="btn">Post Comment</div>-->
                <!--</form>-->


                <!--&lt;!&ndash;Reply form message&ndash;&gt;-->
                <!--<div id="success"><h2>Your message has been sent. Thank you!</h2></div>-->
                <!--<div id="error"><h2>Sorry your message can not be sent.</h2></div>-->
                <!--&lt;!&ndash;End reply form message&ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash;End reply form&ndash;&gt;-->
                <!---->

                <!--</div>-->
                <!--End respond-->


            </div>



            {{--<div class="five columns sidebar">--}}

                {{--<!--Widget-->--}}
                {{--<div class="widget">--}}
                    {{--<form action="#" class="searchForm">--}}
                        {{--<input type="text" onfocus="if(this.value == 'جستجو') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'جستجو'; }"  value="جستجو">--}}
                        {{--<input type="submit" class="submitSearch" value="Search">--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<!--End widget-->--}}

                {{--<!--Widget-->--}}
                {{--<div class="widget">--}}
                    {{--<h2>دسته بندی</h2>--}}
                    {{--<ul class="catList">--}}
                        {{--@foreach($categories as $category)--}}
                            {{--@continue($category=="اسلایدر")--}}
                            {{--@continue($category=="پیشنویس")--}}
                            {{--@continue($category=="سایر۱")--}}
                            {{--@continue($category=="سایر۲")--}}
                            {{--@continue($category=="سایر۳")--}}
                            {{--@continue($category=="سایر۴")--}}
                            {{--<li><a href="#">{{$category}} </a></li>--}}

                        {{--@endforeach--}}


                    {{--</ul>--}}

                {{--</div>--}}
                {{--<!--End widget-->--}}


                {{--<!--Widget-->--}}
                {{--<div class="widget">--}}
                    {{--<h2>کلیدواژه های جدید</h2>--}}
                    {{--<ul class="tagsList">--}}
                        {{--@foreach($tags as $tag)--}}
                            {{--<li><a href="#">{{$tag}}</a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!--End widget-->--}}


                {{--<!--Widget-->--}}
                {{--<!--<div class="widget">-->--}}
                {{--<!--<h2>Archives</h2>-->--}}
                {{--<!--<ul class="catArchives">-->--}}
                {{--<!--<li><a href="#">Juin 2013</a></li>-->--}}
                {{--<!--<li><a href="#">July 2013</a></li>-->--}}
                {{--<!--<li><a href="#">October 2013</a></li>-->--}}
                {{--<!--<li><a href="#">November 2013</a></li>-->--}}
                {{--<!--<li><a href="#">December 2013</a></li>-->--}}
                {{--<!--</ul>-->--}}

                {{--<!--</div>-->--}}
                {{--<!--End widget-->--}}



                {{--<!--Widget-->--}}
                {{--<!--<div class="widget">-->--}}
                {{--<!--<h2>Meta</h2>-->--}}
                {{--<!--<ul class="meta">-->--}}
                {{--<!--<li><a href="#">Log in</a></li>-->--}}
                {{--<!--<li><a  href="#">Entries <abbr title="">RSS</abbr></a></li>-->--}}
                {{--<!--<li><a title="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>-->--}}
                {{--<!--<li><a  href="#">WordPress.org</a></li>						-->--}}
                {{--<!--</ul>-->--}}

                {{--<!--</div>-->--}}
                {{--<!--End widget-->--}}


            {{--</div>--}}


        </div>
        <!--End container-->

    </section>
    <!--End blog single section-->








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
        @if($result->galleries != null)
        <div class="container clearfix">

            <!-- Works list -->
            <div class=" works clearfix ">
                <!--Portfolio-->
                <ul class="portfolio clearfix tCenter">
                    @for($i=1; $i<13; $i++)
                        @if(isset($result->galleries['gallery'.$i]))

                        <li class="item one-third column" style="float: right;" data-id="id-1" data-type="catWeb">
                        {{--<div class="itemDesc">--}}
                            {{--<div class="itemDescInner">--}}
                                {{--<h3>{{$result->tags}} <span> - {{$result->title}}</span></h3>--}}
                                {{--<div class=" itemBtn "> <a title="{{$result->tags}}" href="{{$result->galleries['gallery'.$i]['original']}}" class=" folio"><i class="fa fa-expand"></i></a> <a title="{{$result->title}}" href="{{route('article.show.client',['article'=>$result->slug])}}"><i class="fa fa-link"></i></a> </div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<img src="{{$result->galleries['gallery'.$i]['300']}}" alt="{{$result->slug}}">--}}
                            <div class="popup-gallery" style="text-align: right">
                            <a href="{{$result->galleries['gallery'.$i]['original']}}" title="{{str_limit($result->title,$limit=100,$end='...')}}"><img src="{{$result->galleries['gallery'.$i]['300']}}" /></a>
                            </div>
                        </li>
                        @endif
                        @endfor
                </ul>
                <!--End portfolio-->
            </div>
            <!-- End works list -->

        </div>
        @endif
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
{{--<script src="/js/modernizr.custom.js" type="text/javascript"></script>--}}
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.magnific-popup.min.js" type="text/javascript"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'درحال بارگذاری #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">تصویر #%curr%</a> بارگذاری نشد',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>{{$result->tags}}</small>';
                }
            }
        });
    });
</script>

<!-- Google analytics -->


<!-- End google analytics -->


</body>
</html>