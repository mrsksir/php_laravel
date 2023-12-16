<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   function index()
   {
    // return view('Students.index', ['students' => Student::latest()->get()]);
    return view('Students.index', ['students' => Student::latest()->paginate(3)]);
   }

   function create()
   {
     return view('Students.create');
   }

   function save(Request $request)
   {
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'image' => 'required|mimes:jpeg,jpg,png|max:1024'
    ]);

    $imageName = time().".".$request->image->extension();
    $request->image->move(public_path('students'),$imageName);

    $student = new Student();
    $student->sname = $request->name;
    $student->addr = $request->address;
    $student->image = $imageName;

    $student->save();

    return redirect('/students/create')->with('status', "Added successfully..!");
   }

   function update(Request $request, $id)
   {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

    $student = Student::where('id',$id)->first();
    $student->sname = $request->name;
    $student->addr = $request->address;
    
    if(!empty($request->image))
    {
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path('students'),$imageName);
        $student->image = $imageName;
    }

    $student->save();

    return redirect('/students/'.$id.'/edit')->with('status', "Updated successfully..!");
   }

   function edit($id)
   {
        $student = Student::where('id',$id)->first();
    return view('Students.edit',['student' => $student]);
   }

   function delete($id)
   {
        $student = Student::where('id',$id)->first();
        $student->delete();
    return redirect('/')->with('status', "Deleted successfully..!");
   }

   function show($id){
        $student = Student::where('id',$id)->first();
        return view('students.show', ['student' =>  $student]);
   }
}
