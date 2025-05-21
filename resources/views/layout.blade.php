<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #1e88e5;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        nav {
            background-color: #ffffff;
            padding: 15px 20px;
            display: flex;
            gap: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        nav a {
            text-decoration: none;
            color: #1e88e5;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.2s ease;
        }

        nav a:hover {
            background-color: #e3f2fd;
        }

        .container {
            padding: 30px 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-top: 10px;
            background-color: #1e88e5;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #1565c0;
        }

        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px 15px;
            border-left: 5px solid #4caf50;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        footer {
            text-align: center;
            font-size: 14px;
            padding: 15px;
            background-color: #f1f1f1;
            color: #777;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Student Mangagement System</h1>
    </header>

    <nav>
        <a href="{{ route('students.create') }}">➕ Add Student</a>
        <a href="{{ route('students.index') }}">📋 View Students</a>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Student Management System. All rights reserved.
    </footer>

</body>
</html>
