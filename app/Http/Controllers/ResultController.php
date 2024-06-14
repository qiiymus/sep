<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\ResultModel;
use Illuminate\View\View;
use App\Models\UserModel;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        //
        public function chooseClass(): View
    {
        $classes = UserModel::select('class')->distinct()->get()->pluck('class');
        return view('ManageStudentResults.KAChooseClassPage', compact('classes'));
    }

    public function listStudents(Request $request): View
    {
        $class = $request->get('class');
        return view('ManageStudentResults.KAStudentList', compact('class'));
    }
    

    

    public function index(): View
    {
        // Retrieve all results
        $results = ResultModel::all();
        return view('ManageStudentResults.KAResultPage', compact('results'));
    }

    public function show($id): View
    {
        $student = UserModel::findOrFail($id);
        $results = ResultModel::where('id', $id)->get(); 
        return view('ManageStudentResults.KAResultPage', compact('student', 'results'));
        
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return view('ManageStudentResults.KAAddResult');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
{
    // Validate the incoming request data
    $request->validate([
        'subject' => 'required|string',
        'marks' => 'required|numeric',
        'grade' => 'required|string',
    ]);

    // Create a new ResultModel instance and save it
    ResultModel::create($request->all());

    // Redirect back to the KAResultPage with a flash message
    return redirect()->route('kareresults.index')->with('flash_message', 'Result added successfully!');
}


    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    try {
        $result = ResultModel::findOrFail($id);
        return view('ManageStudentResults.KAEditResult', compact('result'));
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404); // or handle it differently based on your application's needs
    }
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
{
    // Validate the incoming request data
    $request->validate([
        'subject' => 'required|string',
        'marks' => 'required|numeric',
        'grade' => 'required|string',
    ]);

    // Find the result and update it
    $result = ResultModel::findOrFail($id);
    $result->update($request->all());

    // Redirect back to the KAResultPage with a flash message
    return redirect()->route('kareresults.index')->with('flash_message', 'Result updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // Find the result and delete it
        $result = ResultModel::findOrFail($id);
        $result->delete();
        
        // Redirect back to the KAResultPage with a flash message
        return redirect()->route('kareresults.index')->with('flash_message', 'Result deleted successfully!');
    }
}
