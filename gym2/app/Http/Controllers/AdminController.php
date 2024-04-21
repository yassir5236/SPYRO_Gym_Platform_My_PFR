<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Coach;
use App\Models\Product;
use App\Models\SubscriptionRequest;

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
















public function getStatistics()
{
    // Count the number of subscribed users
    $subscribedUsersCount = SubscriptionRequest::where('status', 'approved')->count();

    // Count the number of users without a subscription
    $usersWithoutSubscriptionCount =User::where('role', 'user')
    ->orWhere('role', 'coach')
    ->count();
    


    // Count the number of coaches
    $coachesCount = User::where('role','coach')->count();

    // Count the number of products
    $productsCount = Product::count();

    $subscriptionRequests = SubscriptionRequest::with('subscription')->where('status', 'pending')->get();


    return view('admin.dashboard', [
        'subscribedUsersCount' => $subscribedUsersCount,
        'usersWithoutSubscriptionCount' => $usersWithoutSubscriptionCount,
        'coachesCount' => $coachesCount,
        'productsCount' => $productsCount,
        'subscriptionRequests' => $subscriptionRequests
    ]);
}



// public function showSubscriptionRequests()
// {
//     // Charger toutes les demandes de souscription en attente avec leurs abonnements associés
//     $subscriptionRequests = SubscriptionRequest::with('subscription')->where('status', 'pending')->get();

//     return view('admin.dashboard', compact('subscriptionRequests'));
// }

}
