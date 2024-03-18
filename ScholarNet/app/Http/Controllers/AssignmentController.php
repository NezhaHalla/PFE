<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Assignment;
class AssignmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'Student') {
            $studentAssignments = $user->studentAssignments()->get();
            return view('student.myAssignement', ['assignments' => $studentAssignments, 'role' => 'Student']);
        } elseif ($user->role === 'Teacher') {
            $teacherAssignments = $user->teacherAssignments()->get();
            return view('teacher.myAssignement', ['assignments' => $teacherAssignments, 'role' => 'Teacher']);
        } else {
            // Handle other roles or unauthorized access
            return redirect()->back()->with('error', 'Unauthorized access.');
        }
    }
}
