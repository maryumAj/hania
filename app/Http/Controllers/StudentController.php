<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // View all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show form to add student
    public function create()
    {
        return view('students.create');
    }

    // Store new student
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
        ]);

        // Create student
        Student::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Redirect to index with success message
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }
}
