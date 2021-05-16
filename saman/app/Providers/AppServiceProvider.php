<?php

namespace App\Providers;

use App\Comment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('Admin.section.header', function ($view){
            $unsaccesful = Comment::where('approved',0)->count();
           $view->with(['unsaccesfulCount' => $unsaccesful]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // solution to upload files in the public_html not before it
//        $this->app->bind('path.public', function() {
//            return base_path().'/public_html';
//        });
    }
}
