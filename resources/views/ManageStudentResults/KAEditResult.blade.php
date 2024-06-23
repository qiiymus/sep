@extends('layout')

@section('content')
<div class="col-md-1">
                @include('include.KAmenu')
            </div>
<div class="card">
    <div class="card-header">Kemaskini Keputusan Pelajar</div>
    <div class="card-body">

    
        
        <form action="{{ url('/ManageStudentResults/' . $result->id) }}" method="post">
            @csrf
            @method("PATCH")

            <label>Nama Matapelajaran</label><br>
            <input type="text" name="subject" id="subject" value="{{ $result->subject }}" class="form-control"><br>
            <label>Markah</label><br>
            <input type="text" name="marks" id="marks" value="{{ $result->marks }}" class="form-control"><br>
            <label>Grade</label><br>
            <input type="text" name="grade" id="grade" value="{{ $result->grade }}" class="form-control"><br>
            <input type="submit" value="Kemaskini" class="btn btn-success"><br>
        </form>
       
    </div>
</div>

@endsection
