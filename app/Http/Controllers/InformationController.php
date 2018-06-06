<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Carbon\Carbon;
class InformationController extends Controller
{			

    public function index()
    {
    	$students = Student::all();//all students
         
            $age = 18;
    		// prepare dates for comparison
    		$minDate = Carbon::today()->subYears($age); 

    	$studentsEighteen = Student::where('dob', '<', $minDate)->get();
    	    //all student who are older than 18
        
    	  
        $studentsEightClass = Student::whereHas('class', function ($query) {
                              $query->where('name', 'like', 'class 8');
                               })
                             ->whereHas('class', function ($query) {
                              $query->where('year', 'like', 2010);  })
                             ->get();
            //all students in class 8 in 2010 


           $studentAge = 16;
           $studentMinDate = Carbon::today()->subYears($studentAge);
           $parentAge  = 50;
           $parentMinDate = Carbon::today()->subYears($parentAge)
                            ->toDateString();

         $studentsSixteen = Student::where('dob', '<', $studentMinDate)
                             ->with(['parents'=>function($query){   $query->where('dob', '<', '".$parentMinDate."');}])->get();
        
    	    //show students who are older than 16 and who have parents older than 50.                 
    	                    
    	return view('admin.mis.index',compact('students','studentsEighteen','studentsEightClass','studentsSixteen'));
    }

    public function student(){
    	$students = Student::all();
    	$studentsId = Student::pluck('name','id');

    	return view('admin.mis.student',compact('students','studentsId'));
    }
    public function create(Request $request){
    	$request->validate([
    	 'student_id' => 'required',
    	]);
    	$student = Student::findOrFail($request->student_id);
    	$class = $student->class->name;
    	$parents = $student->parents()->get();
    	return view('admin.mis.studentdetails',compact('student','class','parents'));
    }
}
