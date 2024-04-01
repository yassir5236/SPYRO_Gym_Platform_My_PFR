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
        $client = Auth::user()->client;
        return view('clients.profile', compact('client'));
    }

    public function showPricing()
    {
        return view('clients.pricing');
    }

    public function showProducts()
    {
        return view('clients.products');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'age' => 'required|integer',
    //         'weight' => 'required|numeric',
    //         'height' => 'nullable|numeric', 
    //         'fitness_goal' => 'nullable|string',
           
    //     ]);

    //     $request->user()->client()->create([
    //         'age' => $request->age,
    //         'weight' => $request->weight,
    //         'height' => $request->height, 
    //         'fitness_goal' => $request->fitness_goal, 
    //     ]);

    //     return redirect()->route('home')->with('success', 'Profil mis à jour avec succès !');
    // }


//store avec update ms fonctione pas
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'height' => 'nullable|numeric',
            'fitness_goal' => 'required|string', // Champ obligatoire
            'experience_level' => 'required|string', // Champ obligatoire
        ]);
        
        // Créer ou mettre à jour les informations du client
        Auth::user()->client()->updateOrCreate([], $request->only(['age', 'weight', 'height', 'fitness_goal', 'experience_level']));
        
        return redirect()->route('home')->with('success', 'Profil mis à jour avec succès !');
        
    }
    
}

