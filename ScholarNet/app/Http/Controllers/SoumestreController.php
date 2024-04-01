<?php

namespace App\Http\Controllers;

use App\Models\Soumestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoumestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showStudentNotesS()
    {
        $student = auth()->user();
        $studentModules = $student->modules;

        $soumestreGrades = [];

        foreach ($studentModules as $module) {
            $soumestreId = $module->id_soumestre;

            $moduleGrade = DB::table('student__modules')
                ->where('id_student', $student->id)
                ->where('id_module', $module->id)
                ->value('Note');

            if (!isset($soumestreGrades[$soumestreId])) {
                $soumestreGrades[$soumestreId] = [
                    'totalGrade' => $moduleGrade,
                    'moduleCount' => 1,
                ];
            } else {

                $soumestreGrades[$soumestreId]['totalGrade'] += $moduleGrade;
                $soumestreGrades[$soumestreId]['moduleCount']++;
            }
        }


        foreach ($soumestreGrades as $soumestreId => $gradeInfo) {
            $averageGrade = $gradeInfo['totalGrade'] / $gradeInfo['moduleCount'];

            $soumestreGrades[$soumestreId]['averageGrade'] = $averageGrade;
        }

        return view('student.student_notesoumesstre', compact('student', 'soumestreGrades'));
    }





    public function show(Soumestre $soumestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Soumestre $soumestre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Soumestre $soumestre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soumestre $soumestre)
    {
        //
    }
}
