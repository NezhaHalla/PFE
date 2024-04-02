<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\assignment_submissions;

class AssignmentSubmissionsController extends Controller
{
    public function create(Assignment $assignment){
        Gate::authorize('assignment-details',$assignment);
        return view('student/submitmyassignment',compact('assignment'));
    }

    public function store(Assignment $assignment,Request $request){
        Gate::authorize('assignment-details',$assignment);
        $studentId = auth()->user()->id;


        $existingSubmission = assignment_submissions::where('assignment_id', $assignment->id)
            ->where('id_student', $studentId)
            ->exists();

            if ($existingSubmission) {
                return to_route('assignment.showDetails',$assignment->id)->with('danger',"You have already submitted this assignment.");
            }

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
        Gate::authorize('exercice',$exercice1);
        $exercice = assignment_submissions::find($exercice1->id);
        $exercice->delete();
        //dd($exercice);
        return redirect()->back()->with('success', 'Assignment deleted successfully');
    }

    public function download(assignment_submissions $exercice){
        Gate::authorize('exercice',$exercice);
        return response()->download('storage/'.$exercice->fichier);
    }
    public function submissions($assignmentId)
    {
        $assignment = Assignment::findOrFail($assignmentId);
        Gate::authorize('assignment-details',$assignment);
        $submissionA = DB::table('assignment_student')
        ->where('assignment_id', $assignmentId)
        ->get();

        $submissions = assignment_submissions::where('assignment_id', $assignmentId)->get();
        return view('teacher.assignment_submissions', compact('submissions','submissionA'));
    }

    public function updateNote($assignment_id, $student_id, Request $request)
    {
        $assignment = Assignment::findOrFail($assignment_id);
        Gate::authorize('assignment-details',$assignment);
        DB::table('assignment_student')
            ->where('assignment_id', $assignment_id)
            ->where('student_id', $student_id)
            ->update(['Note' => $request->input('Note')]);

        return redirect()->back()->with('success', 'Note updated successfully');
    }
}
