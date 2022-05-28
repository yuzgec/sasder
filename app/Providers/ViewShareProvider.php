<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewShareProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        //dd(time());
        if (! app()->runningInConsole()) {
            Paginator::useBootstrap();
            config()->set('settings', Setting::pluck('value','item')->all());
            $Pages = Cache::remember('pages',now()->addYear(1), function () {return Page::with('getCategory')->get();});
            $Page_Categories = Cache::remember('page_categories',now()->addYear(1), function () {return PageCategory::all(); });
            $Project = Cache::remember('project',now()->addYear(1), function () {return Project::all(); });


            View::share([
                'Pages' => $Pages,
                'Page_Categories' => $Page_Categories,
                'Project' => $Project
            ]);

        }

    }
}
