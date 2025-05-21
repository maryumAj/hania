@extends('layout')

@section('content')
    <h2>Students List</h2>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
            </tr>
        @endforeach
    </table>
@endsection
