<ul class="cart-dropdown">
    
    @if(auth()->check() )
    @php
    $baskets = auth()->user()->basket()->get();    
    @endphp
    @foreach($baskets as $basket)
    <li class="single-product-cart">
        <div class="cart-img">
            <a href="{{route('main.cart')}}">
                @if(!empty(\App\Product::where('id','=',$basket->price->product_id)->first()->images['images']['100']))
                <img src="{{\App\Product::where('id','=',$basket->price->product_id)->first()->images['images']['100']}}" alt="{{\App\Product::where('id','=',$basket->price->product_id)->first()->title}}">
                    @endif
            </a>
        </div>
        <div class="cart-title">
            <h5><a href="{{route('main.cart')}}"> {{\App\Product::where('id','=',$basket->price->product_id)->first()->title }}</a></h5>
            <h6><a href="{{route('main.cart')}}">{{$basket->price->color->title . ' ' . $basket->price->size->title}}</a></h6>
            <h6><a href="{{route('main.cart')}}">{{  '  تعداد '.$basket->number}}</a></h6>
            <span>{{$basket->price->price}}</span>
        </div>
        <div class="cart-delete">
            <a href="{{route('mybasket.remove',['id'=>$basket->id])}}"><i class="ti-trash"></i></a>
        </div>
    </li>
        @endforeach
        @endif

</ul>
