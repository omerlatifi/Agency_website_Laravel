<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ScholarshipContent;

class ScholarshipController extends Controller
{

    public function show($country)
    {
        $scholarships = ScholarshipContent::where('country', 'LIKE', "%{$country}%")->get();

        if ($scholarships->isEmpty()) {
            abort(404, 'No scholarships found for this country');
        }

        return view('australia', compact('scholarships', 'country'));
    }
}

