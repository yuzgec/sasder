<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

    Route::get('/sitemap', function(){
        SitemapGenerator::create('https://kiblegah.test/')->getSitemap()->writeToDisk('public', 'sitemap.xml');
    });

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/form', 'HomeController@form')->name('form');
    Route::get('/uyelik', 'HomeController@uyelik')->name('uyelik');
    Route::post('/uyeol', 'HomeController@uyeol')->name('uyeol');
    Route::get('/video', 'HomeController@video')->name('video');
    Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim');
    Route::get('/arama', 'HomeController@search')->name('search');
    Route::post('/bulten', 'HomeController@mailsubcribes')->name('mailsubcribes');


    Route::get('/etkinlikler', 'HomeController@etkinlikler')->name('etkinlikler');
    Route::get('/etkinlik/{kategori}/{url}', 'HomeController@etkinlik')->name('etkinlik');


    Route::get('/kurumsal/{url}', 'HomeController@kurumsal')->name('kurumsal');
    Route::get('/yonetimkurulu', 'HomeController@yonetimkurulu')->name('yonetimkurulu');
    Route::get('/yonetimkurulu/{url}', 'HomeController@yonetimdetay')->name('yonetimdetay');

    Route::get('/kongre/{url}', 'HomeController@kongredetay')->name('kongredetay');
    Route::get('/kongrelerimiz', 'HomeController@kongre')->name('kongrelerimiz');




    Route::group(["prefix"=>"go", 'middleware' => ['auth', 'admin']],function() {
        Route::get('/', 'DashboardController@index')->name('go');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::auto('/page', PageController::class);
        Route::auto('/page-categories', PageCategoryController::class);
        Route::auto('/blog', BlogController::class);
        Route::auto('/blog-categories', BlogCategoryController::class);
        Route::auto('/service', ServiceController::class);
        Route::auto('/service-categories', ServiceCategoryController::class);
        Route::auto('/banner', BannerController::class);
        Route::auto('/banner-area', BannerAreaController::class);
        Route::auto('/faq', FaqController::class);
        Route::auto('/faq-categories', FaqCategoryController::class);
        Route::auto('/gallery', GalleryController::class);
        Route::auto('/gallery-categories', GalleryCategoryController::class);
        Route::auto('/price', PriceController::class);
        Route::auto('/price-categories', PriceCategoryController::class);
        Route::auto('/project', ProjectController::class);
        Route::auto('/project-categories', ProjectCategoryController::class);
        Route::auto('/slider', SliderController::class);
        Route::auto('/video', VideoController::class);
        Route::auto('/video-categories', VideoCategoryController::class);
        Route::auto('/settings', SettingController::class);
        Route::auto('/contact', ContactController::class);
        Route::auto('/team', TeamController::class);
        Route::auto('/team-categories', TeamCategoryController::class);
        Route::auto('/speaker', SpeakerController::class);
        Route::auto('/event', EventController::class);
        Route::auto('/event-categories', EventCategoryController::class);
    });
