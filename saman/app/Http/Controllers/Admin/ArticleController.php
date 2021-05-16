<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;
use function PHPSTORM_META\type;

class ArticleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست  مطالب';
        $articles = Article::latest()->paginate(20);
        return view('panel.article.all',compact('title','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return Category::all(2);
        $title = 'ثبت مطلب جدید ';
        $categories = Category::all();

        return view('panel.article.create', compact('categories','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $imagesUrl = $this->uploadPic($request->file('images'));


//        return $request->all();
        $galleryArr =array();
        for ($i=1; $i<13; $i++) {
            if ($request->file('gallery'.$i) != null) {
                $galleryUrl = $this->uploadGalleries($request->file('gallery'.$i),$i);
//                $imagesUrl = array_merge($imagesUrl,$galleryUrl);
          $galleryArr = array_merge($galleryArr,$galleryUrl);
//                return $galleryArr;
//                $galleryArr = array_merge($galleryUrl.$galleryArr);
            }
        }


//return gettype($galleryArr);
//        return $galleryArr;

//        return $imagesUrl;

//        return 'ok';
//        ['title','description','body','tags','images']
//        if (filesize(file.getClientOriginalName()) < 20000) {


          auth()->user()->article()->create(array_merge($request->all('title','description','body','tags','images','galleries'), ['images'=>$imagesUrl, 'galleries'=>$galleryArr]))->categories()-> sync($request->category);
//         $article =  auth()->user()->article()->create(array_merge($request->all('title', 'description', 'body', 'tags','images'), ['images' => $imagesUrl]));

//        return $article;

//        $article = categories() -> sync('category');

//        $article->categories()->attach($request->all('category'));


            return redirect(route('articles.index'));
//        }else{
//            echo "false";
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {



//        return (new Jalalian(1397, 6, 24))->toArray();
//        $final = '';
//         $date = Carbon::now();
//         foreach ($date as $day){
//             echo $day . '<br>';
//             $final . $day;
//         }
//

//        return Carbon::now();
//        "2018-12-18 13:01:59"

//        "2018-12-26 11:53:45"
//     return   $currentnum = DB::table('articles')->latest()->paginate(1)->pluck('created_at');

//        return 'l';
//
//        return $article->created_at;
//
//         return 'ok';
//     return   jdtogregorian(1395-05-8);
//        return jdtogregorian(CalendarUtils::strftime('Y-m-d',sorttotime('2016-05-8')));
//
//       return $article->created_at;
//        $tiem = '';
//       $date = \Morilog\Jalali\CalendarUtils::toGregorian(1395,2,10);
//       foreach ($date as $da){
//           echo $tiem = $tiem.$da;
//       }
//       echo '<br>';
//      return  $article->fromDateTime($tiem);
//       return 'true';
//        $sss= new Article('id',$article->id);
//        $sss = $article->categories()->get(['id','id']);
//        $sss = Article::with('categories')->findOrFail($article)->pluck('categories');
//        return $sss;

//        return $article;
//        return $article->setCreatedAt(Carbon::now());
//        2018-12-27 16:22:40
        $title = 'لیست  مطالب';

        $month_array = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%B');
            array_push($month_array,$month);
//            echo $month. '<br>';

        };
//        return $month_array;
//        $month_num = array(
//          1 => 11, 2 => 12, 3 => 1, 4 => 2, 5 => 3, 6 => 4, 7 => 5, 8 => 6, 9 => 7, 10 => 8, 11 => 9, 12 => 10
//        );

        $month_num = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%m');
            array_push($month_num,$month);
        };


     $current=    $article->categories()->pluck('id')->toArray();
        $categories = Category::all();


//return $current_category;
        return view('panel.article.edit' , compact('article','categories','current','month_array', 'month_num','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest|Request $request
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
//       return $year = $request->all('day');
//        $date = jdate();
//      return  jdate(checkDate(11, 11, 1397));
//        $s = $article->created_at;
//        $date = date_create_from_format('d/m/Y:H:i:s', $s);
//      return  $date->getTimestamp();
//        return $fff = $request->all('day');
        $selected_date =  $request->get('year'). '-' . $request->get('month') . '-' . $request->get('day');

     $gre_date =   CalendarUtils::toGregorian($request->get('year'),$request->get('month'),$request->get('day'));
    $date_time = json_encode($gre_date);
        $date_time = str_replace('[','',$date_time);
        $date_time = str_replace(']','',$date_time);
        $date_time = str_replace(',','-',$date_time);

         $time = strtotime($date_time);

        $newformat = date('Y-m-d',$time);
        $final_timestamp = $newformat. ' ' . $request->get('hour'). ':' . $request->get('min'). ':' . $article->created_at->format('i');


        $file = $request->file('images');
        $inputs = $request->all('title','description','body','tags','images','imagesThumb');
//        $inputs['created_at'] = ['2018-12-26 11:53:45'];
        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'));
        } else {
            $inputs['images'] = $article->images;
            $inputs['images']['thumb'] = $inputs['imagesThumb'];

        }

        $arr_gallery = $article->galleries;

        for ($i = 1; $i<13; $i++){
//            if ($request->file('gallery'.$i) != null) {

                $gallery = $request->file('gallery' . $i);
                if ($gallery) {

                   $gallerypic = $this->uploadGalleries($request->file('gallery' . $i), $i);

                    if($arr_gallery!=null){
                       $arr_gallery = array_merge($arr_gallery,$gallerypic);
                       $inputs = array_merge($inputs,$request->all('galleries'));
                       $inputs['galleries'] = $arr_gallery;
                   }else{
                        $inputs = array_merge($inputs,$request->all('galleries'));
                        $inputs['galleries'] = $gallerypic;
                    }
                }
//
        }
//        $article->setCreatedAt('2018-12-24');
        unset($inputs['imagesThumb']);
        $article->setCreatedAt($final_timestamp);
        $article->update($inputs);
        $article->categories()-> sync($request->category);

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }
}
