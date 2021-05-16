<?php

namespace App\Http\Controllers;



use App\Type;
use App\User;
use App\Price;
use App\Value;
use App\Basket;
use App\Detail;
use App\Factor;
use SoapClient;
use App\Address;
use App\Article;
use App\Comment;
use App\Message;
use App\Payment;
use App\Product;
use App\Category;
use App\Grouping;
use Carbon\Carbon;
use App\Information;
use App\TempProducts;
use App\ActivationCode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('throttle');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $latest = Product::with('price')->latest()->paginate(8);
        $models = Product::with('price')->inRandomOrder()->paginate(7);
        $types = Type::inRandomOrder()->take(5)->get();
        $firsts = Product::with('price')->latest()->where('type_id','=',$types[0]->id)->paginate(8);
        $seconds = Product::with('price')->latest()->where('type_id','=',$types[1]->id)->paginate(8);
        $thirds = Product::with('price')->latest()->where('type_id','=',$types[2]->id)->paginate(8);
        $forths = Product::with('price')->latest()->where('type_id','=',$types[3]->id)->paginate(8);
        $fifths = Product::with('price')->latest()->where('type_id','=',$types[4]->id)->paginate(8);
      

        $sliders = new Category(['id'=>1]);
        $sliders = $sliders->articles()->latest()->paginate(2);
        $reports = new Category(['id'=>2]);
        $reports = $reports->articles()->latest()->paginate(6);

        return view('Home.mainpages.home',compact('latest','models','firsts','seconds','thirds'
            ,'forths','fifths','sliders','reports','baskets','types'));
    }

    public function activation()
    {
        return view('auth.activation');
    }

    public function activecode(Request $request)
    {

        $ActivationCode = ActivationCode::where([['code','=',$request->code],['used','=',0]])->first();
        if ( ! $ActivationCode){
            dd('dosnot');
        }
        if ($ActivationCode->expire < Carbon::now()){
            dd('expire');
        }
        if ($ActivationCode->used == true){
            dd('used');
        }

        $ActivationCode->update([
            'used'=>true
        ]);

        if ($ActivationCode->user->active == 1){
            $code = $ActivationCode->code;

            return view('auth.passwords.resetpass',compact('code'));
        }else{

            $ActivationCode->user->update([
                'active'=>true
            ]);

            auth()->loginUsingId($ActivationCode->user->id);
            return redirect(route('index.main'));
        }

    }

    public function singlepage($slug)
    {
        $result = Information::where('slug','=',$slug)->first();

   

        return view('Home.mainpages.singlepos', compact('result','baskets'));
    }

    public function blog()
    {
        $posts = Article::latest()->paginate(9);
        return view('Home.mainpages.blog',compact('posts'));
    }

    public function product($slug)
    {
         

        $product = Product::with('price')->where('slug','=',$slug)->first();
        $prices = $product->price()->where('stock','>',0)->get();
       
        $comments = $product->comments()->where('approved',1)->where('parent_id',0)->latest()->get();

        $properties = $product->type->property()->get();
        $values = $product->value()->get();

        $relateds = new Type(['id'=>$product->type->id]);

        $values = Value::where('product_id','=',$product->id)->get();

    

        $relateds = $relateds->product()->with('price')->latest()->get();
        return view('Home.mainpages.product',compact('product','relateds','values','baskets','prices','properties','values','comments'));
    }

    public function cart()
    {
    //  return   $baskets = Basket::where('user_id','=',auth()->id())->with('price.product','price.color','price.size')->get();
    
    $sum=0;

    if (auth()->check()){
            $baskets = Basket::where('user_id','=',auth()->id())->get();
            foreach ($baskets as $basket){
                $sum += $basket->price->price * $basket->number;
            }
        }else{
            $baskets = null;
        }
        
     


        return view('Home.mainpages.cart',compact('baskets','sum'));
    }

    public function myBasket(){
        $baskets = null;
        $baskets = Basket::where('user_id','=',auth()->id())->with('price.product','price.color','price.size')->get();
        
        return $baskets;
    }

    public function shipping(Request $request)
    {

    //  $xxx = new TempProducts();
    //  $xxx->setId(778707);
    //  $xxx->setCount(2);
    //  $xxx->setDiscount(0);

//     dd($xxx);
        // $po = array($xxx);
//        array_push($po,$xxx);

//         $products[]=
//             [
//                 'Id' => 'EB-921553', // Product id in ebazaar
//                 'Count' => 1, // order line quantity
//                 'DisCount' => 0 // No Discount
//             ];

//      $kkk = array($xxx);

//      $uuu = array([
//         'Id' => intval(921553),
//          'Count'=>intval(1),
//          'DisCount'=>intval(0),
// ]);
//     return array($xxx);


    //    dd($this->addParcel($uuu));

         for ($i = 0; $i<$request->get('lenght'); $i++){
            $id = 'id' . $i;
            $num = 'number' . $i;
            $basket = Basket::find($request->get($id));
            $basket->update(['number'=>$request->get($num)]);
         }
      
        $user = User::find(auth()->id());
        $address = $user->address()->latest()->take(2)->get();
        return view('Home.mainpages.shipping',compact('baskets','address'));
    }

    public function setaddress(Request $request)
    {

        $addss = $request->input('address_id');
        if ($addss == 'new'){

            $minutes = 60;
            $response = new Response('Set Cookie');
            $response->withCookie(cookie('name', 'MyValue', $minutes));
        }else{

        }
//        return  $value = $request->cookie('name');
    }

    public function payment()
    {

    
        return view('Home.mainpages.payment',compact('baskets'));
    }

    public function factor(Request $request)
    {
        $baskets = Basket::where('user_id','=',auth()->id())->get();
        $sum=0;
        foreach ($baskets as $basket){
            $sum += $basket->price->price * $basket->number;
        }


        $addss = $request->input('address_id');
        if ($addss == 'new'){
          $ads =  auth()->user()->address()->create(array_merge($request->all('city','province','post_code','first_name','last_name','mobile','address','phone')));
            $address = $ads->id;
        }else{
            $address = $addss;
        }

        $details = array();
        foreach ($baskets as $basket) {
            $detail = array(
                'user' => auth()->user()->name,
                'product' => $basket->price->product->title,
                'stock' => $basket->price->color->title.' '.$basket->price->size->title,
                'price' => $basket->price->price,
                'number' => $basket->number
            );
            array_push($details,$detail);
        }
        $factor = Factor::create(['user_id'=>auth()->id(),'sum'=>$sum,'detail'=>$details,'count'=>count($baskets),'address_id'=>$address,'expire'=>Carbon::now()->addHours(24)]);


        foreach ($baskets as $basket){
            Detail::create(['user_id'=>auth()->id(),'factor_id'=>$factor->id,'stock_id'=>$basket->price->id,'number'=>$basket->number]);

            $basket->delete();
        }


        $factor->status()->create(['payment'=>Carbon::now(),'status'=>false]);


        $MerchantID = 'e719e426-e505-11e9-834b-000c295eb8fc'; //Required
        $Amount = $sum; //Amount will be based on Toman - Required
        $Description = 'توضیحات تراکنش تستی'; // Required
        $Email = 'UserEmail@Mail.Com'; // Optional
        $Mobile = '09123456789'; // Optional
        $CallbackURL = route('main.checker'); // Required


        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

//Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {

            auth()->user()->payment()->create([
                'resnumber'=> $result->Authority,
                'price' => $Amount,
                'factor_id'=>$factor->id

            ]);
            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
//برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
//            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
            $status='ERR: '.$result->Status;
            auth()->user()->payment()->create([
                'resnumber'=> $result->Authority,
                'price' => $Amount,
                'factor_id'=>$factor->id,
                'result'=>$status

            ]);
        }


        return redirect(route('index.main'));
    }

    public function checker()
    {


        $Authority = request('Authority');
        $payment = Payment::whereResnumber($Authority)->firstOrFail();

        $MerchantID = 'e719e426-e505-11e9-834b-000c295eb8fc'; //Required


        if ($_GET['Status'] == 'OK') {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price,
                ]
            );

            if ($result->Status == 100) {
                $status = $result->RefID;
                $payment->update([
                    'status'=>1,
                    'result'=>$status
                ]);
                $payment->factor->update([
                    'status'=>1
                ]);
                $message='پرداخت موفق';

//                $fct = $payment->factor()->first();
//                $dtls = Detail::whereFactor_id($fct->id)->get();
//                $productList = array();
//                foreach ($dtls as $dtl){
//                    $products[]=
//                        [
//                            'Id' => $dtl->price->post_id, // Product id in ebazaar
//                            'Count' => $dtl->number, // order line quantity
//                            'DisCount' => 0 // No Discount
//                        ];
//                    array_push($productList,$products);
//                }


//            return    dd($this->addParcel($products));



            } else {
                $status = $result->Status;
                $payment->update([
                    'result'=>$status
                ]);
                $message='پرداخت ناموفق';
            }
        } else {
            $status = 'canceled by user';
            $payment->update([
                'result'=>$status
            ]);
            $message='پرداخت ناموفق';
        }



            return view('Home.mainpages.respay',compact('baskets','status','message'));
    }



    public function group($slug)
    {
    

        $grouping = Grouping::where('slug','=',$slug)->first();
        $types = $grouping->type()->get();
        if (sizeof($types)>1){
           $all = Product::with('price')->where('type_id','=',$types[0]->id);
           for ($i = 1; $i<sizeof($types); $i++){
               $all->orWhere('type_id','=',$types[$i]->id);
           }
            $all =  $all->latest()->paginate(12);
        }else{
          if (!empty($types[0])){
              $all = Product::with('price')->where('type_id','=',$types[0]->id)->latest()->paginate(12);
          }else{
              $all = null;
          }
        }

        $common = Product::with('price')->inRandomOrder()->paginate(4);
        $tags = explode(",", $common[0]->tags);


        return view('Home.mainpages.grouping',compact('all','slug','types','common','baskets','tags'));
    }

    public function typing($slug)
    {
    

        $grouping = Type::where('slug','=',$slug)->first();
        $allGroup = $grouping->grouping; 

        $types = $allGroup->type()->get();
        $all = Product::with('price')->where('type_id','=',$grouping->id)->latest()->paginate(12);

        $common = Product::with('price')->inRandomOrder()->paginate(4);
        $tags = explode(",", $common[0]->tags);


        return view('Home.mainpages.grouping',compact('all','slug','types','common','baskets','tags'));
    }

    public function ranging(Request $request)
    {
    

       $pieces = explode(" ", $request->get('price'));
       $slug = 'از'. $pieces[0] .' تا '. $pieces[2];
       $types = Type::latest()->take(5)->get();
        // $stock = Price::whereBetween('price',[$pieces[0],$pieces[2]])->get();

        // $grouping = Type::where('slug','=',$slug)->first();
        // $allGroup = $grouping->grouping; 

        // $types = $allGroup->type()->get();

    
        $all = Product::latest()->whereHas('price', function ($query) use($pieces) {
            $query->whereBetween('price',[$pieces[0],$pieces[2]]);
        })->latest()->paginate(12);

        $common = Product::with('price')->inRandomOrder()->paginate(4);
        $tags = explode(",", $common[0]->tags);


        return view('Home.mainpages.grouping',compact('all','slug','types','common','baskets','tags'));
    }

    public function keyword(Request $request,$keyword)
    {
    
       

      if($keyword !== ' '){
           $slug = $keyword;
      }else{
          $slug = $request->get('keyword');
      }
    
       $types = Type::latest()->take(5)->get();

    
        $all = Product::where('tags','LIKE','%'.$slug.'%')->latest()->paginate(12);

        $common = Product::with('price')->inRandomOrder()->paginate(4);
        $tags = explode(",", $common[0]->tags);

    

        return view('Home.mainpages.grouping',compact('all','slug','types','common','baskets','tags'));
    }


    public function contact()
    {
   
        $result = Information::where('key','contact')->first();

        return view('Home.mainpages.contact',compact('baskets','result'));
    }



    public function lst()
    {
        return view('Home.mainpages.lst');
    }


    public function showpostclient($slug)
    {

        $result = Article::where('slug','=',$slug)->first();
        $related =  new Category(['id'=>2]);
        $related = $related->articles()->latest()->where('id','!=',$result->id)->paginate(3);
        $comments = $result->comments()->where('approved',1)->where('parent_id',0)->latest()->get();
        $artcile_categories = $result->categories()->pluck('id')->toArray();

//        $latest = Article::latest()->paginate(3);

//        return  explode(',', $result->tags);

        $categories = Category::all()->pluck('name')->toArray();
         $tags = Article::latest()->paginate(2)->pluck('tags');
         $tag_exploded = array();
         foreach ($tags as $tag=>$name){
              $tag_exploded = array_merge($tag_exploded,explode(',',$name));
         }

        $article_tags=array();
         $article_tags = array_merge($article_tags,explode(',',$result->tags));

        return view('Home.mainpages.post',compact('result','comments','categories', 'tag_exploded','article_tags','related'));
    }



    public function news()
    {

        $news = new Category(['id'=>2]);
        $news = $news->articles()->latest()->paginate(9);
        return view('Home.mainpages.archive',
            compact('news'));
    }

    public function gallery(){
        $news = new Category(['id'=>4]);
        $news = $news->articles()->latest()->paginate(9);
        return view('Home.mainpages.gallery',compact('news'));
    }

    public function publisher()
    {
        $productions = new Category(['id'=>3]);
        $productions = $productions->articles()->latest()->paginate(16);
        return view('Home.mainpages.publisher',
            compact('productions'));
    }
  public function congress(Request $request)
    {
        $dev_name = 'App\ ' . $request['dev'] ;
        $dev_name = str_replace(' ','',$dev_name);
        $devisions = $dev_name::latest()->paginate(9);

        return view('Home.mainpages.devision',compact('devisions'));
    }

    public function comment()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'body' => 'required|min:5'
        ]);
