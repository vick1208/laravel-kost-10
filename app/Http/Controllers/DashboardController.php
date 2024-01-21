<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $latest_placements = Placement::whereNotNull('check_in_date')
            ->whereNull('check_out_date')
            ->latest()
            ->limit(5)
            ->get();
        $active_occupants = Placement::selectRaw('occupant_id, count(*) as placement_num')
            ->groupBy('occupant_id')
            ->whereNotNull('check_in_date')
            ->whereNull('check_out_date')
            ->get();
        $placements_not_available = Placement::selectRaw('room_id, count(*) as placement_num')
            ->groupBy('room_id')
            ->whereNotNull('check_in_date')
            ->whereNull('check_out_date')
            ->get();
        //   Disini akan dibuat webpage dashboard untuk kost
        $data = [
            "title" => "Home",
            // "test" => "Sudah Ok",
            'latest_placements' => $latest_placements,
            'num_of_rooms' => $rooms->count(),
            'num_of_rooms_unavailable' => count($placements_not_available),
            'num_of_occupants' => count($active_occupants),
        ];
        return view("pages.index", $data);
    }
}
