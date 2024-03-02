<?php

namespace App\Http\Controllers;

use App\Http\Requests\publicationRequest;
use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Carbon;


class publicationController extends Controller
{
    public function create(){
        return view('admin.addpublication');
    }
    public function store(publicationRequest $request){
        $req=$request->validated();
        //$req["datepub"]=Carbon::now();
        $req["role"]=$request["role"];
        $img=$request->file('imagepub');
        if($img!==null){
            $req["imagepub"]=$img->store('publicaion','public');
        }
        Publication::create($req);
        return to_route('home');
    }
    public function destroy(Publication $publication){
        $publication->delete();
        return to_route('home');
}
}
