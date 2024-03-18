<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
use Carbon\Carbon;
class AssignmentController extends Controller
{
    public function Assignmentstudent()
    {
        $user = Auth::user();
        if ($user->role === 'Student') {
            $studentAssignments1 = $user->studentAssignments;
            $studentAssignments = $studentAssignments1->map(function($ass){
                $created=Carbon::parse($ass->created_at);
                $ass->createdAt=$created->diffForHumans();
                return $ass;
            });
            return view('student.myAssignement', ['assignments' => $studentAssignments, 'role' => 'Student']);
        } else {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

    }

    public function searchAssignment(Request $request){
        $search = $request -> input('search');
        $student=auth()->user();
        $assignments1=$student->studentAssignments->sortByDesc('created_at')->filter(function($ass)use ($search){
            return stripos($ass->titre,$search) !==false ||
                    stripos($ass->module->nom , $search) !== false ||
                    stripos($ass->teacher->name , $search) !== false;
        });
        $assignments=$assignments1->map(function($ass){
            $crr = Carbon :: parse($ass->created_at);
            $ass->createdAt=$crr->diffForHumans();
            return $ass;
        });
        return view('student.myAssignement', ['assignments' => $assignments, 'role' => 'Student']);
    }

    public function showDetails(Assignment $assignment){
        $Assignment=Assignment::findOrFail($assignment->id);
        $Assignment->createdAt=(Carbon::parse($Assignment->created_at))->diffForHumans();
        if(trim($assignment->fichier) !== '' || $Assignment->fihier !== null ){
            $file = new File('storage/'.$Assignment->fichier);
            $fileSizeInBytes = $file->getSize();
            $fileSizeInKB = round($fileSizeInBytes / 1024, 2);
            return view('student/detailA',compact('Assignment','fileSizeInKB'));
        }
        
        return view('student/detailA',compact('Assignment'));
    }

    public function showdoc(Assignment $assignment){
        if(trim($assignment->fichier) !== '' || $assignment->fihier !== null ){
        $path = 'storage/'.$assignment->fichier;
        return response()->download($path);
        }else{
            return back();
        }
    }

    public function Assignmentteacher()
    {
        $user = Auth::user();

        if ($user->role === 'Teacher') {
            $teacherAssignments = $user->teacherAssignments;
            return view('teacher.myAssignement', ['assignments' => $teacherAssignments, 'role' => 'Teacher']);
        } else {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }
    }

}
