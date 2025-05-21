<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Student Management System - Home</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #eef2f3, #8e9eab);
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            height: 60px;
            background: #2c3e50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .header h1 {
            font-size: 20px;
        }

        .header .user-info {
            font-size: 14px;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(145deg, #2c3e50, #34495e);
            color: white;
            padding-top: 20px;
            box-shadow: 5px 0 15px rgba(0,0,0,0.2);
            height: 100vh;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
        }

        .nav-item {
            padding: 15px 20px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            position: relative;
            user-select: none;
        }

        .nav-item:hover {
            background-color: #1abc9c;
            transform: translateX(5px);
        }

        /* Child menu container */
        .nav-item .child-menu {
            display: none;
            background-color: #16a085;
            margin-top: 5px;
            border-radius: 5px;
            overflow: hidden;
            /* Remove transform from parent hover to keep child visible */
            /* We'll keep this behavior as is */
        }

        /* Show child menu on parent hover */
        .nav-item:hover .child-menu {
            display: block;
        }

        /* Child menu links */
        .child-menu .nav-child {
            display: block;
            padding: 10px 30px;
            background-color: #1abc9c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            font-size: 15px;
        }

        .child-menu .nav-child:hover {
            background-color: #148f77;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 100px 40px 80px;
        }

        .main-content h1 {
            font-size: 28px;
            color: #2c3e50;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-top: 0;
            color: #34495e;
        }

        /* Footer */
        .footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            left: 250px;
            right: 0;
            bottom: 0;
            font-size: 14px;
        }

        /* Ensure sidebar links have correct color and no underline */
        .sidebar a {
            color: inherit;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
                padding: 100px 20px 80px;
            }
            .header {
                left: 0;
            }
            .footer {
                left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>SMS Dashboard</h2>

        <div class="nav-item">Dashboard</div>

        <div class="nav-item">Students
            <div class="child-menu">
                <a href="{{ route('students.create') }}" class="nav-child">Add Student</a>
                <a href="{{ route('students.index') }}" class="nav-child">View Students</a>
            </div>
        </div>

        <div class="nav-item">Courses
            <div class="child-menu">
                <a href="#" class="nav-child">Add Course</a>
                <a href="#" class="nav-child">View Courses</a>
            </div>
        </div>

        <div class="nav-item">Attendance</div>

        <div class="nav-item">Exams
            <div class="child-menu">
                <a href="#" class="nav-child">Schedule Exam</a>
                <a href="#" class="nav-child">Results</a>
            </div>
        </div>

        <div class="nav-item">Teachers</div>
        <div class="nav-item">Reports</div>
        <div class="nav-item">Settings</div>
        <div class="nav-item">Logout</div>
    </div>

    <!-- Header -->
    <div class="header">
        <h1>Student Management System</h1>
        <div class="user-info">Welcome, Admin | <a href="#" style="color: #1abc9c;">Profile</a></div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome Back!</h1>
        <p>Here’s a quick overview of your system:</p>

        <div class="dashboard-cards">
            <div class="card">
                <h3>Total Students</h3>
                <p>{{ $totalStudents }}</p>
            </div>
            <div class="card">
                <h3>Total Courses</h3>
                <p>{{ $totalCourses }}</p>
            </div>
            <div class="card">
                <h3>Teachers</h3>
                <p>{{ $totalTeachers }}</p>
            </div>
            <div class="card">
                <h3>Exams Scheduled</h3>
                <p>{{ $upcomingExams }} Upcoming</p>
            </div>
            <div class="card">
                <h3>Recent Attendance</h3>
                <p>{{ $attendanceStatus }}</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        © 2025 Student Management System | Contact: admin@sms.com | +123-456-7890
    </div>

</body>
</html>
