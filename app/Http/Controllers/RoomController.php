<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomController extends Controller
{
    public function index(){
      return Inertia::render('Admin/Room');
    }

    public function create(){
      return Inertia::render('Admin/RoomForm');
    }
}
