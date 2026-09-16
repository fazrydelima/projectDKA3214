<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function show(){
        $student = Student::paginate(25);

        return view('students.view_student', compact('student'));
    }

    public function store(Request $request){
        $student = $request->validate([
            'name_student' => 'required|string',
            'cohort' => 'required|integer',
            'class' => 'required|string',
            'no_ic' => 'required|integer',
            'age' => 'required|integer',
        ]);

        Student::create($student);

        return redirect('/viewstudent');
    }

    public function edit($id){
        $student = Student::find($id);

        return view('students.student_update', compact('student'));
    }

    public function update(Request $request, $id){
        $student = $request->validate([
            'name_student' => 'required|string',
            'cohort' => 'required|integer',
            'class' => 'required|string',
            'no_ic' => 'required|integer',
            'age' => 'required|integer',
        ]);

        $value = Student::findOrFail($id);
        $value -> update($student);

         return redirect('/viewstudent')->with('success', 'Rekod berjaya dikemaskini');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        $student -> delete($student);

         return redirect('/viewstudent')->with('success', 'Rekod berjaya dipadam');
    }


}
