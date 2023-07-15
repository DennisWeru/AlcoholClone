<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'welcome'])->name('home.page');
Route::get('/about', [SiteController::class, 'about_us'])->name('about');
Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
Route::get('/single/category/{uniqid}', [SiteController::class, 'single_category'])->name('single.category');
Route::get('/cart/page', [SiteController::class, 'cart_page'])->name('cart.page');
Route::get('/order/drink/', [SiteController::class, 'order_drink'])->name('order.drink');
Route::post('/post/user/details', [SiteController::class, 'post_user_details'])->name('post.user.details');
Route::get('/checkout/final/{uniqid}', [SiteController::class, 'checkout_final'])->name('checkout.final');
Route::get('/finish/order/{uniqid}', [SiteController::class, 'finish_order'])->name('finish.order');
Route::get('/contact/us/', [SiteController::class, 'contact_us'])->name('contact.us');
Route::post('/contact/us/post', [SiteController::class, 'post_contact_us'])->name('post.contact.us');
Route::get('/subscribe/newsletter', [SiteController::class, 'subscribe_newsletter'])->name('subscribe.newsletter');
Route::get('/product/details', [SiteController::class, 'product_details'])->name('product.details');
Route::get('/remove/product', [SiteController::class, 'remove_product'])->name('remove.product');
Route::get('/set/cookie', [SiteController::class, 'set_cookie'])->name('set.cookie');
Route::get('/get/cookie', [SiteController::class, 'get_cookie'])->name('get.cookie');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//Admin Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/add/product', [ProductController::class, 'add_product'])->name('add.product');
    Route::get('/add/location', [SiteController::class, 'add_location'])->name('add.location');
    Route::post('/post/location', [SiteController::class, 'post_location'])->name('post.location');
    Route::get('/add/category', [ProductController::class, 'add_category'])->name('add.category');
    Route::get('/all/products', [ProductController::class, 'all_products'])->name('all.products');
    Route::get('/add/portfolio', [SiteController::class, 'add_portfolio'])->name('add.portfolio');
    Route::get('/send/newsletter', [SiteController::class, 'send_newsletter'])->name('newsletter.form');
    Route::get('/add/rider/details', [SiteController::class, 'add_rider_details'])->name('add.rider.details');
    Route::post('/post/rider/details', [SiteController::class, 'post_ride_details'])->name('post.rider.details');

    Route::get('/edit/product/{uniqid}', [ProductController::class, 'edit_product'])->name('edit.product');
    Route::get('/delete/product/{uniqid}', [ProductController::class, 'delete_product'])->name('delete.product');
    Route::get('/view/details/{uniqid}', [SiteController::class, 'view_details'])->name('view.details');
    Route::post('/post/product', [ProductController::class, 'post_product'])->name('post.product');
    Route::post('/post/category', [ProductController::class, 'post_category'])->name('post.category');
    Route::post('/post/portfolio', [SiteController::class, 'post_portfolio'])->name('post.portfolio');
    Route::post('/post/edit/product', [ProductController::class, 'post_edit_product'])->name('post.edit.product');
    Route::post('/post/newsletter', [SiteController::class, 'post_newsletter'])->name('post.newsletter');
    Route::post('/pass/to/rider', [ProductController::class, 'pass_to_rider'])->name('pass.to.rider');


});
