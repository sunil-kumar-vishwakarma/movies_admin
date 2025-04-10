<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\UserController;




// Admin Login Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/movies', [HomeController::class, 'movies'])->name('movies');
Route::get('/liveTv', [HomeController::class, 'liveTv'])->name('livetv');
Route::get('/sports', [HomeController::class, 'sports'])->name('sports');
Route::get('/tvShows', [HomeController::class, 'tvShows'])->name('tv.shows');
Route::get('/upcoming', [HomeController::class, 'upcoming'])->name('upcoming');
Route::get('/kids', [HomeController::class, 'kids'])->name('kids');
Route::get('/rentMovies', [HomeController::class, 'rentMovies'])->name('rent.movies');
Route::get('/rentShows', [HomeController::class, 'rentShows'])->name('rent.shows');
Route::get('/user/login', [UserController::class, 'userLogin'])->name('user.login');
Route::get('/user/login/mobile/number', [UserController::class, 'userLoginWithMobileOtp'])->name('user.mobile.with.otp');
Route::get('/user/login/mobile/number_verify', [UserController::class, 'userLoginWithVerifyOtp'])->name('user.mobile.with.otpverify');

// Route::post('/user/login', [ProducerController::class, 'producerLogin'])->name('producer.login.loginto');


// Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
// Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Dashboard
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//     Route::get('/types', [BasicItemController::class, 'index'])->name('admin.basic-item.types');
//     Route::get('/category', [BasicItemController::class, 'category'])->name('admin.basic-item.category');
//     Route::get('/language', [BasicItemController::class, 'language'])->name('admin.basic-item.language');
//     Route::get('/season', [BasicItemController::class, 'season'])->name('admin.basic-item.season');
//     Route::get('/avatar', [BasicItemController::class, 'avatar'])->name('admin.basic-item.avatar');

//     // producer
//     Route::get('/producer', [ProducerController::class, 'producer'])->name('admin.producer');

//     // user
//     Route::get('/user', [UserController::class, 'user'])->name('admin.user');

//     // cast
//     Route::get('/cast', [CastController::class, 'cast'])->name('admin.cast');

//     // banner
//     Route::get('/home', [BannerController::class, 'home'])->name('admin.banner.home');

//     // section
//     Route::get('/index', [SectionController::class, 'index'])->name('admin.section.index');

//     // videos
//     Route::get('/watchtime', [VideosController::class, 'watchtime'])->name('admin.watchtime');
//     Route::get('/videos', [VideosController::class, 'videos'])->name('admin.videos.videos');
//     Route::get('/admin/videos/add', [VideosController::class, 'addvideos'])->name('admin.videos.addvideo');
//     Route::get('/admin/videos/edit', [VideosController::class, 'edit'])->name('admin.videos.edit');

//     // tv shows
//     Route::get('/tvshows', [TVshowsController::class, 'index'])->name('admin.tvshows.index');
//     Route::get('/admin/tvshows/list', [TVshowsController::class, 'list'])->name('admin.tvshows.list');
//     Route::get('/admin/tvshows/addepisode', [TVshowsController::class, 'addepisode'])->name('admin.tvshows.addepisode');
//     Route::get('/admin/tvshows/editepisode', [TVshowsController::class, 'editepisode'])->name('admin.tvshows.editepisode');
//     Route::get('/admin/tvshows/edit', [TVshowsController::class, 'edit'])->name('admin.tvshows.edit');
//     Route::get('/admin/tvshows/addtvshows', [TVshowsController::class, 'addtvshows'])->name('admin.tvshows.add');

//     // upcomming
//     Route::get('/upcoming', [UpcomingController::class, 'upcoming'])->name('admin.upcoming.video');
//     Route::get('/admin/upcoming/add', [UpcomingController::class, 'addvideo'])->name('admin.upcoming.addupvideo');
//     Route::get('/admin/upcoming/editvideo', [UpcomingController::class, 'editvideo'])->name('admin.upcoming.editvideo');
//     Route::get('/upcomingshow', [UpcomingController::class, 'upcomingshow'])->name('admin.upcoming.tvshow');
//     Route::get('/admin/upcoming/addshow', [UpcomingController::class, 'addshow'])->name('admin.upcoming.addshow');
//     Route::get('/admin/upcoming/edittvshow', [UpcomingController::class, 'edittvshow'])->name('admin.upcoming.edittvshow');

//     // comment
//     Route::get('/comment', [CommentController::class, 'comment'])->name('admin.comment.comment');

//     // notification
//     Route::get('/notification', [NotificationController::class, 'index'])->name('admin.notification');

//     // coupon
//     Route::get('/coupon', [CouponController::class, 'index'])->name('admin.coupon');

//     // rent-price
//     Route::get('/rent-price-list', [RentPriceListController::class, 'index'])->name('admin.rent-price');

//     // rent-transaction
//     Route::get('/rent-transaction', [RenttransactionController::class, 'index'])->name('admin.rent-transaction');

//     // subscription
//     Route::get('/subscription/package', [SubscriptionController::class, 'package'])->name('admin.subscription.package');
//     Route::get('/subscription/transaction', [SubscriptionController::class, 'transaction'])->name('admin.subscription.transaction');
//     Route::get('/subscription/payment', [SubscriptionController::class, 'payment'])->name('admin.subscription.payment');

//     //   Admob
//     Route::get('/admob', [AdMobController::class, 'admob'])->name('admin.admob');

//     Route::get('/bannermodel', [BannerModelController::class, 'bannermodel'])->name('admin.bannermodel');

//     Route::get('/adsvideo', [BannerModelController::class, 'adsvideo'])->name('admin.adsvideo');


//     Route::get('/pages', [PagesController::class, 'pages'])->name('admin.pages.pages');
//     Route::get('/app_settings', [SettingsController::class, 'app_settings'])->name('admin.app_settings');
//     Route::get('/system_settings', [SettingsController::class, 'system_settings'])->name('admin.system_settings');
//     Route::get('/panel_settings', [SettingsController::class, 'panel_settings'])->name('admin.panel_settings');

//     Route::get('/pages-edit', [PagesController::class, 'edit'])->name('admin.pages.edit');
// });
