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

  


    public function adminCoaches()
    {
        $coaches = User::where('role', 'coach')->get();

        $subscribedUsers = User::whereHas('subscriptionRequests', function ($query) {
            $query->where('status', 'approved');
        })
            ->with('client')
            ->get();

        return view('admin.coaches.index', compact('coaches', 'subscribedUsers'));
    }




    public function Profile()
    {
        $coachID = auth()->user()->id;
        $clients = Client::where('coach_id', $coachID)->get();
    
        $users = [];
        foreach ($clients as $client) {
            $user = User::find($client->user_id);
            
            $users[] = [
                'name' => $user->name,
                'email' => $user->email,
                'image' => $user->image,
            ];
        }
    
        // Vérifiez les détails des utilisateurs récupérés
        // dd($users);
    
        return view('coach.specialization', compact('clients', 'users'));
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



        return redirect()->route('coach.statistics')->with('success', 'Specialization added successfully!');
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



    public function getStatistics()
{
    $subscribedUsersCount = SubscriptionRequest::where('status', 'approved')->count();

    $totalusers =User::where('role', 'user')
    ->count();
    


    $coachesCount = User::where('role','coach')->count();
    // dd($coachesCount);

    

    $coachId=auth()->user()->id;
    // dd($coachId);
    $usersAssign =client::where('coach_id',$coachId)->count();



    return view('coach.dashboard_coach', [  
        'subscribedUsersCount'=>$subscribedUsersCount,
        'totalusers'=>$totalusers,
        'coachesCount' => $coachesCount,
        'usersAssign' => $usersAssign,
    ]);


}





public function getUsers(){
$coachID=auth()->user()->id;
$users=client::where('coach_id',$coachID);

dd($users);


}


}
