<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Devision;
use App\Permission;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index()
    {
//        auth()->loginUsingId(3);
//        return auth()->user();
//        return User::whereEmail('موسوی')->first()->roles()->get();
//        Role::create([
//            'name' => 'manager',
//            'label' => 'مدیر سایت'
//        ]);

//        return auth()->user()->roles()->sync(3);
//        return auth()->user()->roles()->get();
//        return Role::whereId(1)->first()->permissions()->sync([1,2]);
//        dd(auth()->user()->hasRole(Permission::whereId(1)->first()->roles));

        $picpost = new Category(['id'=>4]);
        $picpost = $picpost->articles()->latest()->paginate(4);

        $articles = Article::latest()->paginate(20);
        $title = 'داشبورد';



        return view('panel.dashboard', compact('picpost','articles','title'));
    }


    public function slider()
    {
         $currentnum = DB::table('settings')->latest()->paginate(1)->pluck('sliders');

        $posts = new Category(['id'=>1]);
        $posts = $posts->articles()->latest()->paginate($currentnum[0]);
        return view('Admin.slider.slider',compact('posts','currentnum'));
    }

   

    public function storeslidernumber(Request $request)
    {
        $int = filter_input(INPUT_POST, 'slidernum', FILTER_VALIDATE_INT);
        if ($int <10 && $int>0) {
            DB::table('settings')->insert(
                ['sliders' => $int]
            );
            return back();
        }
    }



    public function uploadImageSubject()
    {
        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp',
        ]);

        $year = Carbon::now()->year;
        $imagePath = "/upload/editor/{$year}/";

        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();

        if(file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }

        $file->move(public_path($imagePath) , $filename);
        $url = $imagePath . $filename;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
    }


//
//    public function searching(Request $request)
//    {
//        $data = Article::search($request)->latest()->get();
//        return json_encode($data);
//    }
}
