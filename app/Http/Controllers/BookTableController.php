<?php

namespace App\Http\Controllers;

use App\Models\Book_table;
use Illuminate\Http\Request;

class BookTableController extends Controller
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
        $name    = $request->name;
        $email   = $request->email;
        $phone   = $request->phone;
        $date    = now();
        $time    = $request->time;
        $people  = $request->people;
        $message = $request->message;

        $book_table = Book_table::create([
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'date'       => $date,
            'time'       => $time,
            'people'     => $people,
            'message'    => $message,
        ]);

        $book_table->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book_table $book_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book_table $book_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book_table $book_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book_table $book_table)
    {
        //
    }
}
