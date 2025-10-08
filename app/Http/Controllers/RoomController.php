<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomController extends Controller
{
    public function index(){
      $rooms = Room::all();
      return Inertia::render('Admin/Room', ['rooms' => $rooms]);
    }

    public function create(){
      return Inertia::render('Admin/RoomForm');
    }

    public function store(Request $request){
      $validated = $request->validate([
        'room_name' => 'required|string',
        'room_type' => 'required|string|in:laboratory,classroom',
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
