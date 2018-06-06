<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Parents;
use App\Classes;
use App\Student;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $users = User::all();
        $parents = Parents::all();
        $classes = Classes::all();
        $students = Student::all();
        return view('admin.adminDashboard',compact('users','parents','classes','students'));
    }
    public function user()
    {
        $users = User::all();
        $parents = Parents::all();
        $classes = Classes::all();
        $students = Student::all();
        return view('user.userDashboard',compact('users','parents','classes','students'));
    }
}
