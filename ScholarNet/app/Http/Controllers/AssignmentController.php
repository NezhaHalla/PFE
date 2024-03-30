<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
use Carbon\Carbon;
use App\Http\Requests\AssignementRequest;
use App\Models\Module;
use Illuminate\Support\Facades\DB;
class AssignmentController extends Controller
{
    public function Assignmentstudent()
    {
        $user = Auth::user();
        if ($user->role === 'Student') {
            $studentAssignments1 = $user->studentAssignments->sortByDesc('created_at');
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
    public function searchAssignmentT(Request $request)
    {
        $user = Auth::user();
        if ($user->role !== 'Teacher') {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }

        $search = $request->input('search');
        $teacherId = $user->id;


        $assignments = Assignment::where('teacher_id', $teacherId)
            ->where(function ($query) use ($search) {
                $query->where('titre', 'like', '%' . $search . '%')
                    ->orWhereHas('module', function ($query) use ($search) {
                        $query->where('nom', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('teacher', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    });
            })
            ->orderByDesc('created_at')
            ->get();


        return view('teacher.myAssignement', ['assignments' => $assignments, 'role' => 'Teacher']);
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
            $teacherAssignments = $user->teacherAssignments->sortByDesc('created_at');
            return view('teacher.myAssignement', ['assignments' => $teacherAssignments, 'role' => 'Teacher']);
        } else {
            return redirect()->back()->with('error', 'Unauthorized access.');
        }
    }

    public function createt()
    {
        $teacherId = Auth::id();
        $modules = Module::where('id_teacher', $teacherId)->get();
        return view('teacher.createassignment', compact('modules', 'teacherId'));
    }
    public function storet(AssignementRequest $req)
    {
        $val = $req->validated();
        $val['module_id'] = $req->input('module_id');
        $val['teacher_id'] = auth()->id();
        $val['fichier'] = $req->file('fichier') ? $req->file('fichier')->store('assignment', 'public') : null;
        $assignment= Assignment::create($val);


        $module = Module::find( $val['module_id']);
        $students = $module->students;

        foreach ($students as $student) {
            DB::table('assignment_student')->insert([
                'assignment_id' => $assignment->id,
                'student_id' => $student->id,
                'Note' => null,
                'submission_status' => null,
                'submission_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Assignment added successfully.');
    }


public function show($id)
{
    $assignment = Assignment::findOrFail($id);
    $assignment->createdAt = $assignment->created_at->diffForHumans();
    if (trim($assignment->fichier) !== '' || $assignment->fichier !== null) {
        $file = new File('storage/' . $assignment->fichier);
        $fileSizeInBytes = $file->getSize();
        $fileSizeInKB = round($fileSizeInBytes / 1024, 2);
        return view('teacher.assignment_details', compact('assignment', 'fileSizeInKB'));
    }

    return view('teacher.assignment_details', compact('assignment'));
}
public function destroy(Assignment $assignment)
    {
        // Votre logique de suppression de l'assignation ici
        $assignment->delete();

        return redirect()->back()->with('success', 'Assignation supprimée avec succès.');
    }
}
