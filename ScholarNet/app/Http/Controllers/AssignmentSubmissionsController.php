<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\assignment_submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
        $exercices1=auth()->user()->exercice->sortByDesc('created_at');
        $exercices=$exercices1->map(function($exercice){
            $createdAt1=Carbon::parse($exercice->created_at);
            $exercice->createdAt=$createdAt1->diffForHumans();
            return $exercice;
        });
        return view('student/mySubmittedAssignment',compact('exercices'));
    }

    public function destroy(assignment_submissions $exercice1){
        $exercice = assignment_submissions::find($exercice1->id);
        $exercice->delete();
        //dd($exercice);
        return redirect()->back()->with('success', 'Assignment deleted successfully');
    }

    public function download(assignment_submissions $exercice){
        return response()->download('storage/'.$exercice->fichier);
    }
    public function submissions($assignmentId)
    {
        $submissions = assignment_submissions::where('assignment_id', $assignmentId)->get();
        return view('teacher.assignment_submissions', compact('submissions'));
    }
    public function updateNote($id, Request $request)
    {
        DB::table('assignment_student')
            ->where('id', $id)
            ->update(['Note' => $request->input('Note')]);

            $request->session()->put('oldInput', $request->input());

        return redirect()->back()->with('success', 'Note updated successfully');
    }
}
