<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\assignment_submissions;
use Illuminate\Http\Request;

class AssignmentSubmissionsController extends Controller
{
    public function create(Assignment $assignment){
        return view('student/submitmyassignment',compact('assignment'));
    }

    public function store(Assignment $assignment,Request $request){
        $req=$request->validate([
            'fichier'=>'required',
        ]);
        $req["id_student"]=auth()->user()->id;
        $req["assignment_id"]=$assignment->id;
        $req['fichier'] = $request->file('fichier')->store('exercices','public');
        assignment_submissions::create($req);
        return to_route('assignment.showDetails',$assignment->id)->with('success',"Your assignment submitted successffuly");
    }
    

    public function index(){
        $exercices=auth()->user()->exercice->sortByDesc('created_at');
        dd($exercices);
    }
}
