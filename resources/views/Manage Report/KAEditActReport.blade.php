@extends('layout')
@section('title','Kemaskini Laporan Aktiviti')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:left"><br>
            <h2 style="color:#2d532d">Kemaskini Laporan Aktiviti</h2><br>
        </div>
        <form method="POST" action="{{ route('report.update', $report->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <table class="table table-borderless">
                <tr>
                    <td scope="col">Nama Aktiviti:</td>
                    <td scope="col" colspan="5">
                        <input type="text" class="form-control" name="act_name" 
                        value="{{ $report->Name }}">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Jenis Aktiviti:</td>
                    <td scope="col" colspan="5">
                    <select id="act_type" name="act_type" class="form-control"
                    value="{{ $report->Type }}">
                        <option selected>{{ $report->Type }}</option>
                        <option value="Program">Program</option>
                        <option value="Pertandingan">Pertandingan</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td scope="col">Tarikh:</td>
                    <td scope="col">
                        <input type="date" class="form-control" name="act_date" 
                        value="{{ $report->Activity_Date }}">
                    </td>
                    <td scope="col">Masa:</td>
                    <td scope="col">
                        <input type="time" class="form-control" name="act_startTime" 
                        value="{{ $report->StartTime }}">
                    </td>
                    <td scope="col">-</td>
                    <td scope="col">
                        <input type="time" class="form-control" name="act_endTime" 
                        value="{{ $report->EndTime }}">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Guru Bertugas:</td>
                    <td scope="col" colspan="5">
                    <select id="act_teacher" name="act_teacher" class="form-control" 
                    value="{{ $report->Teacher_ID }}">
                        <option selected>{{ $report->Teacher_ID }}</option>
                        <option value="T001">T001</option>
                        <option value="T002">T002</option>
                        <option value="T003">T003</option>
                        <option value="T004">T004</option>
                        <option value="T005">T005</option>
                        <option value="T006">T006</option>
                        <option value="T007">T007</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td scope="col">Tempat:</td>
                    <td scope="col" colspan="5">
                        <input type="text" class="form-control" name="act_place" 
                        value="{{ $report->Location }}">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Ringkasan Aktiviti:</td>
                    <td scope="col" colspan="5">
                        <textarea class="form-control" name="act_details"
                        value="{{ $report->Description }}">{{ $report->Description }}</textarea>
                    </td>
                </tr>
            </table>
            <div style="text-align:center">
                <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
                style="background-color:#2d532d" style=width:300px>Kembali</button>
                <form action="{{ route('report.update', $report->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" style="background-color:#2d532d" style=width:300px type="button" class="btn btn-primary"> 
                        Kemaskini
                    </button>
                </form>
            </div>
        </form>
    </div>
@endsection