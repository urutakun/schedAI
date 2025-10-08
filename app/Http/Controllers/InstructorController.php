<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InstructorController extends Controller
{
    public function index(){
      return Inertia::render('Admin/Instructor');
    }

    public function create(){
      return Inertia::render('Admin/InstructorForm');
    }
}
