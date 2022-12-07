<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\ShopComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/shop', ShopComponent::class)->name('shop');
// Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
// Route::get('/cart', CartComponent::class)->name('shop.cart');
// Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');
// Route::get('/product-category/{slug}', CategoryComponent::class)->name('product.category');
// Route::get('/search', SearchComponent::class)->name('product.search');
// Route::get('/show-wish-table',WishTableComponent::class)->name('wish.table');

Route::get('/home', HomeComponent::class)->name('home');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/products/{slug}', ProductDetailsComponent::class)->name('product.details');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/shop', ShopComponent::class)->name('shop');
//Route::get('/shop',ShopComponent::class)->name('shop');
