<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;


class LevelController extends Controller
{
    
    public function Ajouter(Request $request){

        $level= new Level();
        $level->intitule=$request->intitule;
        $level->description='';
        $level->save();
        $listelevels = Level::all();
        return view('welcome')->with('listelevels',$listelevels);
    }

    public function getListe(){
        $listelevels = Level::all();
        return view('welcome')->with('listelevels',$listelevels);
    }
}
