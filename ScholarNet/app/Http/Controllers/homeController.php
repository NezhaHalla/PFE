<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\publications;

class homeController extends Controller
{
    public function index(){
        $announcement=publications::where('role', 'announcement')->get();
        $publication=publications::where('role','publication')->get();
        return view('homepage.home',compact('announcement','publication'));
    }
}
