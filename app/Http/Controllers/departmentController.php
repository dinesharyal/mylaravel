<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employees;

class DepartmentController extends Controller
{
    public function fetchdept()
    {
        $departments = Department::all();
        return view('department', ['department' => $departments]);
    }

    public function showByDepartment($departmentId)
    {
        $department = Department::findOrFail($departmentId);
        $employees = Employees::where('department_id', $departmentId)->get();
        return view('employee', compact('employees', 'department'));
    }
    
}
