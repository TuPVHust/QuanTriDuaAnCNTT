<?php

use App\Http\Livewire\AboutUscomponent;
use App\Http\Livewire\Admin\CategoryAdd;
use App\Http\Livewire\Admin\Categoryall;
// use App\Http\Livewire\Admin\Categorycomponent as AdminCategorycomponent;
use App\Http\Livewire\Admin\CategoryEdit;
use App\Http\Livewire\Admin\ContactUs;
// use App\Http\Livewire\Admin\HomeSlider;
// use App\Http\Livewire\Admin\HomeSliderAdd;
// use App\Http\Livewire\Admin\HomeSliderEdit;
use App\Http\Livewire\Admin\ProductAdd;
use App\Http\Livewire\Admin\Productall;
use App\Http\Livewire\Admin\Productcomponent;
use App\Http\Livewire\Admin\ProductEdit;
use App\Http\Livewire\Cartcomponent;
// use App\Http\Livewire\Categorycomponent;
use App\Http\Livewire\Checkoutcomponent;
use App\Http\Livewire\ContactUScomponent;
use App\Http\Livewire\Admin\Coupons;
use App\Http\Livewire\Admin\CouponsAdd;
use App\Http\Livewire\Admin\CouponsEdit;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Order;
use App\Http\Livewire\Admin\OrderDetails;
use App\Http\Livewire\Detailcomponent;
use App\Http\Livewire\Homecomponent;
use App\Http\Livewire\Searchcomponent;
use App\Http\Livewire\Shopcomponent;
use App\Http\Livewire\Thankyoucomponent;
use App\Http\Livewire\User\ChangePass;
use App\Http\Livewire\User\Dashboard;
use App\Http\Livewire\User\OrderDetails as UserOrderDetails;
use App\Http\Livewire\User\Review;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Route;


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

// Route::get('/',function(){
//     return view('site.home');
// })->name('home');

// Route::get('/cart',function(){
//     return view('site.cart');
// })->name('cart');

// Route::get('/shop',function(){
//     return view('site.shop');
// })->name('shop');



Route::get('/',Homecomponent::class)->name('home');

Route::get('/cart',Cartcomponent::class)->name('cart');

Route::get('/shop',Shopcomponent::class)->name('shop');

Route::get('/checkout',Checkoutcomponent::class)->name('checkout');

Route::get('/aboutus',AboutUscomponent::class)->name('aboutus');


Route::get('/contactus',ContactUScomponent::class)->name('contactus');
Route::get('/thankyou',Thankyoucomponent::class)->name('thankyou');

Route::get('/product_details/{slug}',Detailcomponent::class)->name('product_details');

// Route::get('/product_category/{category_slug}',Categorycomponent::class)->name('product_category');

Route::get('/search',Searchcomponent::class)->name('product_search');

Route::prefix('admin')->group(function () {

    Route::get('/category',Categoryall::class)->name('admin_category');
    Route::get('/category/add',CategoryAdd::class)->name('admin_category_add');
    Route::get('/category/{slug}',CategoryEdit::class)->name('admin_category_edit');

    Route::get('/product',Productall::class)->name('admin_product');
    Route::get('/product/add',ProductAdd::class)->name('admin_product_add');
    Route::get('/product/{slug_id}',ProductEdit::class)->name('admin_product_edit');

//     Route::get('/homeslider',HomeSlider::class)->name('homeslider');
//     Route::get('/homeslider/add',HomeSliderAdd::class)->name('homeslider_add');
//     Route::get('/homeslider_edit/{slide_id}',HomeSliderEdit::class)->name('homeslider_edit');

    Route::get('/coupons',Coupons::class)->name('admin_coupons');
    Route::get('/coupons/add',CouponsAdd::class)->name('admin_coupons_add');
    Route::get('/coupons/{coupons_id}',CouponsEdit::class)->name('admin_coupons_edit');

    Route::get('/orders',Order::class)->name('admin_orders');


    Route::get('/orders/details/{order_id}',OrderDetails::class)->name('admin_order_details');

    Route::get('/adminContact',ContactUs::class)->name('admin_contactUs');




});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user_dashboard',Dashboard::class)->name('user_dashboard');


    Route::get('user/orders',App\Http\Livewire\User\Order::class)->name('user_orders');


    Route::get('user/orders/details/{order_id}',UserOrderDetails::class)->name('user_order_details');

    Route::get('/changePass',ChangePass::class)->name('user_changePass');


    Route::get('/review/details/{order_items_id}',Review::class)->name('user_review');


});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function (){
    Route::get('/admin_dashboard',AdminDashboard::class)->name('admin_dashboard');
});

// Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function (){
//     Route::get('/',Homecomponent::class)->name('home');
// });
