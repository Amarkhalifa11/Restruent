<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;
use App\Models\Events;
use App\Models\Chefs;
use App\Models\Gallary;


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
// ______________________________________________________________

Route::get('/', function () {

    $services              = Service::all()->random(3);
    $categories            = Category::all();
    $products              = Product::where('special' , '0')->get();
    $specials_products     = Product::where('special' , '1')->get();
    $events                = Events::all();
    $chefs                 = Chefs::limit(3)->get();
    $gallarys              = Gallary::limit(4)->get();

    return view('frontend.index' , compact('services' , 'categories' , 'products' , 'specials_products' , 'events' , 'chefs' , 'gallarys'));
})->name('home');
// ______________________________________________________________

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');


// ______________________________________________________________

Route::get('/menue', function () {

    $categories            = Category::all();
    $products              = Product::where('special' , '0')->get();
    $specials_products     = Product::where('special' , '1')->get();

    return view('frontend.pages.menue' , compact('categories' , 'products' , 'specials_products'));

})->name('menue');


// ______________________________________________________________

Route::get('/specials', function () {

    $specials_products  = Product::where('special' , '1')->get();
    return view('frontend.pages.specials' , compact('specials_products'));


})->name('specials');


// ______________________________________________________________

Route::get('/events', function () {

    $events   = Events::all();

    return view('frontend.pages.events' , compact('events'));
})->name('events');


// ______________________________________________________________

Route::get('/chefs', function () {
    $chefs = Chefs::all();

    return view('frontend.pages.chefs' , compact('chefs'));
})->name('chefs');


// ______________________________________________________________

Route::get('/gallary', function () {
    $gallarys                = Gallary::all();

    return view('frontend.pages.gallary' , compact('gallarys'));
})->name('gallary');


// ______________________________________________________________

Route::get('/contact', function () {
    return view('frontend.pages.contacts');
})->name('contact');


// ______________________________________________________________

Route::get('/book_table', function () {
    return view('frontend.pages.book_table');
})->name('book_table');

// ______________________________________________________________

use App\Http\Controllers\ProductController;
 
Route::get('/category_menue/{id}', [ProductController::class, 'category_menue'])->name('category_menue');

// ______________________________________________________________

use App\Http\Controllers\BookTableController;
 
Route::post('/book_table/store', [BookTableController::class, 'store'])->name('book_table.store');

// ______________________________________________________________

use App\Http\Controllers\ContactsController;
 
Route::post('/contact/store', [ContactsController::class, 'store'])->name('contact.store');

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
