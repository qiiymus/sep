<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('Manage User Profile.ParentRegister');
    }

    // Process registration
    public function register(Request $request)
    {
        // Validate registration data
        $request->validate([
            // Student fields
            'std_name' => 'required',
            'mykid' => 'required',
            'birthcert' => 'required',
            'std_bdate' => 'required',
            'std_age' => 'required',
            'std_address' => 'required',
            'std_class' => 'required',

            // Parent fields
            'p_name' => 'required',
            'mykad' => 'required',
            'phonenum' => 'required',
            'email' => 'required|email',
            'relationship' => 'required',
            'p_bdate' => 'required',
            'p_age' => 'required',
            'occupation' => 'required',
            'p_address' => 'required',
        ]);

        // Create student data
        $studentData = [
            'Name' => $request->std_name,
            'Mykid_Num' => $request->mykid,
            'BirthCert_Num' => $request->birthcert,
            'Birthdate' => $request->std_bdate,
            'Age' => $request->std_age,
            'Address' => $request->std_address,
            'class' => $request->std_class,
        ];

        // Create parent data
        $parentData = [
            'Name' => $request->p_name,
            'Mykid_Num' => $request->mykad,
            'Phone_Num' => $request->phonenum,
            'Email' => $request->email,
            'Relationship' => $request->relationship,
            'Birthdate' => $request->p_bdate,
            'Age' => $request->p_age,
            'Occupation' => $request->occupation,
            'Address' => $request->p_address,
        ];

        // Save student and parent data to database
        $student = UserModel::create($studentData);
        $parent = UserModel::create($parentData);

        if ($student && $parent) {
            return redirect(route('login'))->with('success', 'Registration successful. Please login.');
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
}
