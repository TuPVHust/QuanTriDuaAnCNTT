<?php

use App\Http\Livewire\AboutUscomponent;
use App\Http\Livewire\Admin\CategoryAdd;
use App\Http\Livewire\Admin\Categoryall;
use App\Http\Livewire\Admin\Categorycomponent as AdminCategorycomponent;
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
use App\Http\Livewire\Categorycomponent;
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
////
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\NhomsanphamController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\QuanLyNguoiDungController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\CheckAdminLogin;
use App\Http\Controllers\MaGiamGia;
use App\Http\Controllers\QuanLyComment;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\TestComponent;
use App\Http\Middleware\CheckCustomer;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('/aboutus',AboutUscomponent::class)->name('aboutus');


// Route::get('/contactus',ContactUScomponent::class)->name('contactus');
// Route::get('/thankyou',Thankyoucomponent::class)->name('thankyou');

// Route::get('/product_details/{slug}',Detailcomponent::class)->name('product_details');

// Route::get('/product_category/{category_slug}',Categorycomponent::class)->name('product_category');

// Route::get('/search',Searchcomponent::class)->name('product_search');

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


Route::get('/admin/login', [AdminLoginController::class,'getlogin'])->name('admin.getlogin');
Route::post('/admin/login', [AdminLoginController::class,'postlogin'])->name('admin.postlogin');
Route::get('/admin/logout', [AdminLoginController::class,'getlogout'])->name('admin.getlogout');

// ->middleware([CheckAdminLogin::class])
Route::prefix('admin')->name('admin.')->middleware([CheckAdminLogin::class])->group(function(){
    Route::get('/', [AdminLoginController::class, 'dashboard'])->name('dashboard');

    Route::get('/file', function () {
        return view('admin.file');
    })->name('file');

    Route::resources([
        'nhomsanpham' => NhomsanphamController::class,
        'sanpham' => SanphamController::class,
        'usermanagement' => QuanLyNguoiDungController::class,
        'comment' => QuanLyComment::class,
        'magiamgia' => MaGiamGia::class,
    ]);

});

Route::get('/', function () {
    return view('site.index');
})->name('home');

Route::get('/shop', function () {
    return view('site.shop');
})->name('shop');

Route::get('/cart', function () {
    return view('site.cart');
})->name('cart');
Route::get('/productdetail/{param}',App\Http\Livewire\ProductDetail::class)->name('productdetail');
Route::get('/checkout1',App\Http\Livewire\User\Dashboard::class)->name('checkout1');
Route::get('/checkout',App\Http\Livewire\CheckOut::class)->name('checkout');
Route::get('/blog1',App\Http\Livewire\Blog::class)->name('blog');
Route::get('/contact',App\Http\Livewire\Contact::class)->name('contact');
Route::get('/blog-detail',App\Http\Livewire\BlogDetail::class)->name('blog-detail');
Route::get("/register", [RegistrationController::class, 'create'])->name('register');
Route::post("/register/create", [RegistrationController::class, 'store']);

Route::get('/returnpayment',App\Http\Livewire\ReturnPayment::class)->name('returnpayment');
//  Route::get("/returnpayment", [RegistrationController::class, 'payment']);
