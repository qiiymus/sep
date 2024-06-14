@extends('layout')
@section('title','Laporan')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:left"><br>
            <h1 style="color:#2d532d">Laporan</h1>
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
                <td>
                <div class="dropdown border-top">
                    <a href="#" class="align-items-center justify-content-center p-2  text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false" 
                    style="background-color:#2d532d; color:white; border-radius:5px">
                    Cipta Laporan
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                    <li><a class="dropdown-item" href="KACreateAR">Laporan Aktiviti</a></li>
                    <li><a class="dropdown-item" href="KACreatePR">Laporan Pencapaian</a></li>
                    </ul>
                </div>
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
            @foreach($report as $index => $row)
                <tr>
                    <td>{{ $row->Name }}</td>
                    <td>LA00{{ $row->AR_ID }}/2024</td>
                    <td>{{ $row->Report_Date }}</td>
                    <td>{{ $row->Type }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                    <a href={{ route('KAViewAR', ['id' => $row->AR_ID]) }} class="text-decoration-none" title="Papar"> 
                        <img src="img\eye.png" alt="Papar" style="width:20px;height:20px;">
                    </a>
                    <a href={{ route('KAEditAR.edit', ['id' => $row->AR_ID]) }} class="text-decoration-none" title="Kemaskini">
                        <img src="img\pen.png" alt="Kemaskini" style="width:20px;height:20px;">
                    </a>
                    <button class="btn" onClick="deleteFunction('{{ $row->id }}')" title="Padam">
                        <img src="img\trash-bin.png" alt="Padam" style="width:15px;height:15px;">
                    </button>
                    <button class="btn" onClick="deleteFunction('{{ $row->id }}')" title="Muat Turun">
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

@push('js')
<script>
    function deleteFunction(id) {
        document.getElementById('delete_id').value = id;
        $("#modalDelete").modal('show');
    }
</script>
@endpush

