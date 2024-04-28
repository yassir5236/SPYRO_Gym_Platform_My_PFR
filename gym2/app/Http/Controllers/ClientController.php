<?php


namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;




class ClientController extends Controller
{





    public function showProfileForm()
    {
        $client = auth()->user()->client;
    
        if ($client && $client->coach_id) {
            $coach = $client->coach_id;
            $assignCoach = User::findOrFail($coach);
        } else {
            $assignCoach = null; 
        }
    
        $user = auth()->user()->id;
        $clientss = User::findOrFail($user);
    
        return view('clients.profile', compact('assignCoach', 'clientss', 'client'));
    }
    








    public function showPricing()
    {
        return view('clients.pricing');
    }

    public function showProducts()
    {
        return view('clients.products');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'height' => 'nullable|numeric',
            'fitness_goal' => 'required|string', 
            'experience_level' => 'required|string', 
        ]);

        Auth::user()->client()->updateOrCreate([], $request->only(['age', 'weight', 'height', 'fitness_goal', 'experience_level']));

        return redirect()->route('clients.showProfileForm')->with('success', 'Profil mis à jour avec succès !');
    }


    public function showSubscribedUsers()
    {
        $subscribedUsers = User::whereHas('subscriptionRequests', function ($query) {
            $query->where('status', 'accepted');
        })->get();

        return view('admin.coaches.index', ['subscribedUsers' => $subscribedUsers]);
    }
}
