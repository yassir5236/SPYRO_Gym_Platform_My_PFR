<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;


class StaticController extends Controller
{
    public function showAbout()
    {
       
        return view('about');
    }

    public function showContact()
    {
       
        return view('contact');
    }

    public function showGalery()
    {
       
        return view('galery');
    }

    
    public function showSubscription()
    {
        $subscriptions = Subscription::all();

        return view('Subscription',compact('subscriptions'));
    }

 


    
    public function showWelcome()
    {
       
        return view('Welcome');
    }
    
}
