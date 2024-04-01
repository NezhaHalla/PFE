<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Assignment;
use Illuminate\Http\Request;
use App\Models\student__modules;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->store();
        $modules1 = student__modules::where('id_student', auth()->user()->id)->get();
        $modules=$modules1->map(function($module){
            $note=$module->Note;
            $id=$module->id_module;
            $moduleName=Module::where('id',$id)->first();
            if($note >= 6 && $note < 12){
                $module->mention="Retake";
            }elseif($note >= 12){
                $module->mention="Validated";
            }else{
                $module->mention="Not Validated";
            }
            $module->name=$moduleName->nom;
            $module->idmodule=$moduleName->id;
            return $module;
        });
        return view('student/moduleCard',compact('modules'));
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
    public function store()
    {
        $modules1 = auth()->user()->modules;
        $modules=$modules1->map(function($mod){
            $assignments=$mod->assignments;
            $assignmentStudent=$assignments->map(function($ass){
                $ass1=DB::table('assignment_student')
                    ->where('assignment_id', $ass->id)
                    ->where('student_id',auth()->user()->id)->first();
                    return $ass1;
            });
            $som=0;
            $i=0;
            foreach($assignmentStudent as $ass){
                $i++;
                if($ass->Note == null){
                    $som=$som+0;
                    continue;
                }
                $som=$som+$ass->Note;
            }
            if($i>0){
                $note=$som/$i;
            }else{
                $note=$som;
            }
            $module=student__modules::where('id_module', $mod->id)
            ->where('id_student', auth()->user()->id)->first();
            $module->Note=$note;
            $module->save();
            return $mod;
        });
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $assignments1=Assignment::where('module_id',$module->id)->get();
        $assignmentStudent=$assignments1->map(function($ass){
            $ass1=DB::table('assignment_student')
                ->where('assignment_id', $ass->id)
                ->where('student_id',auth()->user()->id)->first();
                $note=$ass1->Note;
                if($note > 6 && $note < 12){
                    $ass1->mention="Not Good";
                }elseif($note >= 12){
                    $ass1->mention="Good";
                }elseif($note == null){
                    $ass1->mention="No submition";
                }else{
                    $ass1->mention="Bad";
                }
                $ass1->name=$ass->titre;
                return $ass1;
        });
        return view('student/detailModule',compact('assignmentStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        //
    }
}
