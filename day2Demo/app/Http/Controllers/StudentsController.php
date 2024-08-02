<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /***
     functions
     show all data
     show specific data depend on id
     destoy (delete)student
     */


    function index()
    {
        /** Data base */
        //1
        //    $students=DB::table('students')->get();
        // //    dump($students);
        // return view('students',["students"=>$students]);
        // model

        $students = Student::all();
        // dd($students); // display data stop execution
        return view('students', compact("students"));
    }


    function show($id)
    {
        // $student=Student::find($id);
        // if($student==null){
        //     // return to_route("students.index");
        //     return abort(404);
        // }
        // dd($student);
      $student=Student::findOrFail($id);// check if id exist => return else=>404

        return view('show',compact("student"));

    }



    function destroy($id)
    {
        $student=Student::findOrFail($id);
        $student->delete();
        return view('students');
    }
}
