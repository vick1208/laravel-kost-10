<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //   Disini akan dibuat webpage dashboard untuk kost
        $data = ["title" => "Home", "test" => "Sudah Ok"];
        return view("webs.index", $data);
    }
}
