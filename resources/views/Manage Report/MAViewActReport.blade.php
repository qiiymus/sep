@extends('layout')
@section('title','Papar Laporan Aktiviti')
@section('content')
<div class="d-flex">
@include('include.MAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div><br>
            <h6 style="color:black;text-align:right">ID LAPORAN: LA00{{ $report->id }}/2024</h6>
            <h6 style="color:black;text-align:right">TARIKH: {{ $report->Report_Date }}</h6>
            <img src="img\logo report.png" alt="KAFA Logo" style="width:170px;text-align:center">
            <h2 style="color:black;text-align:center">Laporan Aktiviti</h2><br>
        </div>
        <table class="table table-borderless" style="text-alignment:left; width:600px; 
        margin-left: 40;">
            <tr>
                <th scope="col">Nama Aktiviti:</td>
                <td scope="col">
                {{ $report->Name }}
                </td>
            </tr>
            <tr>
                <th scope="col">Jenis Aktiviti:</td>
                <td scope="col">
                {{ $report->Type }}
                </td>
            </tr>
            <tr>
                <th scope="col">Tarikh:</td>
                <td scope="col">
                {{ $report->Activity_Date }}
                </td>
            </tr>
            <tr>
                <th scope="col">Masa:</td>
                <td scope="col">
                {{ $report->StartTime }} - {{ $report->EndTime }}
                </td>
            </tr>
            <tr>
                <th scope="col">Guru Bertugas:</td>
                <td scope="col">
                {{ $report->Teacher_ID }}
                </td>
            </tr>
            <tr>
                <th scope="col">Tempat:</td>
                <td scope="col">
                {{ $report->Location }}
                </td>
            </tr>
            <tr>
                <th scope="col">Ringkasan Aktiviti:</td>
                <td scope="col">
                {{ $report->Description }}
                </td>
            </tr>
        </table>
        <div style="text-align:center">
            <button type="button" class="btn btn-primary" onclick="document.location='/MAReport'" 
            style="background-color:#5b0c9e" style=width:300px>Kembali</button>
        </div>
    </div>
@endsection