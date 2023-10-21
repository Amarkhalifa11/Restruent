<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }


    public function show_category($id)
    {

        $services     = Service::all()->random(3);
        $categories   = Category::all();
        $products     = Product::where('category_id' , $id)->get();
        return view('frontend.index' , compact('products' , 'categories' , 'services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function category_menue($id)
    {
        $categories   = Category::all();
        $products     = Product::where('category_id' , $id)->get();
        return view('frontend.pages.menue' , compact('products' , 'categories' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
