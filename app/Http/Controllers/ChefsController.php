<?php

namespace App\Http\Controllers;

use App\Models\Chefs;
use Illuminate\Http\Request;

class ChefsController extends Controller
{

    public function all_chefs()
    {
        $chefs = Chefs::all();
        return view('backend.Chefs.all_Chefs' , compact('chefs'));
    }

    public function create()
    {
        return view('backend.Chefs.add_chef');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'position'    => 'required',
            'image'       => 'required',
            'twitter'     => 'required',
            'instagram'   => 'required',
            'facebook'    => 'required',
            'linkiden'    => 'required',
        ] 
        , 
        [ 
            'name.required'       => 'please write the name',
            'position.required'   => 'please write the position',
            'image.required'      => 'please select the image',
            'twitter.required'    => 'please write the twitter',
            'instagram.required'  => 'please write the instagram',
            'facebook.required'   => 'please write the facebook',
            'linkiden.required'   => 'please write the linkiden',

        ]);

        $name         = $request->name;
        $position     = $request->position;
        $twitter      = $request->twitter;
        $instagram    = $request->instagram;
        $linkiden     = $request->linkiden;
        $facebook     = $request->facebook;
        
        
        $chef_image        = $request->file('image');
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($chef_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/chefs/'; 
        $image = $img_name; 
        $chef_image->move($upload_location,$img_name); 

        $chefs = Chefs::create([
            'name'       => $name,
            'position'   => $position,
            'twitter'    => $twitter,
            'instagram'  => $instagram,
            'linkiden'   => $linkiden,
            'facebook'   => $facebook,
            'image'      => $image,
        ]);

        return redirect()->route('backend.chefs.all_chefs')->with('success' , 'the chef is added successfuly');


    }

    public function edit($id)
    {
        $chefs = Chefs::find($id);
        return view('backend.Chefs.edit_chef' , compact('chefs'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'position'    => 'required',
            'image'       => 'required',
            'twitter'     => 'required',
            'instagram'   => 'required',
            'facebook'    => 'required',
            'linkiden'    => 'required',
        ] 
        , 
        [ 
            'name.required'       => 'please write the name',
            'position.required'   => 'please write the position',
            'image.required'      => 'please select the image',
            'twitter.required'    => 'please write the twitter',
            'instagram.required'  => 'please write the instagram',
            'facebook.required'   => 'please write the facebook',
            'linkiden.required'   => 'please write the linkiden',

        ]);

        $name         = $request->name;
        $position     = $request->position;
        $twitter      = $request->twitter;
        $instagram    = $request->instagram;
        $linkiden     = $request->linkiden;
        $facebook     = $request->facebook;
        
        
        $chef_image        = $request->file('image');
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($chef_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/chefs/'; 
        $image = $img_name; 
        $chef_image->move($upload_location,$img_name); 

        $chefs = Chefs::find($id);

        $chefs->update([
            'name'       => $name,
            'position'   => $position,
            'twitter'    => $twitter,
            'instagram'  => $instagram,
            'linkiden'   => $linkiden,
            'facebook'   => $facebook,
            'image'      => $image,
        ]);

        return redirect()->route('backend.chefs.all_chefs')->with('success' , 'the chef is update successfuly');
    }

    public function destroy($id)
    {
        $chefs = Chefs::find($id);
        $chefs->delete();

        return redirect()->route('backend.chefs.all_chefs')->with('success' , 'the chef is deleted successfuly');

    }
}
