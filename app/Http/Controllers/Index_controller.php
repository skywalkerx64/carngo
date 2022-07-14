<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Index_controller extends Controller
{
    public function home()
    {
        $user=Auth::user();
        return view('accueil', compact('user'));
    }
}
