<?php
namespace App\Providers;
use App\Chees;
use App\Chesshistory;
use Illuminate\Support\Facades\DB;
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
        DB::listen(function ($sql){
            error_log('Url: '. \Request::fullUrl().' Query: '.$sql->sql);
        });

        view()->composer('layouts.frontend.frontend', function($view){
            $view->with('histories', Chees::history());
        });
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}