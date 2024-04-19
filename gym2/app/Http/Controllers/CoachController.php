<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coach;
use App\Models\SubscriptionRequest;



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




    // public function saveSpecialization(Request $request)
    // {
    //     $request->validate([
    //         'specialization' => 'required|string|max:255',
    //     ]);
    //     // $user = auth()->user()->coach;


    //     // $coach = auth()->user()->role;

    //     $coach = auth()->user()->coach;

    //     // // dd($coach);

    //     // if ($coach !== "coach") {
    //     //     // Si l'utilisateur n'est pas un coach, rediriger avec un message d'erreur
    //     //     return redirect()->back()->with('error', 'You are not authorized to perform this action.');
    //     // }


    //     // $request->user()->coach()->create([
    //     //     'specialization' => $request->specialization,
    //     //     'user_id' => auth()->user()->id,
    //     // ]);

    //     $coach->update([
    //         'specialization' => $request->specialization,
    //     ]);
    //     return redirect()->route('coach.dashboard_coach')->with('success', 'Specialization added successfully!');
    // }


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
}
