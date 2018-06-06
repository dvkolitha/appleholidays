<?php

namespace App\Http\Controllers;

use App\Student;
use App\Parents;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes=\App\Classes::pluck('name','id');
        $parents=\App\Parents::pluck('name','id');
        return view('admin.students.create',compact('classes','parents'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $input = $request->all();
           $request->validate([
            'name' => 'required',
            'class_id'=>'required',
            'dob'=>'required|date',
           ]);
        //create student
           $student = new Student;
           $student->name = $request->name;
           $student->city = $request->city;
           $student->class_id = $request->class_id;
           $student->dob = $request->dob;
           $student->save();

        //create pivote table records for many to many relationship 
          $allInput = $request->all();
    $numberOfDataFields = sizeof($allInput['parent_id']);//for Parents
    for ($i = 0; $i < $numberOfDataFields ; $i++) {
       $student->parents()->attach($allInput['parent_id'][$i]);
    }  
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $classes=\App\Classes::pluck('name','id');
        $parents=\App\Parents::pluck('name','id');
        $parents=\App\Parents::all();
        $selectedParents = $student->parents()->get();
        $notSelectedParents = $parents->diff($selectedParents)->pluck('name','id');
        return view('admin.students.edit',compact('student','classes','notSelectedParents','selectedParents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $input = $request->all();
        $request->validate([
          'name' => 'sometimes|string',
          'city'=>'sometimes|string',
          'dob'=>'sometimes|date',
        ]);
        $student =  Student::findOrFail($student->id);
        $student->update($input);
        $parentsOfStudent = $student->parents()->get();
        $requestParents = collect($input['parent_id']);
          
       if ($student->checkParents($parentsOfStudent , $requestParents)!==false) {
            $student->parents()->detach();
            $numberOfDataFields = sizeof($input['parent_id']);//for Parents
            for ($i = 0; $i < $numberOfDataFields ; $i++) {
               $student->parents()->attach($input['parent_id'][$i]);
            }        
       }
        
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students');
    }
}
