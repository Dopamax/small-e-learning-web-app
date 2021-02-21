<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function Ajouter(Request $request,int $level_id){

        $course= new Course();
        $course->intitule=$request->intitule;
        $course->description='';
        $course->level_id=$level_id;
        $course->save();
        $listecourses = Course::all()->where('level_id',$level_id);
        return view('showcourses')->with('listecourses',$listecourses)->with('level_id',$level_id);
    }

    public function getListe(int $level_id){
        $listecourses = Course::all()->where('level_id',$level_id);
        return view('showcourses')->with('listecourses',$listecourses)->with('level_id',$level_id);
    }
}
