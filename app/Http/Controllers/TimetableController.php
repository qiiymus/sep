<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Timetable;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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
        return view('Manage KAFA Timetable.AdminManageTimetable');
    }

    //Display a listing of the resource.
    public function index()
    {
        //
    }

    //Show the form for creating a new resource.
    
    public function create()
    {
        //
    }

    //Store a newly created resource in storage.
    
    public function store(Request $request)
    {
        //
    }

    
    //Display the specified resource.
    
    public function show(string $id)
    {
        //
    }

    
    //Show the form for editing the specified resource.
    
    public function edit(string $id)
    {
        //
    }

    //Update the specified resource in storage.
    
    public function update(Request $request, string $id)
    {
        //
    }

    //Remove the specified resource from storage.
    
    public function destroy(string $id)
    {
        //
    }
}
