@extends('layout')
@section('title','Laporan')
@section('content')
<div class="d-flex">
@include('include.MAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:left"><br>
            <h1 style="color:#5b0c9e">Laporan</h1>
        </div>
        <table class="table table-sm">
            <tr>
                <td>Tapis Laporan: </td>
                <td>
                <select id="role" name="role" class="form-control">
                    <option selected>Status</option>
                    <option value="parent">Hantar</option>
                    <option value="teacher">Simpan</option>
                </select>
                </td>
                <td>
                <select id="role" name="role" class="form-control">
                    <option selected>Jenis</option>
                    <option value="parent">Aktiviti</option>
                    <option value="teacher">Pencapaian</option>
                </select>
                </td>
            </tr>
        </table>
    
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Laporan</th>
                    <th scope="col">ID Laporan</th>
                    <th scope="col">Tarikh Ciptaan</th>
                    <th scope="col">Jenis Laporan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection