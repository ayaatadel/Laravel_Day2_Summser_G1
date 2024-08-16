<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Track;
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

    function create()
    {
        $tracks=Track::all();
        return view('create',compact('tracks'));
    }

    function store(Request $request)
    {
        // dump($_POST);
        // dd(request()->all());
    //    $student=new Student();
    //    dd($requestDate);
    // "name" => "ayat adel"
    // "email" => "ayaatadel128@gmail.com"
    // "image" => "jj.png"
    // "address" => "Cairo-menofia"
    // "age" => "25"
    // "grade" => "100"
    // "gender" => "female"

    // $student->name=$requestDate['name'];
    // $student->email=$requestDate['email'];
    // $student->image=$requestDate['image'];
    // $student->address=$requestDate['address'];
    // $student->age=$requestDate['age'];
    // $student->gender=$requestDate['gender'];
    // $student->grade=$requestDate['grade'];
    // dump($requestDate);
    // dd($student);
    $requestData=request()->all();

    $student=Student::create($requestData);
    $student->save();
    return to_route('students.view',$student->id);

    }


    function edit($id)
    {
        $student=Student::findOrFail($id);
        return view('edit',compact('student'));
    }

    function update($id)
    {
        // dd(request()->all());
        $student=Student::findOrFail($id);
        $updatedData=request()->all();
        $student->update( $updatedData);
        return to_route('students.index');
    }
}
