<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RBB Intranet</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

<div class="header">
    <img src="{{ asset('images/rbb-logo.png') }}" alt="RBB Logo" class="logo">
    <h1>Rastriya Banijya Bank Ltd. - Intranet</h1>
</div>

<nav class="navbar">
    <ul>
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/department') }}">Departments</a></li>
        <li><a href="{{ url('/circular') }}">Circular</a></li>
        <li><a href="{{ url('/policy') }}">Policy</a></li>
        <li><a href="{{ url('/training') }}">Training & FAQ</a></li>
        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
        <li><a href="{{ url('/union') }}">Union Notice</a></li>
    </ul>
</nav>

</body>
</html>-->
@extends('layouts.app')

@section('content')
    <h2>Circulars</h2>
    <table class="custom-table">
        <thead>
            <tr>
                <th>Circular No</th>
                <th>Date</th>
                <th>Department</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($circular as $circular)
                <tr>
                    <td>{{ $circular->circular_no}}</td>
                    <td>{{ $circular->circular_date }}</td>
                    <td>{{ $circular->department}}</td>
                    <td>{{ $circular->subject}}</td>
                    <td><a href="{{ asset($circular->file_path) }}" target="_blank">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection