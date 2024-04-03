<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\SubscriptionRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SubscriptionController extends Controller
{
    // Afficher tous les abonnements

    public function showPricing()
    {
        return view('admin.subscription.index');
    }

    public function index()
    {
        $subscriptions = Subscription::all();
        // dd($subscriptions);
        return view('admin.subscription.index', compact('subscriptions'));
    }

    // Afficher le formulaire de création d'un abonnement
    public function create()
    {
        return view('admin.subscription.create');
    }




    // Enregistrer un nouvel abonnement
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'type' => 'required|string',
            'title' => 'required|string',
            'advantage1' => 'nullable|string',
            'advantage2' => 'nullable|string',
            // Ajoutez d'autres validations si nécessaire
        ]);

        Subscription::create($request->all());

        return redirect()->route('admin.subscriptions.index')->with('success', 'Abonnement créé avec succès.');
    }

    // Afficher les détails d'un abonnement
    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', compact('subscription'));
    }

    // Afficher le formulaire de modification d'un abonnement
    public function edit($id)
    {
        $subscription = Subscription::findOrFail($id);
        return view('admin.subscription.update', compact('subscription'));
    }

    // Mettre à jour un abonnement existant
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'type' => 'required|string',
            'title' => 'required|string',
            'advantage1' => 'nullable|string',
            'advantage2' => 'nullable|string',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $subscription->update($request->all());

        return redirect()->route('admin.subscriptions.index')->with('success', 'Abonnement mis à jour avec succès.');
    }

    // Supprimer un abonnement
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('admin.subscriptions.index')->with('success', 'Abonnement supprimé avec succès.');
    }





    public function storeRequest(Request $request)
    {
        $request->validate([
            'subscription_type' => 'required',
        ]);

        $subscriptionRequest = new SubscriptionRequest();
        $subscriptionRequest->user_id = auth()->id();
        $subscriptionRequest->subscription_type = $request->subscription_type;
        $subscriptionRequest->save();

        return redirect()->back()->with('success', 'Votre demande a été soumise avec succès.');
    }





    public function getSubscriptionRequests()
    {
        $user = Auth::user(); // Obtenez l'utilisateur connecté
        return $user->subscriptionRequests; // Renvoie les demandes d'abonnement de l'utilisateur connecté
    }

    // Afficher tous les abonnements
    public function index2()
    {
        $subscriptionRequested = $this->getSubscriptionRequests(); // Appel de la méthode pour récupérer les demandes d'abonnement
        $subscriptions = Subscription::all(); // Récupérer tous les abonnements
        return view('admin.subscription.index', compact('subscriptions', 'subscriptionRequested')); // Passez les données à la vue
    }

   






    public function approve(SubscriptionRequest $subscriptionRequest)
    {
        $subscriptionRequest->update(['status' => 'approved']);
        // Envoyer une notification à l'utilisateur
        return redirect()->back()->with('success', 'Demande approuvée avec succès.');
    }

    public function reject(SubscriptionRequest $subscriptionRequest)
    {
        $subscriptionRequest->update(['status' => 'rejected']);
        // Envoyer une notification à l'utilisateur
        return redirect()->back()->with('success', 'Demande rejetée avec succès.');
    }
}
