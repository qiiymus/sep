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
            'std_address'=>'required'
        ]);

        $data['Name']=$request->std_name;
        $data['Mykid_Num']=$request->mykid;
        $data['BirthCert_Num']= $request->birthcert;
        $data['Birthdate']=$request->std_bdate;
        $data['Age']=$request->std_age;
        $data['Address']= $request->std_address;
        $user=UserModel::create($data);

        if (!$user){
            return redirect(route('register'))->with("error","Registration failed.");
        }
        return redirect(route('login'))->with("success","Registration successful.");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));

    }
}
