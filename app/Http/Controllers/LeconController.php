<?php

namespace App\Http\Controllers;

use App\Lecon;
use Illuminate\Http\Request;

class LeconController extends Controller
{

    public function Ajouter(Request $request,int $course_id){
        $lecon =new Lecon();
        $lecon->titre=$request->titre;
        $lecon->contenu=$request->contenu;
        $lecon->course_id=$course_id;
        $lecon->save();
        $listelecons = Lecon::all()->where('course_id',$course_id);
        return view('showlecons')->with('listelecons',$listelecons)->with('course_id',$course_id);
    }

    public function getListe(int $course_id){
        $listelecons = Lecon::all()->where('course_id',$course_id);
        return view('showlecons')->with('listelecons',$listelecons)->with('course_id',$course_id);
    }

    public function getOneLecon(int $lecon_id){
        $oneLecon=Lecon::where('id',$lecon_id)->first();
        return view('showonelecon')->with('oneLecon',$oneLecon);
    }
}
