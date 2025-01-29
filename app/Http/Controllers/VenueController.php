<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use Illuminate\Support\Facades\Log;

class VenueController extends Controller
{
    public function index() {
        $venues = Venue::latest()->paginate(6);
        return view('venue', compact('venues'));
    }

    public function detail($slug)
    {
        $venue = Venue::where('slug', $slug)->with(['fields.schedules', 'sports'])->firstOrFail();

        Log::info($venue);

        return view('detail', compact('venue'));
    }
}