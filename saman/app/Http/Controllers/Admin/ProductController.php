<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Color;
use App\Events\NotifyStock;
use App\Grouping;
use App\Notify;
use App\Price;
use App\Product;
use App\Property;
use App\Size;
use App\stuff;
use App\Type;
use App\Value;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use PhpParser\Node\Expr\Cast\Object_;
use SoapClient;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست محصولات';
        $products = Product::latest()->paginate(20);

        return view('panel.product.all',compact('title','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'درج محصول';
        $groupings = Grouping::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('panel.product.create',compact('title','groupings','brands','colors','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        return $request;


        $imagesUrl = $this->uploadImages($request->file('images'));
        $gallery1 = null;
        $gallery2 = null;
        $gallery3 = null;
        $gallery4 = null;
        for ($i=1; $i<5; $i++){
            $gall = 'gallery'.$i;
            $input = $request->file($gall);
            if (isset($input)){
                $gall = null;
                $gall  = $this->upGall($input);
                switch ($i){
                    case 1:
                        $gallery1 = $gall;
                        break;
                    case 2:
                        $gallery2 = $gall;
                        break;
                    case 3:
                        $gallery3 = $gall;
                        break;
                    case 4:
                        $gallery4 = $gall;
                        break;
                }
            }
        }


        $product = auth()->user()->product()->create(array_merge($request->all('title','description','body','tags','images','type_id','brand_id','weight','gallery1','gallery2','gallery3','gallery4'),
            ['images'=>$imagesUrl,'gallery1'=>$gallery1,'gallery2'=>$gallery2,'gallery3'=>$gallery3,'gallery4'=>$gallery4]));

        for ($i=0;$i<count(Property::where('type_id','=',$request->type_id)->get());$i++) {
            $value = 'value'.$i;
            $property = 'property'.$i;
            if (!empty($request->$value)) {
                Value::create(['product_id' => $product->id, 'property_id' => $request->$property, 'value' => $request->$value]);
            }
        }
        for ($i=1; $i<=$request->numprice; $i++){
            $pr = 'price'.$i;
            $cl = 'color_id'.$i;
            $sz = 'size_id'.$i;
            $st = 'stock'.$i;
            $stm= 'major_stock'.$i;
            $mn = 'minimum'.$i;
            $mj = 'major'.$i;
            $ds = 'discount'.$i;


            if ( isset($request->$pr) and isset($request->$cl) and isset($request->$sz) and isset($request->$st) ) {
                $post_id =   $this->addpost($product->title.' '.Color::find($request->$cl)->title.' '.Size::find($request->$sz)->title,$request->$pr,$product->weight,$request->$st);


              $price = Price::create(['product_id' => $product->id, 'color_id' => $request->$cl, 'size_id' => $request->$sz,
                    'price' => $request->$pr, 'stock' => $request->$st,'major_stock'=>$request->$stm,'minimum'=>$request->$mn,'major'=>$request->$mj,'discount'=>$request->$ds,'post_id'=>$post_id]);



            }
        }


        return redirect(route('product.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $title = 'ویرایش محصول';
        $groupings = Grouping::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        $types = Type::where('group_id','=',$product->type->grouping->id)->get();
        $values = $product->value()->get();
        $prices = $product->price()->get();
        $properties = $product->type->property()->get();



        return view('panel.product.edit',compact('product','title','groupings','brands','colors',
            'sizes','types','prices','values','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {


        $file = $request->file('images');
        $inputs = $request->all('title','description','body','tags','images','type_id','brand_id','imagesThumb','gallery1','gallery2','gallery3','gallery4','weight');
//        $inputs['created_at'] = ['2018-12-26 11:53:45'];
        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'));
        } else {
            $inputs['images'] = $product->images;
            $inputs['images']['thumb'] = $inputs['imagesThumb'];
        }


        for ($i=1; $i<5; $i++){
            $gall = 'gallery'.$i;
            $input = $request->file($gall);
            if (isset($input)){
                $inputs[$gall] = null;
                $inputs[$gall]  = $this->upGall($input);
                switch ($i){
                    case 1:
                        $gallery1 = $gall;
                        break;
                    case 2:
                        $gallery2 = $gall;
                        break;
                    case 3:
                        $gallery3 = $gall;
                        break;
                    case 4:
                        $gallery4 = $gall;
                        break;
                }
            }else{
                $inputs[$gall] = $product->$gall;
            }
        }



        unset($inputs['imagesThumb']);
        $product->update($inputs);


        $all_id = $product->price()->get();
        foreach ($all_id as $ad){
            $this->editpost($ad->post_id,$inputs['weight']);
        }

        foreach ($product->value()->get() as $price){
             $price->delete();
        }
        for ($i=0;$i<count(Property::where('type_id','=',$request->type_id)->get());$i++) {
            $value = 'value'.$i;
            $property = 'property'.$i;
            if (!empty($request->$value)) {

                Value::create(['product_id' => $product->id, 'property_id' => $request->$property, 'value' => $request->$value]);
            }
        }

//        foreach ($product->price()->get() as $price){
//             $price->delete();
//        }

        for ($i=1; $i<=$request->numprice; $i++) {
            $pid = 'price_id' . $i;
            $pr = 'price' . $i;
            $cl = 'color_id' . $i;
            $sz = 'size_id' . $i;
            $st = 'stock' . $i;
            $stm= 'major_stock'.$i;
            $mn = 'minimum'.$i;
            $mj = 'major'.$i;
            $ds = 'discount'.$i;
          

            if (isset($request->$pr) and isset($request->$cl) and isset($request->$sz) and isset($request->$st)) {
                $thisprice = Price::find($request->$pid);
                if (!empty($thisprice)){

                    $thisprice->update(['product_id' => $product->id, 'color_id' => $request->$cl, 'size_id' => $request->$sz,
                        'price' => $request->$pr, 'stock' => $request->$st,'major_stock'=>$request->$stm,'minimum'=>$request->$mn,'major'=>$request->$mj,'discount'=>$request->$ds]);
                    $thisprice->increment('version');
                    $this->editprice($thisprice->post_id,$request->$pr);
                }else{

                    $post_id =   $this->addpost($product->title.' '.Color::find($request->$cl)->title.' '.Size::find($request->$sz)->title,$request->$pr,$product->weight,$request->$st);
                    Price::create(['product_id' => $product->id, 'color_id' => $request->$cl, 'size_id' => $request->$sz,
                        'price' => $request->$pr, 'stock' => $request->$st,'major_stock'=>$request->$stm,'minimum'=>$request->$mn,'major'=>$request->$mj,'discount'=>$request->$ds,'post_id'=>$post_id]);

                }

            }
        }

        $prices = $product->price()->get();
        foreach ($prices as $pr) {
            if ($pr->stock > 0){
                $notify = Notify::where([['used', false], ['product_id', $product->id]])->get();
                if (sizeof($notify) > 0) {
                    foreach ($notify as $ntf)
                        event(new NotifyStock($ntf->user, $ntf->product));
                    $ntf->update(['used'=>true]);
                }
                break;
            }

        }

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $product->value()->delete();
        $product->price()->delete();
        return redirect(route('product.index'));
    }

    public function grouping()
    {
        $id = \request()->id;
        return   $types = Type::where('group_id','=',$id)->get();
        return response()->json($groupings);
        return 'ok';
    }

    public function property()
    {
        $id = \request()->id;
        return $properties = Property::where('type_id','=',$id)->get();
    }

    public function price()
    {
        $colors = Color::all();
        $sizes = Size::all();

        return compact('colors','sizes');
    }


    public function addpost($name,$price,$weight,$count)
    {
        $username = 'samanl1234';
        $password = 'Samanl@123';

        //Create a web service proxy using SoapClient
        $client = new SoapClient('http://svc.ebazaar-post.ir/EshopService.svc?WSDL');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;

        $result = $client -> AddStuff ([
            'username' => $username,
            'password' => $password,
            'name' => $name,
            'price' => $price, // product price (in IRR Rials)
            'weight' => $weight,  // product weight (in gram)
            'count' => $count, // stock count
            'description' => 'تست', // product description
            'percentDiscount' => 0, // product discount
        ]);

     return   $stuff_id=(int)$result->AddStuffResult;

    }

    public function editpost($id,$weight)
    {
        $username = 'samanl1234';
        $password = 'Samanl@123';

        //Create a web service proxy using SoapClient
        $client = new SoapClient('http://svc.ebazaar-post.ir/EshopService.svc?WSDL');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;


        $result = $client -> EditStuffWeight ([
            'username' => $username,
            'password' => $password,
            'stuffId'=>$id,
            'weight'=>$weight
        ]);

    }

    public function editprice($id,$price)
    {
        $username = 'samanl1234';
        $password = 'Samanl@123';

        //Create a web service proxy using SoapClient
        $client = new SoapClient('http://svc.ebazaar-post.ir/EshopService.svc?WSDL');
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;


        $result = $client -> EditStuffPrice ([
            'username' => $username,
            'password' => $password,
            'stuffId'=>$id,
            'price'=>$price
        ]);

    }



    
    
}
