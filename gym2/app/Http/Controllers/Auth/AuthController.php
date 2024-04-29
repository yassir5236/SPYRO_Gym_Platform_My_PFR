<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user'; 
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('imagesUsers', 'public'); 

            $user->image = $imagePath;
        }
        $user->save();

        return redirect('/login')->with('success', 'Votre inscription a été effectuée avec succès. Vous pouvez maintenant vous connecter.');
    }


  


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.getStatistics');
                    break;
                case 'coach':
                    return redirect()->route('coach.statistics');
                    break;
                case 'user':
                    return redirect()->route('clients.showProfileForm');
                    break;
                default:
                    return redirect('/home'); 
                    break;
            }
        }
    
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Les informations d\'identification fournies sont incorrectes.',
        ]);
    }
    








    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}
