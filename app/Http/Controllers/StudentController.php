<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $student = Student::all();
        $student = Student::cursorPaginate(4);
        // $student = DB::table('student')->paginate(2);
        return view('student', compact('student'));
    }
    public function data(){
        return view('form');
    }

    public function view(string $id){
        $datas = DB::table('student')->where('id', $id)->get();
        // dd($datas);
        // $student = Student::find($id);

        return view('view-data', compact('datas'));
    }

    public function store(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->class = $request->class;
        $student->save();
        return redirect()->route('student.data');
    }

    public function edit($id){
        $student = Student::find($id);
        // dd($student);
        return view('edit-data', compact('student'));
    }
    public function update(Request $request, $id){
        $students = Student::find($id);
        $students->name = $request->name;
        $students->class = $request->class;
        $students->update();
        return redirect()->route('student.data');

    }
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }

    public function showrela(){

        $book = Student::with('book')->get();
        dd($book);
    }
}
