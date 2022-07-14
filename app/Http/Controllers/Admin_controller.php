<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_controller extends Controller
{
    public static function admin()
    {
        $user=Auth::user();
        $locations=Location::all();
        $voitures=Voiture::all();
        return view('admin.admin', compact('user','locations','voitures'));
    }
}
