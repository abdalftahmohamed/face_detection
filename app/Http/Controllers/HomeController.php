<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('auth.selection');
    }

    public function dashboard()
    {
        $students = Student::all();
        $Teachers= Teacher::all();
        return view('dashboard', compact('students','Teachers'));
    }
}
