<?php

namespace App\Providers;

use App\Models\EventCategory;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
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
            Paginator::useBootstrap();
            config()->set('settings', Setting::pluck('value','item')->all());
            $Pages = Cache::remember('pages',now()->addYear(1), function () {return Page::with('getCategory')->where(['status' => 1, 'category' => 1])->orderBy('rank','desc')->get();});
            $Page_Categories = Cache::remember('page_categories',now()->addYear(1), function () {return PageCategory::where('status',1)->orderBy('rank','desc')->get(); });
            $Project = Cache::remember('project',now()->addYear(1), function () { return Project::where('status',1)->orderBy('rank','desc')->get(); });
            $Event_Categories = Cache::remember('event_categories',now()->addYear(1), function () { return EventCategory::where('status',1)->orderBy('rank','desc')->get(); });

            View::share([
                'Pages' => $Pages,
                'Page_Categories' => $Page_Categories,
                'Project' => $Project,
                'Event_Categories' => $Event_Categories
            ]);

    }
}
