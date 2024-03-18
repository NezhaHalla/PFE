<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
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

}
