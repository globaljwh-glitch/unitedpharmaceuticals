<?php

namespace App\Providers;
use App\Models\Category;
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
        view()->composer('*', function ($view) {

            $menuCategories = Category::whereNull('parent_id')
                ->where('status', 1)
                ->with('children')
                ->orderBy('sort_order')
                ->get();

            $view->with('menuCategories', $menuCategories);
        });
    }
}
