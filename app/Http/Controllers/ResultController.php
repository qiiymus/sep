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
            // Static list of classes
            $classes = ['2 fatanah', '2 amanah'];
            return view('ManageStudentResults.KAChooseClassPage', compact('classes'));
        }
    
        // Show the list of students for the selected class
        public function listStudents(Request $request): View
        {
            $class = $request->get('class');
            $students = $this->getStudentsByClass($class);
            return view('ManageStudentResults.KAStudentList', compact('class', 'students'));
        }
    
        // Static method to simulate student data retrieval
        private function getStudentsByClass(string $class)
        {
            $students = [
                '2 fatanah' => [
                    ['id' => 1, 'name' => 'Upin bin Ipin'],
                    ['id' => 2, 'name' => 'Siti binti Ali'],
                    ['id' => 3, 'name' => 'Farhanah binti Mohd'],
                    ['id' => 4, 'name' => 'Ehsan bin Mail'],
                ],
                '2 amanah' => [
                    ['id' => 5, 'name' => 'Ali bin Abu'],
                    ['id' => 6, 'name' => 'Aminah binti Karim'],
                ],
            ];
    
            return $students[$class] ?? [];
        }
    
        public function index(): View
        {
            $results = ResultModel::all();
            return view('ManageStudentResults.KAResultPage', compact('results'));
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
