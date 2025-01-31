<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FieldController extends Controller
{
    public function detail($id)
    {
        $field = Field::with(['venue', 'schedules'])
            ->where('id', $id)
            ->firstOrFail();

        $fields = Field::where('venue_id', $field->venue_id)->select('id', 'name')->get();

        return view('field-detail', compact('field','fields'));
    }
}
