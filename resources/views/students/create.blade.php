{{-- {{-- {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name: </label><br>
        <input type="text" name="name" /><br><br>

        <label>Email: </label><br>
        <input type="email" name="email" /><br><br>

        <label>Phone: </label><br>
        <input type="text" name="phone" /><br><br>

        <label>Course: </label><br>
        <input type="text" name="course" /><br><br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>    --}}
<!-- resources/views/students/create.blade.php -->
{{-- @extends('layout')

@section('content')
<h2>Add Student</h2>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br>
    
    <label>Email:</label>
    <input type="email" name="email" required><br>
    
    <label>Phone:</label>
    <input type="text" name="phone" required><br>
    
    <button type="submit">Add</button>
</form>
@endsection  --}} 
@extends('layout')

@section('content')
    <h2>Add New Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <button type="submit" class="btn">Save Student</button>
    </form>
@endsection

