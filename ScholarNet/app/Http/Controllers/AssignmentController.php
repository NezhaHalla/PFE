<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
use App\Http\Requests\AssignementRequest;
use App\Models\Module;
class AssignmentController extends Controller
{
    public function Assignmentstudent()
    {
        $user = Auth::user();
        if ($user->role === 'Student') {
            $studentAssignments = $user->studentAssignments;
            return view('student.myAssignement', ['assignments' => $studentAssignments, 'role' => 'Student']);
        } else {
            return redirect()->back()->with('error', 'Unauthorized access.');
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

    public function createt()
    {
        $teacherId = Auth::id();
        $modules = Module::where('id_teacher', $teacherId)->get();
        return view('teacher.createassignment', compact('modules', 'teacherId'));
    }

    public function storet(AssignementRequest $req)
    {
        $val=$req->validated();

        $val['module_id'] = $req->input('module_id');
        $val['teacher_id'] = auth()->id();
        $val['fichier'] = $req->file('fichier')->store('assignment','public');

        Assignment::create($val);

        return redirect()->back()->with('success', 'Assignment added successfully.');
    }

    public function show($id)
{
    $assignment = Assignment::findOrFail($id); // Assuming your model is named Assignment
    return view('teacher.assignment_details', compact('assignment'));
}

}
