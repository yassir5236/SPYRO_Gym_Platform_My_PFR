<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coach;
use App\Models\SubscriptionRequest;
use Illuminate\Support\Facades\Auth;




class CoachController extends Controller
{
    public function dashboard()
    {
        return view('coach.dashboard_coach');
    }

    public function showtrainers()
    {
        return view('coach.trainers');
    }

    // public function adminCoaches()
    // {
    //     $coaches = User::where('role', 'coach')->get();
    //     return view('admin.coaches.index', compact('coaches'));
    // }


    public function adminCoaches()
    {
        $coaches = User::where('role', 'coach')->get();



        // $subscribedUsers = User::whereHas('subscriptionRequests', function ($query) {
        //     $query->where('status', 'approved');
        // })->get();

        $subscribedUsers = User::whereHas('subscriptionRequests', function ($query) {
            $query->where('status', 'approved');
        })
            ->with('client')
            ->get();

        // Afficher les utilisateurs avec leurs objectifs et niveaux ou effectuer d'autres actions



        // dd($users);

        return view('admin.coaches.index', compact('coaches', 'subscribedUsers'));
    }




    public function specializationForm()
    {

        return view('coach.specialization');
    }







    public function saveSpecialization(Request $request)
    {
        $request->validate([
            'specialization' => 'required|string|max:255',
        ]);

        $coach = auth()->user()->coach;

        if (!$coach) {
            // Si l'utilisateur n'a pas de relation coach, créer un nouvel enregistrement dans la table coaches
            $request->user()->coach()->create([
                'specialization' => $request->specialization,
            ]);
        } else {
            // Si l'utilisateur a déjà une relation coach, mettre à jour sa spécialisation
            $coach->update([
                'specialization' => $request->specialization,
            ]);
        }

        return redirect()->route('coach.dashboard_coach')->with('success', 'Specialization added successfully!');
    }




    // public function showClientsWithCoaches()
    // {
    //     // Récupérer l'utilisateur connecté
    //     $coach = auth()->user()->client->coach_id;
    //     $user = auth()->user()->id;

    //     $assignCoach = User::findOrfail($coach);
    //     $clientss = User::findOrFail($user);

    //     $client = Auth::user()->client;
    //     return view('clients.profile', compact('client'));

    //     return view('clients.coach', compact('assignCoach','clientss','client'));
    // }


}
