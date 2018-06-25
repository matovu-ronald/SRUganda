<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('welcome', 'App\Http\ViewComposers\HomeComposer');
        \View::composer(['welcome', 'pages.blog', 'pages.single-blog'], 'App\Http\ViewComposers\BlogComposer');
        \View::composer('pages.gallery', 'App\Http\ViewComposers\GalleryComposer');
        \View::composer('pages.events', 'App\Http\ViewComposers\EventsComposer');
        \View::composer('pages.team', 'App\Http\ViewComposers\TeamComposer');
        \View::composer('pages.resource', 'App\Http\ViewComposers\ResourceComposer');
        \View::composer('pages.faqs', 'App\Http\ViewComposers\FaqComposer');
        \View::composer('pages.partners', 'App\Http\ViewComposers\PartnersComposer');
        \View::composer(['pages.about', 'pages.history'], 'App\Http\ViewComposers\TestimonialsComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
