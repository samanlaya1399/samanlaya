<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-{{$product->title}}</title>
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
<!--<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">-->
<!--<div class="container">-->
<!--<div class="breadcrumb-content text-center">-->
<!--<h2>product details</h2>-->
<!--<ul>-->
<!--<li><a href="#">home</a></li>-->
<!--<li> product details </li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-70">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset($product->images['images']['original'])}}">
                                        <img src="{{asset($product->images['images']['original'])}}" alt="{{$product->title}}">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset($product->gallery1['images']['original'])}}">
                                        <img src="{{asset($product->gallery1['images']['original'])}}" alt="{{$product->title}}">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset($product->gallery2['images']['original'])}}">
                                        <img src="{{asset($product->gallery2['images']['original'])}}" alt="{{$product->title}}">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset($product->gallery3['images']['original'])}}">
                                        <img src="{{asset($product->gallery3['images']['original'])}}" alt="{{$product->title}}">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details5" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset($product->gallery4['images']['original'])}}">
                                        <img src="{{asset($product->gallery4['images']['original'])}}" alt="{{$product->title}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-small nav mt-12" role=tablist>
                            <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                <img class="img-small" src="{{asset($product->images['images']['100'])}}" alt="{{$product->tags}}">
                            </a>
                            @if(isset($product->gallery1['images']['100']))
                            <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                <img class="img-small" src="{{asset($product->gallery1['images']['100'])}}" alt="{{$product->tags}}">
                            </a>
                            @endif
                            @if(isset($product->gallery2['images']['100']))
                            <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                <img class="img-small" src="{{asset($product->gallery2['images']['100'])}}" alt="{{$product->tags}}">
                            </a>
                            @endif
                            @if(isset($product->gallery3['images']['100']))
                            <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                <img class="img-small" src="{{asset($product->gallery3['images']['100'])}}" alt="{{$product->tags}}">
                            </a>
                            @endif
                            @if(isset($product->gallery4['images']['100']))
                            <a class="mr-12" href="#pro-details5" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{asset($product->gallery4['images']['100'])}}" alt="{{$product->tags}}">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12 txt-right dir-rtl">
                <div class="product-details-content">
                    <h3>{{$product->title}}</h3>
                    <!--<div class="rating-number">-->
                    <!--<div class="quick-view-rating">-->
                    <!--<i class="pe-7s-star red-star"></i>-->
                    <!--<i class="pe-7s-star red-star"></i>-->
                    <!--<i class="pe-7s-star"></i>-->
                    <!--<i class="pe-7s-star"></i>-->
                    <!--<i class="pe-7s-star"></i>-->
                    <!--</div>-->
                    <!--<div class="quick-view-number">-->
                    <!--<span>2 Ratting (S)</span>-->
                    <!--</div>-->
                    <!--</div>-->
                    <div class="details-price">
                        @php
                            $off = \App\Offer::where([['product_id',$product->id],['expire','>',\Carbon\Carbon::now()]])->first();
                        @endphp

                        @if(!empty($product->price[0]->price))
                            @if($off)
                                @php
                                    $newprice = $product->price[0]->price - ($product->price[0]->price * ($off->discount/100));
                                @endphp
                        <span class="menu-product-old">{{\Morilog\Jalali\CalendarUtils::convertNumbers($product->price[0]->price)}}</span>
                                <span class="menu-product-new">{{\Morilog\Jalali\CalendarUtils::convertNumbers($newprice)}} </span><span> تومان </span>
                            @else
                                <span class="menu-product-new">{{\Morilog\Jalali\CalendarUtils::convertNumbers($product->price[0]->price)}}</span><span> تومان </span>

                            @endif
                            @endif


                    </div>
                    <div>

                        @if($off)
                            <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers($off->discount) . '% تخفیف'}}</span>
                        @endif
                    </div>
                    <p>{!! $product->body !!}</p>
                    <div class="quick-view-select">
                        <div class="select-option-part">
                            <label>سایز / رنگ*</label>
                            <select class="select" id="prices">
                                <option value="0" name="size"  disabled>- انتخاب کنید -</option>
                                @foreach($prices as $price)
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
                            @if(sizeof($prices) > 0)
                            <a class="btn-hover-black" id="adding" href="{{route('mybasket.add',['price_id'=>$prices[0]->id,'number'=>$prices[0]->minimum])}}">اضافه به سبد خرید</a>
                            @else
                            <a class="btn-hover-black" href="{{route('notify.add',['product_id'=>$product->id])}}">موجود شد، اطلاع بده</a>
                                @endif
                        </div>
{{--                        <div class="quickview-btn-wishlist">--}}
{{--                            <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">دسته بندی :</li>
                            <li><a href="#">{{$product->type->grouping->title}}</a></li>
                            <li><a href="#">{{$product->type->title}}</a></li>
                            <li><a href="#">{{$product->brand->title}}</a></li>

                        </ul>
                    </div>
                    @foreach($prices as $price)
                <input id="{{'n'.$price->id}}" type="hidden" value="{{$price->minimum}}">
                    @endforeach
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">کلیدواژه :</li>
                            <li><a href="#">{{$product->tags}}</a></li>

                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">اشتراک گذاری :</li>
                            <li>
                                <a target="_blank" href="{{'http://www.facebook.com/sharer.php?u='.route('main.product',['slug'=>$product->slug])}}">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{'https://twitter.com/share?url='.route('main.product',['slug'=>$product->slug])}}">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{'https://t.me/share/url?url='.route('main.product',['slug'=>$product->slug])}}">
                                    <i class="icofont icofont-social-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{'whatsapp://send?text='.route('main.product',['slug'=>$product->slug])}}">
                                    <i class="icofont icofont-social-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center dir-rtl">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    توضیحات
                </a>
                <a  href="#prop" data-toggle="tab" role="tab" aria-selected="false">
                    ویژگی‌ها
                    </a>
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    بازخوردها 
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>{{$product->description}}</p>
                </div>
              
                <div class="tab-pane fade" id="prop" role="tabpanel">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 dis-inb">
                        <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>ویژگی‌ها</th>
                                        <th>مشخصات محصول</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($properties != null)
                                    @foreach($properties as $i => $prop)
                                    <tr>
                                        <td class="product-thumbnail">    {{$prop->title}}      </td>
                                        <td class="product-thumbnail"> @php
                                                foreach($values as $value){
                                                if($value->property_id == $prop->id){
                                                echo $value->value;}
                                                } @endphp </td>
                                    
                                    </tr>
                                   @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    {{-- <a href="#">اولین نظر را ثبت کنید!</a> --}}
             
                  
                    <div class="blog-replay-wrapper dir-rtl txt-right">
                        <h4 class="blog-details-title2">نظرات کاربران</h4>
                        @foreach($comments as $comment)
                        <div class="single-blog-replay">
                            <div class="replay-img">
                            <img src="{{asset('/dist/img/user-admin.png')}}" alt="">
                            </div>
                            <div class="replay-info-wrapper">
                                <div class="replay-info">
                                    <div class="replay-name-date">
                                        <h5>{{$comment->name}}</h5>
                                        <span>{{\Morilog\Jalali\CalendarUtils::convertNumbers(jdate($comment->created_at)->ago())}}</span>
                                    </div>
                                
                                </div>
                            <p>{!! $comment->body !!}}</p>
                            </div>
                        </div>
                   
                   
                       
                    <hr>
                    @endforeach
                    
                    
                  
                    <div class="contact-message dir-rtl col-md-11">
                        <div class="contact-title txt-right">
                            <h4>ثبت نظر</h4>
                        </div>
                        <form id="contact-form" class="contact-form" action="{{route('comment.get.client')}}" method="post">
                            {{ csrf_field() }}

                            <input type="hidden" name="parent_id" value="0">
                            <input type="hidden" name="commentable_id" value="{{$product->id}}">
                            <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">

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
                                        <input name="mobile"  type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 txt-right">
                                    <div class="contact-input-style mb-30">
                                        <label>وب‌سایت</label>
                                        <input name="mobile"  type="text">
                                    </div>
                                </div>
                            
                                <div class="col-md-12 txt-right">
                                    <div class="contact-textarea-style mb-30">
                                        <label>*متن نظر</label>
                                        <textarea class="form-control2" name="body" required=""></textarea>
                                    </div>
                                    <button class="submit contact-btn btn-hover" type="submit">
                                        ارسال نظر
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>محصولات مرتبط</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                @foreach($relateds as $related)
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{$related->images['images']['300']}}" alt="">
                        </a>
                        {{--<span>hot</span>--}}
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="{{'#related'.$related->id}}" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="{{route('main.product',['slug'=>$related->slug])}}">{{$related->title}}</a></h4>
                        @if(!empty($related->price[0]->price))
                        <span>{{$related->price[0]->price}}</span>
                            @endif
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
<!-- product area end -->
@include('Home.mainpages.section.footer')
<!-- modal -->
@foreach($relateds as $related)
<div class="modal fade" id="{{'related'.$related->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            @if(!empty($related->images['images']['900']))
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="{{$related->images['images']['900']}}" alt="{{$related->title}}">
                            </div>
                            @endif
                                @if(!empty($related->gallery1['images']['900']))
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="{{$related->gallery1['images']['900']}}" alt="{{$related->title}}">
                            </div>
                                @endif
                                @if(!empty($related->gallery2['images']['900']))
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="{{$related->gallery2['images']['900']}}" alt="{{$related->title}}">
                            </div>
                                    @endif
                        </div>
                    </div>
                    <div class="quick-view-list nav" role="tablist">
                        @if(!empty($related->images['images']['100']))
                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                            <img src="{{$related->images['images']['100']}}" alt="{{$related->title}}">
                        </a>
                        @endif
                            @if(!empty($related->gallery1['images']['100']))
                            <a href="#modal2" data-toggle="tab" role="tab">
                            <img src="{{$related->gallery1['images']['100']}}" alt="{{$related->title}}">
                        </a>
                            @endif
                            @if(!empty($related->gallery2['images']['100']))
                        <a href="#modal3" data-toggle="tab" role="tab">
                            <img src="{{$related->gallery2['images']['100']}}" alt="{{$related->title}}">
                        </a>
                                @endif
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{$related->title}}</h3>
                        <div class="price">
                            {{--<span class="new">$90.00</span>--}}
                            {{--<span class="old">$120.00  </span>--}}
                        </div>
                        {{--<div class="rating-number">--}}
                            {{--<div class="quick-view-rating">--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                                {{--<i class="pe-7s-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="quick-view-number">--}}
                                {{--<span>2 Ratting (S)</span>--}}
                            {{--</div>--}}
                        </div>
                    <p>{{$related->description}}</p>
                    <div class="quick-view-select">
                            <div class="select-option-part">
                                <label>سایز*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
                                    <option value="">900</option>
                                    <option value="">700</option>
                                </select>
                            </div>
                            <div class="select-option-part">
                                <label>رنگ*</label>
                                <select class="select">
                                    <option value="">- انتخاب کنید -</option>
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
                                <a class="btn-hover-black" href="#">+سبد</a>
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
<!-- modal -->
<div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-compare-width dir-rtl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#">
                    <div class="table-content compare-style table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th>
                                    {{--<a href="#">Remove <span>x</span></a>--}}
                                    <img src="{{$product->images['images']['300']}}" alt="">
                                    <p>{{$product->title}}</p>
                                    @if(!empty($product->price[0]->price))
                                    <span>{{$product->price[0]->price}}</span>
                                    @endif
                                    <a class="compare-btn" href="#">اضافه به سبد</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="compare-title"><h4>توضیحات </h4></td>
                                <td class="compare-dec compare-common">
                                    <p>{{$product->description}}</p>
                                </td>
                            </tr>
                            @foreach($values as $value)
                            <tr>
                                <td class="compare-title"><h4>{{$value->property->title}} </h4></td>
                                <td class="product-none compare-common">
                                    <p>{{$value->value}}</p>
                                </td>
                            </tr>
                                @endforeach
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
    //    var id;
        $(document).ready(function () {
            $(document).on('change','#size',function () {
                var id = $(this).val();
                // var link ="{{asset('admin/get/grouping')}}";
    
                var div = $(this).parent();
    //             var op = " ";
    //            $.ajax({
    //                type: 'get',
    //                url: '{{asset('admin/get/grouping')}}',
    //                data:{'id':id},
    //                success:function (data) {
    // //                   console.log("success");
    // //                   console.log(data);
    
    //                    op += '<option value="0" selected disabled>نوع محصول را انتخاب کنید</option>';
    //                    for (var i=0; i<data.length;i++){
    //                        op += '<option value="'+data[i].id+'">'+data[i].title+'</option>';
    
    //                    }
    
    //                    div.find('#category1').html(" ");
    //                    div.find('#category1').append(op);
    
    
    //                },
    //                error:function () {
                       
    //                }
    //            })
           });
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

<script>
    $(document).ready(function () {
            $(document).on('change','#prices',function () {
                var id = $(this).val();
                // var link ="{{asset('admin/get/grouping')}}";
                var pnum = "#n"+id;  
                var number = $(pnum).val();

                var base_url = window.location.origin;
                var host = window.location.host;
                var newLink = base_url+'/mybasket/add/'+id+'/'+number;
                
                console.log(newLink);

                $("#adding").attr("href", newLink);
                // var div = $(this).parent();
 
           });
        });
</script>

</body>
</html>
