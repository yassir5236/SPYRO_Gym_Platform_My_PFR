<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
    public function showWelcome()
    {
       
        return view('Welcome');
    }
    
}