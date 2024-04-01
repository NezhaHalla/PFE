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
use Illuminate\Http\File;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $student = auth()->user();
    $courses = $student->modules->flatMap->resource->sortByDesc('created_at');
    
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
        $teacherId = Auth::id();
        $modules = Module::where('id_teacher', $teacherId)->get();
        return view('teacher.add_resource', compact('modules', 'teacherId'));
    }

   public function store(ResourceRequest $req)
   {
        $val=$req->validated();
        $val['id_module'] = $req->input('id_module');
        $val['id_teacher'] = auth()->id();
        $val['fichier'] = $req->file('fichier')->store('course','public');
       Resource::create($val);
        return redirect()->back()->with('success', 'Resource added successfully.');
  }

  public function downloads(Resource $resource){
    return response()->download('storage/'.$resource->fichier);
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
        $courses1=auth()->user()->resource->sortByDesc('created_at');
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


        $file = new File('storage/'.$resource->fichier);
        $fileSizeInBytes = $file->getSize();
        $fileSizeInKB = round($fileSizeInBytes / 1024, 2);
        $course=Resource::findOrFail($resource->id);
        $course->is_readr = true;
        $course->save();
        $course->createdAt=(Carbon::parse($course->created_at))->diffForHumans();

       
        return view('common/afficherDetailsCoure',compact('course','fileSizeInKB'));
    }

    public function showdoc(Resource $resource){
        $path = 'storage/'.$resource->fichier;
        return response()->download($path);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->back()->with('success', 'Course deleted successfully');
    }

public function searchCourses(Request $request)
{
    $search = $request->input('search');

    $student = auth()->user();

    $courses = $student->modules->flatMap->resource->sortByDesc('created_at')->filter(function ($course) use ($search) {
        return stripos($course->titre, $search) !== false ||
               stripos($course->module->nom, $search) !== false ||
               stripos($course->teacher->name, $search) !== false;
    });

    $courses1 = $courses->map(function ($course) {
        $createdAt1 = Carbon::parse($course->created_at);
        $course->createdAt = $createdAt1->diffForHumans();
        return $course;
    });

    return view('student/allCourses', compact('courses1'));
}

public function searchCoursesT(Request $request)
{
    $search = $request->input('search');
    $user = auth()->user();

    $courses = $user->resource->filter(function ($course) use ($search) {
        return stripos($course->titre, $search) !== false ||
               stripos($course->module->nom, $search) !== false ||
               stripos($course->teacher->name, $search) !== false;
    })->sortByDesc('created_at');

    $courses1 = $courses->map(function ($course) {
        $createdAt1 = Carbon::parse($course->created_at);
        $course->createdAt = $createdAt1->diffForHumans();
        return $course;
    });
    $courses=$courses1;

    return view('teacher/myCourses',compact('courses'));
}

}
