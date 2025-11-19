<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScholarshipContent;

class ScholarshipContentController extends Controller
{
    // Display specific country’s content
    public function show($country)
    {
        $country = ucfirst(strtolower($country)); // normalize (Australia, UK, etc.)

        // if not exist, create empty record
        $content = ScholarshipContent::firstOrCreate(['country' => $country]);

        return view('admin.scholarship_content.show', compact('content'));
    }
     public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'heading1' => 'nullable|string|max:255',
            'paragraph1' => 'nullable|string',
            'heading2' => 'nullable|string|max:255',
            'paragraph2' => 'nullable|string',
            'heading3' => 'nullable|string|max:255',
            'paragraph3' => 'nullable|string',
            'heading4' => 'nullable|string|max:255',
            'paragraph4' => 'nullable|string',
            'heading5' => 'nullable|string|max:255',
            'paragraph5' => 'nullable|string',
        ]);

        $content = ScholarshipContent::findOrFail($id);
        $content->update($validated);
         return redirect(url('/dashboard'))->with('success', 'Inquiry updated successfully!');
    }
}
