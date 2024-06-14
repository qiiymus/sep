@extends('layout')
@section('title','Papar Laporan Aktiviti')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        @foreach($report as $index => $row)
        <div><br>
            <h6 style="color:black;text-align:right">ID LAPORAN: LA00{{ $row->AR_ID }}/2024</h6>
            <h6 style="color:black;text-align:right">TARIKH: {{ $row->Report_Date }}</h6>
            <img src="img\logo report.png" alt="KAFA Logo" style="width:170px;text-align:center">
            <h2 style="color:black;text-align:center">Laporan Aktiviti</h2><br>
        </div>
        <table class="table table-borderless" style="text-alignment:left; width:600px; 
        margin-left: 40;">
            <tr>
                <th scope="col">Nama Aktiviti:</td>
                <td scope="col">
                    {{ $row->Name }}
                </td>
            </tr>
            <tr>
                <th scope="col">Jenis Aktiviti:</td>
                <td scope="col">
                    {{ $row->Type }}
                </td>
            </tr>
            <tr>
                <th scope="col">Tarikh:</td>
                <td scope="col">
                    {{ $row->Activity_Date }}
                </td>
            </tr>
            <tr>
                <th scope="col">Masa:</td>
                <td scope="col">
                    {{ $row->StartTime }} - {{ $row->EndTime }}
                </td>
            </tr>
            <tr>
                <th scope="col">Guru Bertugas:</td>
                <td scope="col">
                    {{ $row->Teacher_ID }}
                </td>
            </tr>
            <tr>
                <th scope="col">Tempat:</td>
                <td scope="col">
                    {{ $row->Location }}
                </td>
            </tr>
            <tr>
                <th scope="col">Ringkasan Aktiviti:</td>
                <td scope="col">
                    {{ $row->Description }}
                </td>
            </tr>
        </table>
        @endforeach
        <div style="text-align:center">
            <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
            style="background-color:#2d532d" style=width:300px>Kembali</button>
            <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
            style="background-color:#2d532d" style=width:300px>Muat Turun</button>
        </div>
    </div>
@endsection