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
    <h2>Union Notice:</h2>
    <table class="custom-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Union Name</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
                <tr>
                    <td>{{ $notice->date }}</td>
                    <td>{{ $notice->union->short_name ?? 'N/A' }}</td>
                    <td>{{ $notice->subject }}</td>
                    <td>
                        @if (!empty($notice->file_path))
                        <a href="{{ asset($notice->file_path) }}" target="_blank">View</a>
                        @else
                        No File
                         @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection