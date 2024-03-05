<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClasseRequest;
use App\Models\Classe;
class ClassController extends Controller
{
    public function create() {
        return view('admin.addclass');
    }

    public function store(ClasseRequest $req){
    $val = $req->validated();
    Classe::create($val);
    session()->flash('success', 'Class added successfully.');
    return redirect()->back();
}
public function showAllClasses() {
    $classes = Classe::all();
    return view('admin.all_classes', compact('classes'));
}
}
