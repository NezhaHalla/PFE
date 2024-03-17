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

        // Check if the user's role is 'Student'
        if ($user->role === 'Student') {
            // Get the modules associated with the student
            $modules = $user->modules()->get();

            // Initialize an empty array to store assignments
            $assignments = [];

            // Loop through each module and fetch its assignments
            foreach ($modules as $module) {
                $moduleAssignments = Assignment::where('module_id', $module->id)->get();
                $assignments = array_merge($assignments, $moduleAssignments->toArray());
            }

            // Output the fetched data for testing
            dd($assignments);
        } else {
            // Handle the case where the authenticated user is not a student
            dd('User is not a student.');
        }
    }

}
