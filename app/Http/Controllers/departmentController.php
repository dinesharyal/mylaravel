<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function fetchdept()
    {
        $departments = \DB::table('department')->get();
        return view('department', ['department' => $departments]);
    }
}
