<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
 
    public function all_events()
    {
        $events = Events::all();
        return view('backend.events.all_events' , compact('events'));
    }

    public function create()
    {
        return view('backend.events.add_event');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title'           => 'required|unique:events',
                'price'           => 'required',
                'image'           => 'required',
                'description'     => 'required',
                // 'user_id'         => 'required',
                'advan1'          => 'required',
            ],
            [
                'title.required'        => 'the title is required',
                'title.unique'          => 'the title is unique',
                'price.required'        => 'the price is required',
                'image.required'        => 'the image is required',
                'description.required'  => 'the description is required',
                // 'user_id.required'      => 'the user_id is required',
                'advan1.required'       => 'the advan1 is required',
            ]
        );

        $title         = $request->title;
        $price         = $request->price;
        $description   = $request->description;
        $user_id       = Auth::user()->id;
        $advan1        = $request->advan1;
        $advan2        = $request->advan2;
        $advan3        = $request->advan3;
        $advan4        = $request->advan4;
        
        $event_image         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($event_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $event_image->move($upload_location,$img_name); 

        $events = Events::create([
            'title'         => $title,
            'price'         => $price,
            'image'         => $image,
            'description'   => $description,
            'user_id'       => $user_id,
            'advan1'        => $advan1,
            'advan2'        => $advan2,
            'advan3'        => $advan3,
            'advan4'        => $advan4,
        ]);

        return redirect()->route('backend.events.all_events')->with('success' , 'the event is added successfuly');
    }

    public function edit($id)
    {
        $events = Events::find($id);
        return view('backend.events.edit_event' , compact('events'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate(
            [
                'title'           => 'required|unique:events',
                'price'           => 'required',
                'image'           => 'required',
                'description'     => 'required',
                // 'user_id'         => 'required',
                'advan1'          => 'required',
            ],
            [
                'title.required'        => 'the title is required',
                'title.unique'          => 'the title is unique',
                'price.required'        => 'the price is required',
                'image.required'        => 'the image is required',
                'description.required'  => 'the description is required',
                // 'user_id.required'      => 'the user_id is required',
                'advan1.required'       => 'the advan1 is required',
            ]
        );

        $title         = $request->title;
        $price         = $request->price;
        $description   = $request->description;
        $user_id       = Auth::user()->id;
        $advan1        = $request->advan1;
        $advan2        = $request->advan2;
        $advan3        = $request->advan3;
        $advan4        = $request->advan4;
        
        $event_image         = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($event_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/'; 
        $image = $img_name; 
        $event_image->move($upload_location,$img_name); 

        $events = Events::find($id);

        $events->update([
            'title'         => $title,
            'price'         => $price,
            'image'         => $image,
            'description'   => $description,
            'user_id'       => $user_id,
            'advan1'        => $advan1,
            'advan2'        => $advan2,
            'advan3'        => $advan3,
            'advan4'        => $advan4,
        ]);

        return redirect()->route('backend.events.all_events')->with('success' , 'the event is edit successfuly');
    }

    public function destroy($id)
    {
        $events = Events::find($id);
        $events->delete();
        return redirect()->route('backend.events.all_events')->with('success' , 'the event is deleted successfuly');

    }
}
