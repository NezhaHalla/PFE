<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Classe;
use App\Models\Module;
use App\Mail\ProfileMail;
use App\Models\Soumestre;
use Illuminate\Http\Request;
use App\Mail\CodeConfirmation;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\loginRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Requestpassword;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function showadduser(){
        $classes = Classe::all();
        $Soumestres = Soumestre::all();
        return view('admin/adduser',compact('classes','Soumestres'));
       }
       public function adduser(UserRequest $req){
        $val = $req->validated();
        $val['image'] = $req->file('image')->store('blog', 'public');
        $val['password'] = Hash::make($val['password']);
        $val['class_id'] = $req->input('class_id');

        $user = User::create($val);
        if ($val['role'] == 'Student') {
            $semesterId = $req->input('semester_id');

            DB::table('student_soumestres')->insert([
                'id_soumestre' => $semesterId,
                'id_student' => $user->id,
                'note' => 0.0,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            $semesterModules = Module::where('id_soumestre', $semesterId)->pluck('id')->toArray();
            $studentModules = [];
            foreach ($semesterModules as $moduleId) {
                $studentModules[] = [
                    'id_student' => $user->id,
                    'id_module' => $moduleId,
                    'Note' => 0.0,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            DB::table('student__modules')->insert($studentModules);
        }
        session()->flash('success', 'User added successfully.');
        return redirect()->back();
    }

       public function showlogin(){
        return view('auth/login');
       }

       public function login(loginRequest $req){
        $val=$req->validated();
        if(Auth::attempt($val, $req->remember)){
            $req->session()->regenerate();
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors([
                'danger'=>'Check your email or password',
            ]);
        }
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
            return redirect()->back()->with('danger', 'User not found');
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


public function update(UpdateRequest $request, $id) {
    $val = $request->validated();

    $user = User::find($id);
    if (!$user) {
        return redirect()->back()->with('danger', 'User not found');
    }
    $user->name = $val['name'];
    $user->email = $val['email'];
    $user->gender = $val['gender'];
    $user->class_id = $val['class_id'];

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('blog', 'public');
        $user->image = $imagePath;
    }
    $user->save();
    return redirect()->back()->with('success', 'User updated successfully');
}



    public function showprofile(){
        if(auth()->user()->role === 'Student'){
        $class=Classe::findOrFail(auth()->user()->class_id);
        return view('common/profile',compact('class'));
        }else{
            return view('common/profile');
        }
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
    public function showmyclass($studentId) {
        $student = User::findOrFail($studentId);

        $class = Classe::findOrFail($student->class_id);

        $students = User::where('class_id', $student->class_id)
                        ->where('id', '!=', $student->id)
                        ->get();

        return view('student.Myclass', compact('student', 'students', 'class'));
    }

    public function show(User $user){
        if($user->role === 'Student'){
            $class=Classe::findOrFail($user->class_id);
            return view('common/userProfile',compact('class','user'));
            }else{
                return view('common/userProfile',compact('user'));
            }
    }

    public function showTeacherClasses($teacherId) {
        $teacher = User::findOrFail($teacherId);

        $modules = Module::where('id_teacher', $teacherId)->get();

        $classes = [];
        $students = [];

        foreach ($modules as $module) {
            $moduleStudents = $module->students()->get();

            foreach ($moduleStudents as $student) {
                $classId = $student->class_id;

                $class = Classe::find($classId);

                if ($class) {
                    if (!isset($students[$classId])) {
                        $students[$classId] = [];
                    }
                    $students[$classId][] = $student;

                    if (!in_array($class, $classes)) {
                        $classes[] = $class;
                    }
                }
            }
        }

        return view('teacher.Myclasses', compact('teacher', 'classes', 'students'));
    }

    public function showEmailPage(){
        return view('forgetPassword/emailPage');
    }
    public function showEmailPageVerify(Request $request){
        $req=$request->validate([
            'email'=>'required|email',
        ]);
        $email=$req['email'];
        $exist=User::where('email',$email)->exists();
        if($exist){
            $user = User::where('email', $email)->first();
            $code =random_int(1000, 9999);
            $request->session()->put('id_user', $user->id);
            $request->session()->put('verification_code', $code);
            $name=$user->name;
            Mail::to($email)->send(new CodeConfirmation($code,$name));
            return to_route('verifyEmail');
        }else{
            return back()->with('danger','This E-mail address does not exist !');
        }
    }

    public function showVerifyEmail(){
        return view('forgetPassword/verifyCodePage');
    }
    public function verifyEmail(Request $request){
        $req=$request->validate([
            'code' => 'required|numeric',
        ]);
        $code=$req['code'];
        $generatedCode = $request->session()->get('verification_code');
        $id=$request->session()->get('id_user');
        $request->session()->put('id', $id);
        if($code == $generatedCode){
            return to_route('newPassword');
        }else{
            return back()->with('danger','The code Confirmation is not Correct !');
        }
    }
    public function showNewPassword(){
        return view('forgetPassword/newPasswordPage');
    }

    public function newPassword(Request $request){
        $req=$request->validate([
            'password'=>'required|min:4|max:20|confirmed'
        ]);
        $password=$req["password"];
        $userid = $request->session()->get('id');
        $user=User::findOrFail($userid);
        $user->password=Hash::make($password);
        $user->save();
        /*
        $request->session()->forget('verification_code');
        $request->session()->forget('id_user');
        $request->session()->forget('verification_code'); */
        return to_route('login')->with("success","Password changed succefully !");
    }
}
