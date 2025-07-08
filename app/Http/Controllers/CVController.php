<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\CVuser;

class CVController extends Controller
{
    // View (download or open) the CV
    public function view($id)
    {
        $cv = CVuser::findOrFail($id);

        if (!Storage::disk('public')->exists($cv->cv_path)) {
            return back()->with('error', 'CV file not found.');
        }

        return response()->file(storage_path("app/public/{$cv->cv_path}"));
    }

    // Delete the CV
    public function delete($id)
    {
        $cv = CVuser::findOrFail($id);

        // Delete file from storage
        Storage::disk('public')->delete($cv->cv_path);

        // Delete DB entry
        $cv->delete();

        return redirect()->route('showProfile')->with('success', 'CV deleted successfully.');
    }
}
