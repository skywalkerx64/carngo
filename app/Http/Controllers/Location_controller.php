<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Location_controller extends Controller
{
    public function location_form($id)
    {
        $voiture=Voiture::findorFail($id);
        $user=Auth::user();
        return view('location.form', compact('voiture','user'));
    }
    
    public function location_store(Request $request)
    {
        $user=Auth::user();
        $voiture=Voiture::findorFail($request->voiture_id);
        $location=new Location;
        $location->user_id=$user->id;
        $location->voiture_id=$voiture->id;
        $location->duree=$request->duree;
        $location->cout=$voiture->cout*$request->duree;
        $location->prise=now();
        $location->rendu=date('Y-m-d', strtotime($location->prise. ' + '.$request->duree.' days'));
        $location->save();
        return Location_controller::locations();
        

    }
    public static function locations()
    {
        $user=Auth::user();
        $locations=$user->locations->where('statut','!=','resilie');
        return view('location.locations', compact('user','locations'));

    }
    public static function location($id)
    {
        $user=Auth::user();
        $location=Location::findorFail($id);
        $voiture=$location->voiture;
        return view('location.location', compact('user','location','voiture'));

    }
    public static function resiliate($id)
    {
        $user=Auth::user();
        $location=Location::findorFail($id);
        $location->statut='resilie';
        $location->save();
        return Location_controller::locations();

    }
}
