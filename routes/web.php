<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;
use App\Models\Events;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $services              = Service::all()->random(3);
    $categories            = Category::all();
    $products              = Product::where('special' , '0')->get();
    $specials_products     = Product::where('special' , '1')->get();
    $events                = Events::all();



    return view('frontend.index' , compact('services' , 'categories' , 'products' , 'specials_products' , 'events'));
})->name('home');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/menue', function () {

    $categories   = Category::all();
    $products     = Product::where('special' , '0')->get();
    return view('frontend.pages.menue' , compact('categories' , 'products'));

})->name('menue');

Route::get('/specials', function () {

    $specials_products     = Product::where('special' , '1')->get();
    return view('frontend.pages.specials' , compact('specials_products'));


})->name('specials');

Route::get('/events', function () {

    $events   = Events::all();

    return view('frontend.pages.events' , compact('events'));
})->name('events');

Route::get('/chefs', function () {
    return view('frontend.pages.chefs');
})->name('chefs');

Route::get('/gallary', function () {
    return view('frontend.pages.gallary');
})->name('gallary');

Route::get('/contact', function () {
    return view('frontend.pages.contacts');
})->name('contact');

Route::get('/book_table', function () {
    return view('frontend.pages.book_table');
})->name('book_table');

// ______________________________________________________________

use App\Http\Controllers\ProductController;
 
Route::get('/category/{id}', [ProductController::class, 'show_category'])->name('category');
Route::get('/category_menue/{id}', [ProductController::class, 'category_menue'])->name('category_menue');

// ______________________________________________________________


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
