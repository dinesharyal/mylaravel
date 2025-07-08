<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function showView()
    {
        return view('myView');
    }
    
    public function detailsView()
    {
        $name="Amrit Tamang";
        $address="Kathmandu, Nepal";

        return view('detailsView', compact('name', 'address'));
    }
}
