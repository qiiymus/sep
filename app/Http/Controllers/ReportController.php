<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Hash;

class ReportController extends Controller
{
    function KAReport(){
        return view('Manage Report.KAReportList');
    }

    function KACreateAR(){
        return view('Manage Report.KACreateActReport');
    }

    function KAEditAR(){
        return view('Manage Report.KAEditActReport');
    }

    function KAViewAR(){
        return view('Manage Report.KAViewActReport');
    }

    function KACreatePR(){
        return view('Manage Report.KACreatePerfReport');
    }

    function KAEditPR(){
        return view('Manage Report.KAEditPerfReport');
    }

    function KAViewPR(){
        return view('Manage Report.KAViewPerfReport');
    }

    function MAReport(){
        return view('Manage Report.MAReportList');
    }

    function MAViewAR(){
        return view('Manage Report.MAViewActReport');
    }

    function MAViewPR(){
        return view('Manage Report.MAViewPerfReport');
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

    function ARPost(Request $request){
        $request->validate([
            'act_name'=>'required',
            'act_type'=>'required',
            'act_date'=>'required',
            'act_startTime'=>'required',
            'act_endTime'=>'required',
            'act_teacher'=>'required',
            'act_place'=>'required',
            'act_details'=>'required',

        ]);

        $data['act_name']=$request->name;
        $data['act_type']=$request->email;
        $data['act_date']= $request->password;
        $data['act_startTime']=$request->name;
        $data['act_endTime']=$request->email;
        $data['act_teacher']= $request->password;
        $data['act_place']=$request->name;
        $data['act_details']=$request->email;
        $user=ReportModel::create($data);

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
