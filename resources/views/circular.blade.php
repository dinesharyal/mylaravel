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
    <h2>Welcome to Circular Page</h2>
    <p>This is the RBB Intranet circular content.</p>
@endsection