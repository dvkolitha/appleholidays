<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\StudentDetails;
use Illuminate\Support\Facades\Mail;
use App\Student;

class MailController extends Controller
{
    public function index()
    {
    	$students = Student::pluck('name','id');
    	return view('admin.mail.index',compact('students'));
    }

    public function send(Request $request)
    {
        $request->validate([
         'email'=>'required|email',
         'studet_id'=>'required',
        ]);
 
        $student = Student::findOrFail($request->studet_id);
        $parents = $student->parents()->get();
        $class   = $student->class->name;
    	$inputAll = $request->all();
        $email = $request->email;
    	 Mail::to($request->email,auth()->user()->first_name)->send(new StudentDetails($student,$parents,$class));
             	 return redirect()->back();
    }
}
