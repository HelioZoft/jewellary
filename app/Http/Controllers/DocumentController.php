<?php

namespace App\Http\Controllers;


use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
  

    
    public function downloadResume($id)
    {
        $career = Career::findOrFail($id);
    
        $resumePath = $career->resume;
    
        if (!Storage::disk('public')->exists($resumePath)) {
            abort(404, 'Resume not found');
        }
    
        $fullPath = Storage::disk('public')->path($resumePath);
    
        $safeName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $career->name);
        $extension = pathinfo($resumePath, PATHINFO_EXTENSION);
        $downloadName = $safeName . '_Resume.' . $extension;

        return response()->download($fullPath, $downloadName);
    }
    

}
