<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TimetableModel;

class TimetableController extends Controller
{
    public function ParentViewTT() {
        return view('Manage KAFA Timetable.ParentsTimetablePage');
    }

    public function TeacherViewTT() {
        return view('Manage KAFA Timetable.TeacherTimetablePage');
    }

    public function KAViewTT() {
        return view('Manage KAFA Timetable.AdminTimetablePage');
    }

    public function KAAddTT() {
        return view('Manage KAFA Timetable.AdminAddTimetable');
    }

    public function KAEditTT() {
        return view('Manage KAFA Timetable.AdminEditTimetable');
    }

    public function KAManageTT() {
        $timetables = TimetableModel::all();
        return view('Manage KAFA Timetable.AdminManageTimetable', compact('timetables'));
    }

    public function index()
    {
        /*$timetables = TimetableModel::all();
        return view('Manage KAFA Timetable.AdminTimetablePage', compact('timetables'));*/
    }

    public function create()
    {
        return view('Manage KAFA Timetable.AdminAddTimetable');
    }

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

    public function show($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        return view('Manage KAFA Timetable.AdminTimetablePage', compact('timetable'));
    }

    public function edit($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        return view('Manage KAFA Timetable.AdminEditTimetable', compact('timetable'));
    }

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

    public function destroy($id)
    {
        $timetable = TimetableModel::findOrFail($id);
        $timetable->delete();

        return redirect()->route('KAManageTT')->with('success', 'Timetable deleted successfully.');
    }
}
