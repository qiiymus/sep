@extends('layout')
@section('title','Cipta Laporan Aktiviti')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:left"><br>
            <h2 style="color:#2d532d">Borang Laporan Aktiviti</h2><br>
        </div>
        <form action="{{route('KACreateAR.post')}}" method="POST">
            <table class="table table-borderless">
                <tr>
                    <td scope="col">Nama Aktiviti:</td>
                    <td scope="col" colspan="5">
                        <input type="text" class="form-control" name="act_name">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Jenis Aktiviti:</td>
                    <td scope="col" colspan="5">
                    <select id="act_type" name="act_type" class="form-control">
                        <option selected>Pilih jenis aktiviti</option>
                        <option value="Program">Program</option>
                        <option value="Pertandingan">Pertandingan</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td scope="col">Tarikh:</td>
                    <td scope="col">
                        <input type="date" class="form-control" name="act_date">
                    </td>
                    <td scope="col">Masa:</td>
                    <td scope="col">
                        <input type="time" class="form-control" name="act_startTime">
                    </td>
                    <td scope="col">-</td>
                    <td scope="col">
                        <input type="time" class="form-control" name="act_endTime">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Guru Bertugas:</td>
                    <td scope="col" colspan="5">
                    <select id="act_teacher" name="act_teacher" class="form-control">
                        <option selected>Pilih ID guru bertugas</option>
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
                        <input type="text" class="form-control" name="act_place">
                    </td>
                </tr>
                <tr>
                    <td scope="col">Ringkasan Aktiviti:</td>
                    <td scope="col" colspan="5">
                        <textarea class="form-control" name="act_details"></textarea>
                    </td>
                </tr>
            </table>
            <div style="text-align:center">
                <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
                style="background-color:#2d532d" style=width:300px>Kembali</button>
                <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
                style="background-color:#2d532d" style=width:300px>Simpan</button>
                <button type="submit" class="btn btn-primary" style="background-color:#2d532d">Hantar</button>
            </div>
        </form>
    </div>
@endsection