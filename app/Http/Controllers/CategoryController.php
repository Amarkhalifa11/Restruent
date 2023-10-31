<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
// use Auth;

class CategoryController extends Controller
{

    public function all_category()
    {
        $categories = Category::all();
        return view('backend.category.all-category' , compact('categories'));
    }

    public function create()
    {
        return view('backend.category.add_category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:10'
        ] 
        , 
        [
            'name.required'  => 'please write the name',
            'name.unique'    => 'category name must be unique',
            'name.max'       => 'the name is to long',
        ]);

        $name = $request->name;

        $categories = Category::create([
            'name' => $name
        ]);
        return redirect()->route('backend.category.all_category')->with('success' , 'the category added succefuly');
    }


    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.category.edit_category' , compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:10'
        ] 
        , 
        [
            'name.required'  => 'please write the name',
            'name.unique'    => 'category name must be unique',
            'name.max'       => 'the name is to long',
        ]);

        $name = $request->name;

        $categories = Category::find($id);
        $categories->update([
            'name' => $name,
        ]);
        $categories->save();

        return redirect()->route('backend.category.all_category')->with('success' , 'the category updated succefuly');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('backend.category.all_category')->with('success' , 'the category deleted succefuly');

    }
}
