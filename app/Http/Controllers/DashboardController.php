<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample dynamic data (later you can replace this with database values)
        $data = [
            'totalStudents' => 250,
            'totalCourses' => 35,
            'totalTeachers' => 15,
            'upcomingExams' => 5,
            'attendanceStatus' => 'Updated Today',
        ];

        return view('welcome', $data);
    }
}