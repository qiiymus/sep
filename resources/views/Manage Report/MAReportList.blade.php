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
                <td></td>
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
            @foreach($report as $index => $row)
                <tr>
                    <td>{{ $row->Name }}</td>
                    <td>LA00{{ $row->id }}/2024</td>
                    <td>{{ $row->Report_Date }}</td>
                    <td>{{ $row->Type }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                    <form action="{{ route('report.mashow', $row->id) }}" method="GET" style="margin: 0">
                        <button type="submit" class="btn">
                            <img src="img\eye.png" alt="Papar" style="width:20px;height:20px;">
                        </button>
                    </form>
                    <form action="{{ route('report.edit', $row->id) }}" method="GET" style="margin: 0">
                        <button type="submit" class="btn">
                            <img src="img\pen.png" alt="Kemaskini" style="width:20px;height:20px;">
                        </button>
                    </form>
                    <form action="{{ route('report.destroy', $row->id) }}" method="POST" style="margin: 0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">
                            <img src="img\trash-bin.png" alt="Padam" style="width:15px;height:15px;">
                        </button>
                    </form>
                    <button class="btn" href= "#" title="Muat Turun">
                        <img src="img\direct-download.png" alt="Muat Turun" style="width:20px;height:20px;">
                    </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
