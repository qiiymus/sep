<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Hash;

class UserController extends Controller
{
    function login(){
        return view('Manage User Profile.LoginPage');
    }

    function registration(){
        return view('Manage User Profile.ParentRegister');
    }

    function KAHome(){
        return view('KAHome');
    }


    /*function loginPost(Request $request){
        $request->validate([
            'user_id'=>'required',
            'password'=>'required',
            'user_type'=>'required',
        ]);

        $credentials=$request->only('user_id','password','user_type');
        if(Auth::attempt($credentials)){
            if(Auth::user_type(1))
            {
                return redirect()->intended(route('KAHome'))->with("success","Login successful");
            }
        }
        return redirect(route('LoginPage'))->with("error","Login details are invalid");
    }*/

    function loginPost(Request $request){
        $request->validate([
            'id'=>'required',
            'password'=>'required',
            'role'=>'required|in:parent,teacher,KAFA admin,MUIP admin', // Validate role
        ]);

        $credentials = $request->only('id', 'password');
        $role = $request->role;

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            // Check user role and redirect accordingly
            if($role === 'parent' && $user->UserType === 'parent') {
                return redirect()->intended(route('Manage KAFA Timetable.ParentsViewTimetable'))->with("success", "Login successful");
            } elseif($role === 'teacher' && $user->UserType === 'teacher') {
                return redirect()->intended(route('Manage KAFA Timetable.TeacherViewTimetable'))->with("success", "Login successful");
            } elseif($role === 'KAFA admin' && $user->UserType === 'KAFA admin') {
                return redirect()->intended(route('Manage KAFA Timetable.AdminManageTimetable'))->with("success", "Login successful");
            } /*elseif($role === 'MUIP admin' && $user->UserType === 'MUIP admin') {
                return redirect()->intended(route('muipadmin.dashboard'))->with("success", "Login successful");*/
            } else {
                return redirect(route('login'))->with("error", "Invalid role selected or unauthorized access.");
            }
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
            'p_name' =>'required',
            'mykad' =>'required',
            'phonenum' =>'required',
            'email' =>'required',
            'relationship' =>'required'
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

    /*public function store(Request $request)
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

        return redirect(route('login'))->with("error", "Invalid credentials.");
    }*/
    /**
     * Display the specified resource.
     */
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = "Update User";
        $edit = UserModel::findOrFail($id);
        return view('admin.add_edit_user', compact('edit', 'title'));
    }
 
    /**
     * Update the specified resource in storage.*/
     
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
     * Remove the specified resource from storage.*/
     
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


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));

    }
}
