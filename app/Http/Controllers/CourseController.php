<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function index(){
      $courses = Course::all();
      return Inertia::render('Admin/Course', ['courses' => $courses]);
    }

    public function create(){
      $departments = Department::all();
      return Inertia::render('Admin/CourseForm', ['departments' => $departments]);
    }
}
