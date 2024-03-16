<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Resource;
use App\Models\User;
use App\Models\Soumestre;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $student=auth()->user();

        return view('student/allCourses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function showAddResourceForm()
    {
      $modules = Module::all();
         $teachers = User::where('role', 'Teacher')->get();
       return view('add_resource', compact('modules', 'teachers'));
    }

   public function store(ResourceRequest $request)
   {
       

   return redirect()->back()->with('success', 'Resource added successfully.');
  }

    // // /**
    // //  * Store a newly created resource in storage.
    // //  */
    // // public function store(Request $request)
    // // {
    // //     //
    // // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Resource $resource)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Resource $resource)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        //
    }
}
