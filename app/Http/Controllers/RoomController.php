<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index(){
        // $schools = School::all();
        $rooms =Room::paginate(10);
        return view('room.index', [
            'rooms' => $rooms
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title" => "required|min:3|max:64|string",
            "school_id" => "required|integer"
        ]);

        $room = new Room();
        $room->title = $attributes["title"];
        $room->school_id = $attributes["school_id"];
        $room->save();

        return back()->with("success", __('Room saved.'));
    }
}
