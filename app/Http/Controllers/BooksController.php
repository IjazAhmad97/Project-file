<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Student;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show(){
        $books = Books::all();
        return view('books', compact('books'));
    }

    public function addbook(){
        return view('add-books');
    }
    public function storebook(Request $request){
        $books = new Books();
        $books->stu_id = $request->stu_id;
        $books->title = $request->title;
        $books->description = $request->description;
        $books->save();
        return redirect()->route('book.data')->with('success', 'book Added');
    }
    public function destroy($id){
        $books = Books::find($id);
        $books->delete();
        return redirect()->back();
    }
}