//        return \request()->all();

        $ip = \request()->getClientIps();

        Comment::create(array_merge(\request()->all('parent_id',
            'commentable_id','commentable_type','name','email','mobile','website','body'),['ip'=>$ip[0]]));
//        return \request()->getClientIps();
        return 'با موفقیت ثبت شد';
    }

    public function getmessage()
    {
        $this->validate(request(),[
            'body' => 'required|min:5'
        ]);
        $ip = \request()->getClientIps();
        Message::create(array_merge(\request()->all(
            'name','subject','email','website','body','mobile')
        ,['ip'=>$ip[0]]));
        return 'با موفقیت ارسال شد';
    }

    public function searchProduct()
    {
        $keyword = \request()->keyword;
        $products = Product::where('title','LIKE','%'.$keyword.'%')->orWhere('description','LIKE','%'.$keyword.'%')->orWhere('body','LIKE','%'.$keyword.'%')->get();

        return $products;
    }


    public function addParcel($productList)
    {

     
        $username = 'samanl1234';
        $password = 'Samanl@123';

        //Create a web service proxy using SoapClient
        $client = new SoapClient('http://svc.ebazaar-post.ir/EshopService.svc?WSDL');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;

        //Add parcel and get 20-digit tracking code
        $add_parcel_result = $client -> AddParcel ([
            'username' => $username,
            'password' => $password,
            'productsId' => $productList,
            'cityCode' => 1,
            'serviceType' => 2, // pishtaz
            'payType' => 88, // free shipping
            'registerFirstName' => 'مهدی', // first name
            'registerLastName' => 'سمیعیان', // last name
            'registerAddress' => 'قم ادرست', //postal address
            'registerPhoneNumber' => '37400076', // fixed line telephone number
            'registerMobile' => '09127591542', // cell number
            'registerPostalCode' => '3713176951' // 10-digit postcode
        ]);

        return $add_parcel_result;
    }


    public function getState()
    {
        $username = 'samanl1234';
        $password = 'Samanl@123';

        //Create a web service proxy using SoapClient
        $client = new SoapClient('http://svc.ebazaar-post.ir/EshopService.svc?WSDL');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;


    }

    public function getProducts(){
            $this->products[] = [
                'Id' => 778707, // product price (in IRR Rials)
                'Count' => 1, // product price (in IRR Rials)
                'DisCount' => 0,  // product weight (in gram)
            ];

        return $this->products;
    }

}
