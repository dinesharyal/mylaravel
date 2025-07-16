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
        return view('department', ['departments' => $departments]); //use departments as key of associative array same is used in view.
    }

    public function showByDepartment($departmentId)
    {
        $department = Department::findOrFail($departmentId);
        $employees = Employees::where('department_id', $departmentId)->get();
        return view('employee', compact('employees', 'department'));
    }
    
}
