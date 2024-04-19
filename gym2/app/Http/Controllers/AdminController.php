<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Coach;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }





public function assignCoach(Request $request)
{
    $client = Client::find($request->input('client'));
    // dd($client);
    $coachId = $request->input('coach_id');
    // dd($coachId);

    // Vérifier si le client et le coach existent
    if ($client && $coachId) {
        $coach = Coach::find($coachId);

        // Associer le client au coach sélectionné
        $client->coach_id = $coachId; // Assurez-vous que la clé étrangère est correctement définie dans votre base de données
        $client->save();

        return redirect()->back()->with('success', 'Coach assigned successfully');
    }

    return redirect()->back()->with('error', 'Client or coach not found');
}

    
}
