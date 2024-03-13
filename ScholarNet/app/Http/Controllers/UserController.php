<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Classe;
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
        $classes = Classe::all();
        return view('admin/adduser',compact('classes'));
       }
       public function adduser(UserRequest $req){
          $val=$req->validated();
          $val['image'] = $req->file('image')->store('blog', 'public');
          $val['password']=Hash::make($val['password']);
          $val['class_id'] = $req->input('class_id');
          User::create($val);
          session()->flash('success', 'User added successfully.');
          return redirect()->back();
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

    public function showAllStudents($class_id) {
        $class = Classe::findOrFail($class_id);
        $students = User::where('role', 'student')
                        ->where('class_id', $class_id)
                        ->get();

        return view('admin.all_students', compact('students'));
    }

    public function showAllTeachers() {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.all_teachers', compact('teachers'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function edit($id)
{
    $user = User::find($id);
    //dd($user);
    if (!$user) {
        return redirect()->back()->with('error', 'User not found');
    }

    $classes = Classe::all();

    return view('admin.edit_user', compact('user', 'classes'));
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
