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
Route::get('/backend/books/all_books', [BookTableController::class, 'all_books'])->name('backend.books.all_books');
Route::get('/backend/books/destroy/{id}', [BookTableController::class, 'destroy'])->name('backend.books.destroy');

// ______________________________________________________________

use App\Http\Controllers\ContactsController;
 
Route::post('/contact/store', [ContactsController::class, 'store'])->name('contact.store');

Route::get('/backend/contact/all_contacts', [ContactsController::class, 'all_contacts'])->name('backend.contact.all_contacts');
Route::get('/backend/contact/destroy/{id}', [ContactsController::class, 'destroy'])->name('backend.contact.destroy');

// ______________________________________________________________

use App\Http\Controllers\backendController;
 
Route::get('/logout', [backendController::class, 'logout'])->name('logout');
Route::get('/dashoard/all_user', [backendController::class, 'all_user'])->name('dashoard.all_user');

// ______________________________________________________________

use App\Http\Controllers\CategoryController;
 
Route::get('/backend/category/all_category', [CategoryController::class, 'all_category'])->name('backend.category.all_category');
Route::get('/backend/category/create', [CategoryController::class, 'create'])->name('backend.category.create');
Route::post('/backend/category/store', [CategoryController::class, 'store'])->name('backend.category.store');
Route::get('/backend/category/edit/{id}', [CategoryController::class, 'edit'])->name('backend.category.edit');
Route::post('/backend/category/update/{id}', [CategoryController::class, 'update'])->name('backend.category.update');
Route::get('/backend/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('backend.category.destroy');

// ______________________________________________________________


use App\Http\Controllers\ChefsController;
 
Route::get('/backend/chefs/all_chefs', [ChefsController::class, 'all_chefs'])->name('backend.chefs.all_chefs');
Route::get('/backend/chefs/create', [ChefsController::class, 'create'])->name('backend.chefs.create');
Route::post('/backend/chefs/store', [ChefsController::class, 'store'])->name('backend.chefs.store');
Route::get('/backend/chefs/edit/{id}', [ChefsController::class, 'edit'])->name('backend.chefs.edit');
Route::post('/backend/chefs/update/{id}', [ChefsController::class, 'update'])->name('backend.chefs.update');
Route::get('/backend/chefs/destroy/{id}', [ChefsController::class, 'destroy'])->name('backend.chefs.destroy');

// ______________________________________________________________
 

use App\Http\Controllers\ServiceController;
 
Route::get('/backend/service/all_service', [ServiceController::class, 'all_service'])->name('backend.service.all_service');
Route::get('/backend/service/create', [ServiceController::class, 'create'])->name('backend.service.create');
Route::post('/backend/service/store', [ServiceController::class, 'store'])->name('backend.service.store');
Route::get('/backend/service/edit/{id}', [ServiceController::class, 'edit'])->name('backend.service.edit');
Route::post('/backend/service/update/{id}', [ServiceController::class, 'update'])->name('backend.service.update');
Route::get('/backend/service/destroy/{id}', [ServiceController::class, 'destroy'])->name('backend.service.destroy');

// ______________________________________________________________


use App\Http\Controllers\GallaryController;
 
Route::get('/backend/gallary/all_image', [GallaryController::class, 'all_image'])->name('backend.gallary.all_image');
Route::get('/backend/gallary/create', [GallaryController::class, 'create'])->name('backend.gallary.create');
Route::post('/backend/gallary/store', [GallaryController::class, 'store'])->name('backend.gallary.store');
Route::get('/backend/gallary/edit/{id}', [GallaryController::class, 'edit'])->name('backend.gallary.edit');
Route::post('/backend/gallary/update/{id}', [GallaryController::class, 'update'])->name('backend.gallary.update');
Route::get('/backend/gallary/destroy/{id}', [GallaryController::class, 'destroy'])->name('backend.gallary.destroy');

// ______________________________________________________________



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');
});
