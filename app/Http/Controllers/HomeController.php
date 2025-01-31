<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\Sports;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $venues = Venue::with(['fields.schedules'])->get();

        $cities = Venue::select('city')->distinct()->get();
        $sports = Sports::all();

        return view('home', compact('venues', 'cities', 'sports'));
    }
}