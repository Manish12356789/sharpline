<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\CompanyContact;
use App\Models\service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contacts = CompanyContact::first();
        $blogs = Blog::take(9);
        $services = service::take(6);

        view()->share(['contact'=>$contacts, 'blogs'=>$blogs, 'services'=>$services]);

    }
}
