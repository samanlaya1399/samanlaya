<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    protected function uploadImages($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/images/{$year}/";
        $filename = $file->getClientOriginalName();
        $filename = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), -10) . Carbon::now()->timestamp . $filename;


//        $filesize = filesize($filename); // bytes
//        if ($filesize > 1048576){
//            echo "error large size";
//            return false ;
//        }

        $file = $file->move(public_path($imagePath) , $filename);

//        if(filesize($filename) < 20000) {
            $sizes = ["100","300", "900"];
            $url['images'] = $this->resize($file->getRealPath(), $sizes, $imagePath, $filename);
            $url['thumb'] = $url['images']['original'];


            return $url;

    }
    protected function upGall($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/gallery/{$year}/";
        $filename = $file->getClientOriginalName();
        $filename = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), -10) . Carbon::now()->timestamp . $filename;


//        $filesize = filesize($filename); // bytes
//        if ($filesize > 1048576){
//            echo "error large size";
//            return false ;
//        }

        $file = $file->move(public_path($imagePath) , $filename);

//        if(filesize($filename) < 20000) {
            $sizes = ["100","300", "900"];
            $url['images'] = $this->resize($file->getRealPath(), $sizes, $imagePath, $filename);
            $url['thumb'] = $url['images']['original'];


            return $url;

    }

    protected function uploadPic($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/blog/{$year}/";
        $filename = $file->getClientOriginalName();
        $filename = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), -10) . Carbon::now()->timestamp . $filename;


//        $filesize = filesize($filename); // bytes
//        if ($filesize > 1048576){
//            echo "error large size";
//            return false ;
//        }

        $file = $file->move(public_path($imagePath) , $filename);

//        if(filesize($filename) < 20000) {
        $sizes = ["100","300", "900"];
        $url['images'] = $this->resize($file->getRealPath(), $sizes, $imagePath, $filename);
        $url['thumb'] = $url['images']['original'];


        return $url;

    }

    protected function uploadGalleries($file,$number)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/gallery/{$year}/";
        $filename = $file->getClientOriginalName();
        $filename = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), -10) . Carbon::now()->timestamp . $filename;


//        $filesize = filesize($filename); // bytes
//        if ($filesize > 1048576){
//            echo "error large size";
//            return false ;
//        }

        $file = $file->move(public_path($imagePath) , $filename);

//        if(filesize($filename) < 20000) {
            $sizes = ["300","500"];
            $url['gallery'.$number] = $this->resize($file->getRealPath(), $sizes, $imagePath, $filename);
            $url['thumb'.$number] = $url['gallery'.$number][$sizes[0]];


            return $url;

    }

    protected function uploadAvatar($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/avatar/{$year}/";
        $filename = $file->getClientOriginalName();
        $filename = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), -10) . Carbon::now()->timestamp . $filename;


        $file = $file->move(public_path($imagePath) , $filename);

        $sizes = ["100","300"];
        $url['images'] = $this->resize($file->getRealPath(), $sizes, $imagePath, $filename);
        $url['thumb'] = $url['images']['original'];


        return $url;

    }

    private function resize($path , $sizes , $imagePath , $filename)
    {
        $images['original'] = $imagePath . $filename;
        foreach ($sizes as $size) {
            $images[$size] = $imagePath . "{$size}_" . $filename;

            Image::make($path)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;
    }

    protected function setCourseTime($episode)
    {
        $course = $episode->course;
        $course->time = $this->getCourseTime($course->episodes->pluck('time'));
        $course->save();
    }

    protected function getCourseTime($times)
    {
        $timestamp = Carbon::parse('00:00:00');
        foreach ($times as $t) {
            $time = strlen($t) == 5 ? strtotime('00:' . $t) : strtotime($t);
            $timestamp->addSecond($time);
        }
        return $timestamp->format('H:i:s');
    }
}
