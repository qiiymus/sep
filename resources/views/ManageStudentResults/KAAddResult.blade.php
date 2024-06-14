@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Tambah Keputusan Pelajar</div>
    <div class="card-body">
        <form action="{{ route('ManageStudentResults.store') }}" method="post">
            @csrf
            <!-- Form inputs -->
            <label>Nama Matapelajaran</label><br>
            <input type="text" name="subject" id="subject" class="form-control"><br>
            <label>Markah</label><br>
            <input type="text" name="marks" id="marks" class="form-control"><br>
            <label>Gred</label><br>
            <input type="text" name="grade" id="grade" class="form-control"><br>
            <input type="submit" value="Simpan" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

