<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Publication;

class homeController extends Controller
{
    public function index(){
        $announcement=Publication::where('role', 'announcement')->get();
        $publication=Publication::latest()->where('role','publication')->get();

        return view('homepage.home',compact('announcement','publication'));
    }
   
}
