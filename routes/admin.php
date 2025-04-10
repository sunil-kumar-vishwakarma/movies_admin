<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BasicItemController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\TVshowsController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\RentPriceListController;
use App\Http\Controllers\RenttransactionController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdMobController;
use App\Http\Controllers\BannerModelController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VideoTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\AvatarController;


// Admin Login Routes
Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Dashboard
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Route::get('/admin/types', [BasicItemController::class, 'index'])->name('admin.basic-item.types');
    Route::get('/admin/types', [VideoTypeController::class, 'index'])->name('admin.basic-item.types');
    Route::post('/admin/types/add', [VideoTypeController::class, 'store'])->name('admin.basic-item.add');
    Route::post('/admin/types/update/{id}', [VideoTypeController::class, 'update'])->name('admin.basic-item.update');
    Route::delete('/admin/types/delete/{id}', [VideoTypeController::class, 'destroy'])->name('admin.basic-item.delete');


    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.basic-item.category');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.basic-item-category.store');
    Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.basic-item-category.update');
    Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.basic-item-category.delete');
    
    Route::get('/admin/language', [LanguageController::class, 'index'])->name('admin.basic-item.language');
    Route::post('/admin/language/store', [LanguageController::class, 'store'])->name('admin.basic-item-language.store');
    Route::post('/admin/language/update/{id}', [LanguageController::class, 'update'])->name('admin.basic-item-language.update');
    Route::delete('/admin/language/delete/{id}', [LanguageController::class, 'destroy'])->name('admin.basic-item-language.delete');
    

    Route::get('/admin/season', [SeasonController::class, 'index'])->name('admin.basic-item.season');
    Route::post('/admin/season/store', [SeasonController::class, 'store'])->name('admin.basic-item-season.store');
    Route::post('/admin/season/update/{id}', [SeasonController::class, 'update'])->name('admin.basic-item-season.update');
    Route::delete('/admin/season/delete/{id}', [SeasonController::class, 'destroy'])->name('admin.basic-item-season.delete');
    
    Route::get('/admin/avatar', [AvatarController::class, 'index'])->name('admin.basic-item.avatar');
    Route::post('/admin/avatar/store', [AvatarController::class, 'store'])->name('admin.basic-item-avatar.store');
    Route::post('/admin/avatar/update/{id}', [AvatarController::class, 'update'])->name('admin.basic-item-avatar.update');
    Route::delete('/admin/avatar/delete/{id}', [AvatarController::class, 'destroy'])->name('admin.basic-item-avatar.delete');
    
    // producer
    Route::get('/admin/producer', [ProducerController::class, 'producer'])->name('admin.producer');

    // user
    Route::get('/admin/user', [UserController::class, 'user'])->name('admin.user');

    // cast
    Route::get('/admin/cast', [CastController::class, 'cast'])->name('admin.cast');

    // banner
    Route::get('/admin/home', [BannerController::class, 'home'])->name('admin.banner.home');

    // section
    Route::get('/admin/index', [SectionController::class, 'index'])->name('admin.section.index');

    // videos
    Route::get('/admin/watchtime', [VideosController::class, 'watchtime'])->name('admin.watchtime');
    Route::get('/admin/videos', [VideosController::class, 'videos'])->name('admin.videos.videos');
    Route::get('/admin/videos/add', [VideosController::class, 'addvideos'])->name('admin.videos.addvideo');
    Route::get('/admin/videos/edit', [VideosController::class, 'edit'])->name('admin.videos.edit');

    // tv shows
    Route::get('/admin/tvshows', [TVshowsController::class, 'index'])->name('admin.tvshows.index');
    Route::get('/admin/tvshows/list', [TVshowsController::class, 'list'])->name('admin.tvshows.list');
    Route::get('/admin/tvshows/addepisode', [TVshowsController::class, 'addepisode'])->name('admin.tvshows.addepisode');
    Route::get('/admin/tvshows/editepisode', [TVshowsController::class, 'editepisode'])->name('admin.tvshows.editepisode');
    Route::get('/admin/tvshows/edit', [TVshowsController::class, 'edit'])->name('admin.tvshows.edit');
    Route::get('/admin/tvshows/addtvshows', [TVshowsController::class, 'addtvshows'])->name('admin.tvshows.add');

    // upcomming
    Route::get('/admin/upcoming', [UpcomingController::class, 'upcoming'])->name('admin.upcoming.video');
    Route::get('/admin/upcoming/add', [UpcomingController::class, 'addvideo'])->name('admin.upcoming.addupvideo');
    Route::get('/admin/upcoming/editvideo', [UpcomingController::class, 'editvideo'])->name('admin.upcoming.editvideo');
    Route::get('/admin/upcomingshow', [UpcomingController::class, 'upcomingshow'])->name('admin.upcoming.tvshow');
    Route::get('/admin/upcoming/addshow', [UpcomingController::class, 'addshow'])->name('admin.upcoming.addshow');
    Route::get('/admin/upcoming/edittvshow', [UpcomingController::class, 'edittvshow'])->name('admin.upcoming.edittvshow');

    // comment
    Route::get('/admin/comment', [CommentController::class, 'comment'])->name('admin.comment.comment');

    // notification
    Route::get('/admin/notification', [NotificationController::class, 'index'])->name('admin.notification');

    // coupon
    Route::get('/admin/coupon', [CouponController::class, 'index'])->name('admin.coupon');

    // rent-price
    Route::get('/admin/rent-price-list', [RentPriceListController::class, 'index'])->name('admin.rent-price');

    // rent-transaction
    Route::get('/admin/rent-transaction', [RenttransactionController::class, 'index'])->name('admin.rent-transaction');

    // subscription
    Route::get('/admin/subscription/package', [SubscriptionController::class, 'package'])->name('admin.subscription.package');
    Route::get('/admin/subscription/transaction', [SubscriptionController::class, 'transaction'])->name('admin.subscription.transaction');
    Route::get('/admin/subscription/payment', [SubscriptionController::class, 'payment'])->name('admin.subscription.payment');

    //   Admob
    Route::get('/admin/admob', [AdMobController::class, 'admob'])->name('admin.admob');

    Route::get('/admin/bannermodel', [BannerModelController::class, 'bannermodel'])->name('admin.bannermodel');

    Route::get('/admin/adsvideo', [BannerModelController::class, 'adsvideo'])->name('admin.adsvideo');


    Route::get('/admin/pages', [PagesController::class, 'pages'])->name('admin.pages.pages');
    Route::get('/admin/app_settings', [SettingsController::class, 'app_settings'])->name('admin.app_settings');
    Route::get('/admin/system_settings', [SettingsController::class, 'system_settings'])->name('admin.system_settings');
    Route::get('/admin/panel_settings', [SettingsController::class, 'panel_settings'])->name('admin.panel_settings');

    Route::get('/admin/pages-edit', [PagesController::class, 'edit'])->name('admin.pages.edit');
});
