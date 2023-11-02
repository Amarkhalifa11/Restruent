<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Models\Events;

class ProductController extends Controller
{

    public function all_product()
    {
        $products = Product::all();
        return view('backend.Product.all_product' , compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.Product.add_product' , compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'            => 'required',
                'title'           => 'required',
                'category_id'     => 'required',
                'description'     => 'required',
                'price'           => 'required',
                'image'           => 'required',
                'special'         => 'required',
            ] 
            ,
            [
                'name.required'           => 'the name required',
                'title.required'          => 'the title required',
                'category_id.required'    => 'the category_id required',
                'description.required'    => 'the description required',
                'price.required'          => 'the price required',
                'image.required'          => 'the image required',
                'special.required'        => 'the special required',
            ]
        );

        $name           = $request->name;
        $title          = $request->title;
        $category_id    = $request->category_id;
        $description    = $request->description;
        $price          = $request->price;
        $special        = $request->special;

        $product_image  = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($product_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $product_image->move($upload_location,$img_name); 


        $products = Product::create([
            'name'          => $name,
            'title'         => $title,
            'category_id'   => $category_id,
            'description'   => $description,
            'price'         => $price,
            'special'       => $special,
            'image'         => $image,
        ]);

        return redirect()->route('backend.product.all_product')->with('success' , 'the product is added successfuly');

    }

    public function edit($id)
    {
        $categories = Category::all();
        $product    = Product::find($id);
        return view('backend.Product.edit_product' , compact('categories' , 'product'));
    }

    public function category_menue($id)
    {
        $categories   = Category::all();
        $products     = Product::where('category_id' , $id)->get();
        return view('frontend.pages.menue' , compact('products' , 'categories' ));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'name'            => 'required',
                'title'           => 'required',
                'category_id'     => 'required',
                'description'     => 'required',
                'price'           => 'required',
                'image'           => 'required',
                'special'         => 'required',
            ] 
            ,
            [
                'name.required'           => 'the name required',
                'title.required'          => 'the title required',
                'category_id.required'    => 'the category_id required',
                'description.required'    => 'the description required',
                'price.required'          => 'the price required',
                'image.required'          => 'the image required',
                'special.required'        => 'the special required',
            ]
        );

        $name           = $request->name;
        $title          = $request->title;
        $category_id    = $request->category_id;
        $description    = $request->description;
        $price          = $request->price;
        $special        = $request->special;

        $product_image  = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($product_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $product_image->move($upload_location,$img_name); 

        $products = Product::find($id);
        $products->update([
            'name'          => $name,
            'title'         => $title,
            'category_id'   => $category_id,
            'description'   => $description,
            'price'         => $price,
            'special'       => $special,
            'image'         => $image,
        ]);

        return redirect()->route('backend.product.all_product')->with('success' , 'the product is updated successfuly');
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('backend.product.all_product')->with('success' , 'the product is deleted successfuly');

    }
}
