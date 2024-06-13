<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Hash;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'))->with("success","Login successful");
        }
        return redirect(route('login'))->with("error","Login details are invalid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'std_name'=>'required',
            'mykid'=>'required',
            'birthcert'=>'required',
            'std_bdate'=>'required',
            'std_age'=>'required',
            'std_address'=>'required',
            'std_class'=>'required',
        ]);

        $data['Name']=$request->std_name;
        $data['Mykid_Num']=$request->mykid;
        $data['BirthCert_Num']= $request->birthcert;
        $data['Birthdate']=$request->std_bdate;
        $data['Age']=$request->std_age;
        $data['Address']= $request->std_address;
        $data['class']=$request->std_class;
        $user=UserModel::create($data);

        if (!$user){
            return redirect(route('register'))->with("error","Registration failed.");
        }
        return redirect(route('login'))->with("success","Registration successful.");
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );
 
        $filePath = public_path('uploads');
        $insert = new User();
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = bcrypt('password');
 
 
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
 
            $file->move($filePath, $file_name);
            $insert->photo = $file_name;
        }
 
        $result = $insert->save();
        Session::flash('success', 'User registered successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = "Update User";
        $edit = User::findOrFail($id);
        return view('admin.add_edit_user', compact('edit', 'title'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );
        $update = User::findOrFail($id);
        $update->name = $request->name;
        $update->email = $request->email;
 
        if ($request->hasfile('photo')) {
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            // delete old photo
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $update->photo = $file_name;
        }
 
        $result = $update->save();
        Session::flash('success', 'User updated successfully');
        return redirect()->route('user.index');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $userData = User::findOrFail($request->user_id);
        $userData->delete();
        // delete photo if exists
        if (!is_null($userData->photo)) {
            $photo = public_path('uploads/' . $userData->photo);
            if (File::exists($photo)) {
                unlink($photo);
            }
        }
        Session::flash('success', 'User deleted successfully');
        return redirect()->route('user.index');
    }

    public function ChooseClass()
        {
            // Fetch unique class names from the database
            $classes = UserModel::select('class')->distinct()->get()->pluck('class');
            
            // Pass the classes to the view
            return view('ManageStudentResults.KAChooseClassPage', compact('classes'));
        }
    
        public function index(Request $request)
        {
            $class = $request->input('class');
    
            // Fetch students from the selected class
            $students = UserModel::where('class', $class)->get();
    
            // Pass the students and the class name to the view
            return view('ManageStudentResults.KAStudentList', compact('students', 'class'));
        }
    
        public function show($id)
        {
            // Fetch student details
            $student = UserModel::findOrFail($id);
    
            return view('ManageStudentResults.KAResultPage', compact('student'));
        }


function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));

}
}
