<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{

    public function all_service()
    {
        $services = Service::all();
        return view('backend.service.all_service' , compact('services'));
    }


    public function create()
    {
        $users    = User::all();

        return view('backend.service.add_service' , compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'        => 'required|unique:services',
            'description'  => 'required',
            'user_id'      => 'required',
        ] 
        , 
        [
            'title.required'        => 'please write the title',
            'title.unique'          => 'service tite must be unique',
            'description.required'  => 'please write the description',
            'user_id.required'      => 'please write the user_id',
        ]);

        $title              = $request->title;
        $description        = $request->description;
        $user_id            = $request->user_id;

        $service = Service::create([
            'title'         => $title,
            'description'   => $description,
            'user_id'       => $user_id,
        ]);

        return redirect()->route('backend.service.all_service')->with('success' , 'the service is added successfuly');
    }


    public function edit($id)
    {
        $users    = User::all();

        $service = Service::find($id);
        return view('backend.service.edit_service' , compact('service' , 'users'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'        => 'required|unique:services',
            'description'  => 'required',
            'user_id'      => 'required',
        ] 
        , 
        [
            'title.required'        => 'please write the title',
            'title.unique'          => 'service tite must be unique',
            'description.required'  => 'please write the description',
            'user_id.required'      => 'please write the user_id',
        ]);

        $title              = $request->title;
        $description        = $request->description;
        $user_id            = $request->user_id;
        
        $service = Service::find($id);

        $service->update([
            'title'         => $title,
            'description'   => $description,
            'user_id'       => $user_id,
        ]);
        

        return redirect()->route('backend.service.all_service')->with('success' , 'the service is updated successfuly');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('backend.service.all_service')->with('success' , 'the service is deleted successfuly');

    }
}
