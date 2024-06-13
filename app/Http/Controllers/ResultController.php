<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\ResultModel;
use Illuminate\View\View;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        //
        public function ChooseClass()
        {
            // Fetch unique class names from the database
            $classes = ResultModel::select('class')->distinct()->get()->pluck('class');
            
            // Pass the classes to the view
            return view('ManageStudentResults.KAChooseClassPage', compact('classes'));
        }
    
        public function index(Request $request)
        {
            $class = $request->input('class');
    
            // Fetch students from the selected class
            $students = ResultModel::where('class', $class)->get();
    
            // Pass the students and the class name to the view
            return view('ManageStudentResults.KAStudentList', compact('students', 'class'));
        }
    
        public function show($id)
        {
            // Fetch student details
            $student = ResultModel::findOrFail($id);
    
            return view('ManageStudentResults.KAResultPage', compact('student'));
        }
        
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
