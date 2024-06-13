@extends('layout')
@section('content')
@include('include.KAmenu')
<style>
.card {
    margin: 200px;
}
</style>

<div class="card">
    <div class="card-header">
        <h2>Semak Keputusan Pelajar</h2>
    </div>
    <div class="card-body">
        <p>Sila pilih kelas pelajar</p>
        <form action="{{ route('ManageStudentResults.index') }}" method="GET">
            <select name="class">
                <option value="">-Sila pilih-</option>
                @foreach($classes as $class)
                    <option value="{{ $class }}">{{ $class }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-info btn-sm">
                <i class="fa fa-eye" aria-hidden="true"></i> Teruskan
            </button>
        </form>
    </div>
</div>
@endsection


