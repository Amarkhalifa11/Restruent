<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{

    public function all_image()
    {
        $gallarys = Gallary::all();
        return view('backend.gallary.all_image' , compact('gallarys'));
    }

    public function create()
    {
        return view('backend.gallary.add_image');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'       => 'required',
        ] 
        , 
        [ 
            'image.required'      => 'please select the image',
        ]);

        $gallary_image        = $request->file('image');
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($gallary_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/gallery/'; 
        $image = $img_name; 
        $gallary_image->move($upload_location,$img_name); 

        $gallary = Gallary::create([
            'image' => $image,
        ]);

        return redirect()->route('backend.gallary.all_image')->with('success' , 'the image is added successfuly');
    }

    public function edit($id)
    {
        $gallary = Gallary::find($id);
        return view('backend.gallary.edit_image' , compact('gallary'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image'       => 'required',
        ] 
        , 
        [ 
            'image.required'      => 'please select the image',
        ]);

        $gallary_image        = $request->file('image');
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($gallary_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/gallery/'; 
        $image = $img_name; 
        $gallary_image->move($upload_location,$img_name); 

        $gallary = Gallary::find($id);
        $gallary->update([
            'image' => $image,
        ]);

        return redirect()->route('backend.gallary.all_image')->with('success' , 'the image is updated successfuly');
    }

    public function destroy($id)
    {
        $gallary = Gallary::find($id);
        $gallary->delete();

        return redirect()->route('backend.gallary.all_image')->with('success' , 'the image is deleted successfuly');

    }
}
