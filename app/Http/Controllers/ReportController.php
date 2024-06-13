<?php

namespace App\Http\Controllers;

use App\Models\ReportModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Hash;
use App\Models\ReportModel;

class ReportController extends Controller
{
    function KAReport(){
        $report = ReportModel::all();
        return view('Manage Report.KAReportList', ['report' => $report]);
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

    function KACreatePR(Request $request){
        $paper = ReportModel::all();
        return view('Manage Report.KACreatePerfReport' , ['paper' => $paper]);
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

    public function KACreatePRPost(Request $request)
    {
        $validated = $request->validate([
            'session' => 'required|max:255',
            'exam' => 'required',
            'total_A_1' => 'required',
            'total_B_1' => 'required',
            'total_C_1' => 'required',
            'total_D_1' => 'required',
            'total_E_1' => 'required',
            'total_F_1' => 'required',
            'total_A_2' => 'required',
            'total_B_2' => 'required',
            'total_C_2' => 'required',
            'total_D_2' => 'required',
            'total_E_2' => 'required',
            'total_F_2' => 'required',
            'total_A_3' => 'required',
            'total_B_3' => 'required',
            'total_C_3' => 'required',
            'total_D_3' => 'required',
            'total_E_3' => 'required',
            'total_F_3' => 'required',
            'total_A_4' => 'required',
            'total_B_4' => 'required',
            'total_C_4' => 'required',
            'total_D_4' => 'required',
            'total_E_4' => 'required',
            'total_F_4' => 'required',
            'total_A_5' => 'required',
            'total_B_5' => 'required',
            'total_C_5' => 'required',
            'total_D_5' => 'required',
            'total_E_5' => 'required',
            'total_F_5' => 'required',
            'total_A_6' => 'required',
            'total_B_6' => 'required',
            'total_C_6' => 'required',
            'total_D_6' => 'required',
            'total_E_6' => 'required',
            'total_F_6' => 'required',
            'summary' => 'required',
        ]);

        $data = new ReportModel;
        $data->session = $validated['session'];
        $data->exam = $validated['exam'];
        $data->total_A_1 = $validated['total_A_1'];
        $data->total_B_1 = $validated['total_B_1'];
        $data->total_C_1 = $validated['total_C_1'];
        $data->total_D_1 = $validated['total_D_1'];
        $data->total_E_1 = $validated['total_E_1'];
        $data->total_F_1 = $validated['total_F_1'];
        $data->total_A_2 = $validated['total_A_2'];
        $data->total_B_2 = $validated['total_B_2'];
        $data->total_C_2 = $validated['total_C_2'];
        $data->total_D_2 = $validated['total_D_2'];
        $data->total_E_2 = $validated['total_E_2'];
        $data->total_F_2 = $validated['total_F_2'];
        $data->total_A_3 = $validated['total_A_3'];
        $data->total_B_3 = $validated['total_B_3'];
        $data->total_C_3 = $validated['total_C_3'];
        $data->total_D_3 = $validated['total_D_3'];
        $data->total_E_3 = $validated['total_E_3'];
        $data->total_F_3 = $validated['total_F_3'];
        $data->total_A_4 = $validated['total_A_4'];
        $data->total_B_4 = $validated['total_B_4'];
        $data->total_C_4 = $validated['total_C_4'];
        $data->total_D_4 = $validated['total_D_4'];
        $data->total_E_4 = $validated['total_E_4'];
        $data->total_F_4 = $validated['total_F_4'];
        $data->total_A_5 = $validated['total_A_5'];
        $data->total_B_5 = $validated['total_B_5'];
        $data->total_C_5 = $validated['total_C_5'];
        $data->total_D_5 = $validated['total_D_5'];
        $data->total_E_5 = $validated['total_E_5'];
        $data->total_F_5 = $validated['total_F_5'];
        $data->total_A_6 = $validated['total_A_6'];
        $data->total_B_6 = $validated['total_B_6'];
        $data->total_C_6 = $validated['total_C_6'];
        $data->total_D_6 = $validated['total_D_6'];
        $data->total_E_6 = $validated['total_E_6'];
        $data->total_F_6 = $validated['total_F_6'];
        $data->summary = $validated['summary'];
        $data->save();

        return redirect(route('KAReport'))->with("success","Report created successfully.");
    }

    function KACreateARPost(Request $request){
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

        $data['Name']=$request->act_name;
        $data['Type']=$request->act_type;
        $data['Activity_Date']= $request->act_date;
        $data['StartTime']=$request->act_startTime;
        $data['EndTime']=$request->act_endTime;
        $data['Teacher_ID']= $request->act_teacher;
        $data['Location']=$request->act_place;
        $data['Description']=$request->act_details;
        $user=ReportModel::create($data);

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
    public function show(string $id)
    {
        //
    }
 
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


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));

    }
}
