<?php

namespace App\Http\Controllers;

use App\Models\Book_table;
use Illuminate\Http\Request;

class BookTableController extends Controller
{

    public function all_books()
    {
        $tables = Book_table::all();
        return view('backend.book_table.all_book' , compact('tables'));
    }


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

    public function destroy($id)
    {
        $Books = Book_table::find($id);
        $Books->delete();

        return redirect()->route('backend.books.all_books')->with('success' , 'the book deleted succefuly');
    }
}
