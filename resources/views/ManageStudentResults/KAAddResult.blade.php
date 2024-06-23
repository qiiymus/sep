@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            @include('include.KAmenu')
        </div>
        <div class="col-md-10 offset-md-1">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Tambah Keputusan Pelajar</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('ManageStudentResults.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Nama Matapelajaran</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="marks">Markah</label>
                            <input type="text" name="marks" id="marks" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="grade">Gred</label>
                            <input type="text" name="grade" id="grade" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

