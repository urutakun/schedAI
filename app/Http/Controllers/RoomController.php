<?php

namespace App\Http\Controllers;

use App\Models\Room;
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

    public function store(Request $request){
      $validated = $request->validate([
        'room_code' => 'required|string|max:50|unique:rooms,room_code',
        'capacity'  => 'required|integer',
      ]);

      $room = Room::create($validated);

      if(!$room){
        return redirect()->back()->with([
          'message' => 'Failed to create room'
        ]);
      }

      return redirect()->route('rooms.index')->with('message', 'Room created successfully');
    }
}
