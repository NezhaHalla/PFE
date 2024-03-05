<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Publication;
use App\Http\Requests\UserRequest;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Requestpassword;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showadduser(){
        return view('admin/adduser');
       }
       public function adduser(UserRequest $req){
          $val=$req->validated();
          $val['image'] = $req->file('image')->store('blog', 'public');
          $val['password']=Hash::make($val['password']);
          User::create($val);
        return redirect('/login');
       }

       public function showlogin(){
        return view('auth/login');
       }

    public function login(loginRequest $req){
        $val=$req->validated();

         if(Auth::attempt($val)){
            $req->session()->regenerate();

            return to_route('home');
         }else
             return redirect()->back()->withErrors([
                'danger'=>'cheeck ur email or password',
             ]);

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('home');
    }
    public function showprofile(){
        return view('common/profile');
    }
    
    public function showpass(){
        return view('common/modifypassword');
    }

    public function storepass(Requestpassword $request,User $user){
        if(Hash::check($request->Current_password,$user->password)){
            $user->password=Hash::make($request->New_password);
            $user->save();
            return to_route('profile')->with('success','Your password modified succefully');
        }else{
            return redirect()->back()->with('danger','Verify your current password');
        }
    }
}
