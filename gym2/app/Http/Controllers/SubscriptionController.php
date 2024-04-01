<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    // Afficher tous les abonnements
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('subscriptions.index', compact('subscriptions'));
    }

    // Afficher le formulaire de création d'un abonnement
    public function create()
    {
        return view('subscriptions.create');
    }

    // Enregistrer un nouvel abonnement
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'type' => 'required|string',
            'title' => 'required|string',
            'advantage1' => 'nullable|string',
            'advantage2' => 'nullable|string',
            // Ajoutez d'autres validations si nécessaire
        ]);

        Subscription::create($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Abonnement créé avec succès.');
    }

    // Afficher les détails d'un abonnement
    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', compact('subscription'));
    }

    // Afficher le formulaire de modification d'un abonnement
    public function edit(Subscription $subscription)
    {
        return view('subscriptions.edit', compact('subscription'));
    }

    // Mettre à jour un abonnement existant
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'type' => 'required|string',
            'title' => 'required|string',
            'advantage1' => 'nullable|string',
            'advantage2' => 'nullable|string',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $subscription->update($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Abonnement mis à jour avec succès.');
    }

    // Supprimer un abonnement
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('subscriptions.index')->with('success', 'Abonnement supprimé avec succès.');
    }
}
