<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سامان لعیا-سبد خرید</title>
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
<div class="cart-main-area pt-95 pb-100" id="app">
    <div class="container">
        <div class="row dir-rtl">
        
            <div class="container dir-rtl">
                <ul class="progressbar">
                    <li class="active">سبد خرید</li>
                    <li >اطلاعات ارسال</li>
                    <li >پرداخت</li>
                    <li >نتیجه پرداخت</li>
                </ul>
            </div>
            {{-- <h1>@{{ number | currency }}</h1> --}}
            <my-cart></my-cart>
        </div>
    </div>
  {{-- <my-button @increment="totalIincrement" ></my-button>
  <my-button  @increment="totalIincrement" ></my-button>
  <my-button  @increment="totalIincrement" ></my-button> --}}

  {{-- <my-basket>  </my-basket> --}}
{{-- <h2>@{{ total }}</h2>
<h4>@{{ value }}</h4> --}}
{{-- <h2 v-for="">@{{ info }}</h2> --}}
<ul>
    {{-- <li v-for=" file in info.data "> @{{file.price_id}}</li> --}}
</ul>
</div>
<!-- shopping-cart-area end -->

@include('Home.mainpages.section.footer')

<!-- all js here -->
@include('Home.mainpages.section.script')
<script src="{{asset('/js/vue.js')}}"></script>
<script src="{{asset('/js/axios.min.js')}}"></script>

<script>
window.Event = new Vue();

var cart = {
    props: ['pr'],
    
	data: function() {
		return {
            email: 'info@mycompany.com',
            removeUrl: '/mybasket/remove/',
            ProductUrl: '/product/',
            info : [],
            numbers : 0,
            price: 0,
            totalPrice: 0,
            paymentPrice: 0,
            bill : [],
            test : 2,
            min : 1,
            stock : 100,
            major: 0,
            majorPrice: 0,
            majarStock: 0,
            currentPrice:0,
            checked : false,
            firstRun : true,
            dataLenght: 0,

		};
    },created() {
        this.connectign();
        this.getFirstSum();
     
  

    }
    ,mounted() {
        // this.getSum();
      

    },beforeUpdate() {
       
    },
    updated() {
        // this.getSum();
        this.ConvertNumberToPersion();
       

    },
    
    methods: {

        connectign(){  
      axios
      .get('/mycart')
      .then(response => this.info = response.data)
      .catch(error => console.log(error));
    
        },

        getSum(num){ 
            this.paymentPrice = 0;
            var inputs = $(".tprice");
            for(var i = 0; i < inputs.length; i++){
                this.paymentPrice += parseInt($(inputs[i]).val()); 
            }
        },checkMinMax: function (event){
            // if(this.numbers > this.stock){
            event.preventDefault();
            // }

        }
        ,
        getFirstSum(){
            this.paymentPrice = {{$sum}};
                
        },inputStyle(){
            $("input[type='number']").inputSpinner();
        }
        ,setNum(number){
            this.numbers = number;
            
        } ,
        setFirstPrice(num){
            this.currentPrice = parseInt(num);
        },
        changeMajor(price,majorPrice){
            if(this.checked == false){
                this.currentPrice = majorPrice;
                this.checked = true;
                console.log(majorPrice+'if')
                this.$set('2222');
            }else{
                this.currentPrice = price;
                this.checked = false;
                console.log(price+'else')
            }
        }
        ,
        ConvertNumberToPersion(){
            let persian = { 0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹' };
        function traverse(el) {
         
         
            if (el.nodeType == 3) {
                var list = el.data.match(/[0-9]/g);
                if (list != null && list.length != 0) {
                    for (var i = 0; i < list.length; i++)
                        el.data = el.data.replace(list[i], persian[list[i]]);
                }
            }
            for (var i = 0; i < el.childNodes.length; i++) {
                traverse(el.childNodes[i]);
            }
        }
        traverse(document.body);
        }
        
    
    },
	template: `
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">پیش فاکتور</h1>
                <form action="/shipping" method="post" >
                    {{ csrf_field() }}
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>حذف</th>
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>قیمت</th>
                                <th>عمده فروشی</th>
                                <th>تعداد</th>
                                <th>جمع</th>
                            </tr>
                            </thead>
                            <tbody>
                         
                            <tr v-for="(pr, index) in info" v-bind:key="pr.id" >
                                <td class="product-remove"><a :href="removeUrl+pr.id"><i class="pe-7s-close"></i></a></td>
                                <td class="product-thumbnail">

                                    <a :href="ProductUrl+pr.price.product.slug"><img :src="pr.price.product.images['images']['100']" alt="#"></a>

                                </td>
                                <td class="product-name"><a :href="ProductUrl+pr.price.product.slug" v-text="pr.price.product.title+ ' (' + pr.price.color.title +' '+ pr.price.size.title + ')'">title </a></td>
                                <td class="product-price-cart">

                                    <input   v-model.number="min=pr.price.minimum" type="hidden" autocomplete="off">
                                    <input   v-model.number="stock=pr.price.stock" type="hidden" autocomplete="off">
                                    <input   v-model.number="major=pr.price.major" type="hidden" autocomplete="off">
                                    <input   v-model.number="majarStock=pr.price.major_stock" type="hidden" autocomplete="off">
                                    <input   v-model.number="price = pr.price.price" type="hidden" autocomplete="off">
                                    <input   v-model.number="majorPrice = pr.price.discount" type="hidden" autocomplete="off">


                                    <span class="amount" v-text="currentPrice = price" ></span>
                                    </td>
                                    <td class="product-name">
                                        <input v-if="majarStock == 0" type="checkbox" id="checkbox" disabled  title="فقط تک فروشی " >
                                        <input v-else type="checkbox" id="checkbox" disabled checked title=" فقط عمده فروشی" >
                                        
                                        </td>
                                <td class="product-quantity">
                           

                                    <input :name="'id'+index"  :value="pr.id" type="hidden" autocomplete="off">

                                    <input :name="'number'+index" @change="getSum(numbers)"  @keypress="checkMinMax($event)" :min="min" :max="stock" :step="min"  v-model.number="numbers = pr.number" type="number" autocomplete="off">
                                 
                               
                                </td>

                                <td class="product-subtotal" v-text="totalPrice = numbers * price" >
                                  
                                    </td>
                                    <input class="tprice"  v-model.number="totalPrice" type="hidden" autocomplete="off">
                                    <input name="lenght"  v-model.number="dataLenght = info.length" type="hidden" autocomplete="off">
                                    
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                 <h2> صورتحساب</h2>
                                <ul>
                                    {{--<li>بدون تخفیف<span>100.00</span></li>--}}
                                    <li>جمع کل  <span v-text="paymentPrice">
                                      
                                        </span></li>
                                </ul>
                                 <button type="submit">مرحله بعد</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
	`
};

var vm = new Vue({
   el: '#app',
   components:{
       'myCart': cart
   },
   data() {

       return {
           gh: 22,
           info: null,
       }

   },created() {

    //    this.getData();

   }, methods: {

       getData () {
        axios
      .get('/mycart')
      .then(response => (this.info = response.data))
      .catch(error => console.log(error))    ;
       },
       
   }
});
   

</script>


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
