<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DepartmentController extends Controller
{
    public function index(){
      $departments = Department::all();
      return Inertia::render('Admin/Department', ['departments' => $departments]);
    }

    public function create(){
      return Inertia::render('Admin/DepartmentForm');
    }

    public function store(Request $request){
      $validated = $request->validate([
        'code' => 'string|required',
        'name' => 'string|required',
        'head' => 'string|required'
      ]);

      $department = Department::create($validated);

      if(!$department){
        return redirect()->back()->with([
          'message' => 'Failed to create department'
        ]);
      }

      return redirect()->route('departments.index')->with('message', 'Department created successfully');
    }
}
