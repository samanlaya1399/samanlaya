<div class="header-top-furniture wrapper-padding-2 res-header-sm">
    <div class="container-fluid">
        <div class="header-bottom-wrapper">
            <div class="logo-2 furniture-logo ptb-30">
                <a href="{{route('index.main')}}">
                    <img src="{{asset('assets/img/logo/saman55.png')}}" alt="سامان لعیا">
                </a>
            </div>
            <div class="menu-style-2 furniture-menu menu-hover">
                <nav>
                    <ul>
                        <li><a href="{{route('index.main')}}">صفحه اصلی</a>
                        </li>
                        <li><a href="#">دسته بندی</a>
                            <ul class="single-dropdown">
                            @foreach (\App\Grouping::all() as $group)
                           <li><a href="{{route('main.grouping',['slug'=>$group->slug])}}">{{$group->title}}</a></li>

                            @endforeach
                            </ul>
                        </li>
                        <li><a href="#">فروشگاه</a>
                            <div class="category-menu-dropdown shop-menu">
                            @foreach (\App\Grouping::inRandomOrder()->get() as $i=> $group)
                            @if ($i > 1)
                                @break
                            @endif
                                <div class="category-dropdown-style category-common2 mb-30">
                                    <h4 class="categories-subtitle"> {{$group->title}}</h4>
                                    <ul>
                                    @foreach ($group->type as $type)
                                        <li><a href="{{route('main.typing',['slug'=>$type->slug])}}"> {{$type->title}}</a></li> 
                                    @endforeach
                             
                                    </ul>
                                </div>
                            @endforeach
                         

                                <div class="mega-banner-img">
                                    <a href="#">
                                        <img src="{{asset('/assets/img/banner/39.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('blog.index')}}">اخبار</a>
                        </li>
                        <li><a href="{{route('main.contact')}}">تماس</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-cart">
                @if(auth()->check())
                <a class="icon-cart-furniture" href="{{route('main.cart')}}">
                    @else 
                    <a class="icon-cart-furniture" href="{{route('login')}}">
                    @endif
                    <i class="ti-shopping-cart"></i>
                    @if(auth()->check() && count(auth()->user()->basket()->get()) > 0)
                    <span class="shop-count-furniture green">{{count(auth()->user()->basket()->get())}}</span>
                    @endif
                </a>
                @include('Home.mainpages.section.sabad')
            </div>
        </div>
        <div class="row">
            <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{route('index.main')}}">خانه</a>

                            </li>
                            <li><a href="#">دسته بندی</a>
                                <ul>
                                    <li><a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(3)->first()->slug])}}">مردانه</a></li>
                                    <li><a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(1)->first()->slug])}}"> زنانه</a></li>
                                    <li><a href="{{route('main.grouping',['slug'=>\App\Grouping::whereId(2)->first()->slug])}}"> بچه گانه</a></li>
                                </ul>
                            </li>
                            <li><a href="#">فروشگاه</a>
                                <ul>
                                    <li><a href="#"> شلوار</a></li>
                                    <li><a href="#"> پیراهن</a></li>
                                    <li><a href="#"> کت</a></li>
                                    <li><a href="#"> زیرپوش</a></li>
                                    <li><a href="#"> کلاه</a></li>
                                    <li><a href="#"> جوراب</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blog.index')}}">اخبار</a>
                            </li>
                            <li><a href="#"> تماس  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom-furniture wrapper-padding-2 border-top-3 border-bottom-3">
    <div class="container-fluid">
        <div class="furniture-bottom-wrapper">
            <div class="furniture-login">
                <ul>
                    <li> <a href="{{route('login')}}">ورود </a></li>
                    <li><a href="{{route('register')}}">ثبت نام </a></li>
                </ul>
            </div>
            <div class="furniture-search">
                <form action="{{route('search.keyword',['keyword'=>''])}}" method="get">
                    {{csrf_field()}}
                    <input id="search" placeholder="متن جستجو" type="text">
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </form>
            </div>
            <div class="furniture-wishlist">
                <ul>
{{--                    <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> ویژگی ها</a></li>--}}
{{--                    <li><a href="#"><i class="ti-heart"></i> علاقه مندی</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="search-result" class="category-menu-dropdown shop-menu">
    <div class="category-dropdown-style category-common2 mb-30">
        <h4 class="categories-subtitle"> محصولات </h4>
        <ul id="ul-result">
            <li><a href="#"> اولی</a></li>
        </ul>
    </div>
</div>