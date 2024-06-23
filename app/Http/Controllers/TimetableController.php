<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TimetableModel;

class TimetableController extends Controller
{
    //method to show Parents' timetable page controller
    public function ParentViewTT() {
        return view('Manage KAFA Timetable.ParentsTimetablePage');
    }

    //method to show Teachers' timetable page controller
    public function TeacherViewTT() {
        return view('Manage KAFA Timetable.TeacherTimetablePage');
    }

    //method to show KAFA Admin's timetable page controller
    public function KAViewTT() {
        return view('Manage KAFA Timetable.AdminTimetablePage');
    }

    //method to show KAFA Admin's add new timetable page controller
    public function KAAddTT() {
        return view('Manage KAFA Timetable.AdminAddTimetable');
    }

    //method to show KAFA Admin's edit timetable page
    public function KAEditTT() {
        return view('Manage KAFA Timetable.AdminEditTimetable');
    }

    //method to display list of all existing class's timetable and KAFA Admin's manage timetable page
    public function KAManageTT() {
        $timetables = TimetableModel::all();
        return view('Manage KAFA Timetable.AdminManageTimetable', compact('timetables'));
    }

    //method to show the searched class
    public function index(Request $request)
    {
        $query = $request->input('search');
        $timetables = TimetableModel::when($query, function($queryBuilder) use ($query) {
            return $queryBuilder->where('kelas', 'like', '%' . $query . '%');
        })->get();

        return view('Manage KAFA Timetable.AdminManageTimetable', compact('timetables'));
    }

    //Create new timetable controller (KAFA Admin)
    public function create()
    {
        return view('Manage KAFA Timetable.AdminAddTimetable');
    }

    //store the new data inserted in the page into database
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required|string|max:255',
            'ustazah' => 'required|string|max:255',
            'subject1isnin' => 'nullable|string|max:255',
            'subject2isnin' => 'nullable|string|max:255',
            'subject3isnin' => 'nullable|string|max:255',
            'subject1selasa' => 'nullable|string|max:255',
            'subject2selasa' => 'nullable|string|max:255',
            'subject3selasa' => 'nullable|string|max:255',
            'subject1khamis' => 'nullable|string|max:255',
            'subject2khamis' => 'nullable|string|max:255',
            'subject3khamis' => 'nullable|string|max:255',
        ]);

        TimetableModel::create($request->all());

        return redirect()->route('KAManageTT')->with('success', 'Timetable created successfully.');
    }

    //show specific data
    public function show($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        return view('Manage KAFA Timetable.AdminTimetablePage', compact('timetable'));
    }

    //edit data
    public function edit($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        return view('Manage KAFA Timetable.AdminEditTimetable', compact('timetable'));
    }

    //update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas' => 'required|string|max:255',
            'ustazah' => 'required|string|max:255',
            'subject1isnin' => 'nullable|string|max:255',
            'subject2isnin' => 'nullable|string|max:255',
            'subject3isnin' => 'nullable|string|max:255',
            'subject1selasa' => 'nullable|string|max:255',
            'subject2selasa' => 'nullable|string|max:255',
            'subject3selasa' => 'nullable|string|max:255',
            'subject1khamis' => 'nullable|string|max:255',
            'subject2khamis' => 'nullable|string|max:255',
            'subject3khamis' => 'nullable|string|max:255',
        ]);

        $timetable = TimetableModel::findOrFail($id);
        $timetable->update($request->all());

        return redirect()->route('KAManageTT')->with('success', 'Timetable updated successfully.');
    }

    //delete data
    public function destroy($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        $timetable->delete();

        return redirect()->route('KAManageTT')->with('success', 'Timetable deleted successfully.');
    }

    /*public function pshow($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        return view('Manage KAFA Timetable.ParentsTimetablePage', compact('timetable'));
    }*/

    /*public function tshow($id)
    {
        $timetable = TimetableModel::findOrFail($id); // Ensure $id exists in the database
        dd($timetable);
        return view('Manage KAFA Timetable.TeacherTimetablePage', compact('timetable'));
    }*/
}
