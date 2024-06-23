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
                    <h2>Kemaskini Keputusan Pelajar</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/ManageStudentResults/' . $result->id) }}" method="post">
                        @csrf
                        @method("PATCH")

                        <div class="form-group">
                            <label for="subject">Nama Matapelajaran</label>
                            <input type="text" name="subject" id="subject" value="{{ $result->subject }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="marks">Markah</label>
                            <input type="text" name="marks" id="marks" value="{{ $result->marks }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="grade">Grade</label>
                            <input type="text" name="grade" id="grade" value="{{ $result->grade }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Kemaskini</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
