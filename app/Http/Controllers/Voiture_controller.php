<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin_controller;

class Voiture_controller extends Controller
{
    public static function voitures()
    {
        $user=Auth::user();
        $voitures=Voiture::all();
        return view('voitures.voitures', compact('voitures','user'));
    }
    public static function voiture($id)
    {
        $user=Auth::user();
        $voiture=Voiture::findorFail($id);
        return view('voitures.voiture', compact('voiture','user'));
    }
    public static function add_form()
    {
        $user=Auth::user();
        return view('voitures.add_form', compact('user'));
    }
    public static function add(Request $request)
    {
        $user=Auth::user();
        $voiture=new Voiture;
        $voiture->marque=$request->marque;
        $voiture->modele=$request->modele;
        $voiture->description=$request->description;
        $voiture->cout=$request->cout;
        $voiture->n_dispo=$request->stock;
        $voiture->image=Storage::disk('public')->put('voiture_images',$request->image);
        $voiture->save();
        return Voiture_controller::voitures();
    }
    public static function edit_form($id)
    {
        $user=Auth::user();
        $voiture=Voiture::findorFail($id);
        return view('voitures.edit_form', compact('user','voiture'));
    }
    public static function edit(Request $request)
    {
        $voiture=Voiture::findorFail($request->voiture_id);

        if($request->image!=null)
        {
            $voiture->marque=$request->marque;
            $voiture->modele=$request->modele;
            $voiture->description=$request->description;
            $voiture->cout=$request->cout;
            $voiture->n_dispo=$request->stock;
            $voiture->image=Storage::disk('public')->put('voiture_images',$request->image);
            $voiture->save();
        }
        else
        {
            $voiture->marque=$request->marque;
            $voiture->modele=$request->modele;
            $voiture->description=$request->description;
            $voiture->cout=$request->cout;
            $voiture->n_dispo=$request->stock;
            $voiture->save(); 
        }
        return Admin_controller::admin();
    }
    public static function delete($id)
    {
        $voiture=Voiture::findorFail($id);
        $locations=$voiture->locations;
        foreach($locations as $location)
        {
            $location->deleted_at=now();
            $location->save();
        }
        $voiture->deleted_at=now();
        $voiture->save();
        return Admin_controller::admin();
    }
}
