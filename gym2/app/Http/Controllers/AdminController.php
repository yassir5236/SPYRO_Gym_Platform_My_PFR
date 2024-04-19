<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coach;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }


    // app/Http/Controllers/AdminController.php

    public function assignCoach(Request $request, $userId)
    {
        $user = User::find($userId);
        $coachId = $request->input('coach_id');

        // Vérifier si l'utilisateur et le coach existent
        if ($user && $coachId) {
            $coach = Coach::find($coachId);

            // Mettre à jour la relation entre l'utilisateur et le coach
            $user->coach()->associate($coach);
            $user->save();

            return redirect()->back()->with('success', 'Coach assigned successfully');
        }

        return redirect()->back()->with('error', 'User or coach not found');
    }

    
}
