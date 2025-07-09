@extends('layouts.app')

@section('content')
    <h2>Employees: {{ $department->name }}</h2>
    <table class="custom-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Responsibilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->responsibilities }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
