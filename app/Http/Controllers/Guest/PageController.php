<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy("departure_date", "asc")
            ->orderBy("departure_time", "asc")
            ->get();

        return view("home", compact("trains"));
    }
}
