<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    
    // Affiche le formulaire pour saisir l'adresse e-mail
    public function showLinkRequestForm()
    {
        return view('auth.password-reset-request');
    }

    // Envoie le lien de réinitialisation de mot de passe par e-mail
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    
        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
                    ? back()->with('status', trans($status)) // Utilisez 'back()' pour rediriger vers la page précédente avec un message de succès
                    : back()->withErrors(['email' => trans($status)]);
    }
    
}

