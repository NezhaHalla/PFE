<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Module;
use App\Models\Resource;
use App\Models\User;
use App\Http\Requests\ResourceRequest;
use App\Models\Soumestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $student = auth()->user();
    // $coursesWithModules = $student->modules->flatMap(function ($module) {
    //     return $module->resource->map(function ($course) use ($module) {
    //         $course->module_name = $module->nom; // Assuming 'nom' is the attribute representing the module name
    //         $course->teacher_name = $course->teacher->name; // Assuming 'name' is the attribute representing the teacher's name
    //         return $course;
    //     });
    // });
    $courses = $student->modules->flatMap->resource;
    $courses1=$courses->map(function($course){
        $createdAt1=Carbon::parse($course->created_at);
        $course->createdAt=$createdAt1->diffForHumans();
        return $course;
    });
    return view('student/allCourses', compact('courses1'));
}




    /**
     * Show the form for creating a new resource.
     */
     public function showAddResourceForm()
    {
      $modules = Module::all();
      $teacherId = Auth::id();
       return view('teacher.add_resource', compact('modules', 'teacherId'));
    }

   public function store(ResourceRequest $req)
   {   $val=$req->validated();
       $val['id_module'] = $req->input('id_module');
       $val['id_teacher'] = auth()->id();
       Resource::create($val);
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

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $courses1=auth()->user()->resource;
        $courses=$courses1->map(function($course){
            $createdAt1=Carbon::parse($course->created_at);
            $course->createdAt=$createdAt1->diffForHumans();
            return $course;
        });
        return view('teacher/myCourses',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showDetails(Resource $resource)
    {
        $course=Resource::findOrFail($resource->id);
        $course->createdAt=(Carbon::parse($course->created_at))->diffForHumans();
        return view('common/afficherDetailsCoure',compact('course'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        //
    }
}
