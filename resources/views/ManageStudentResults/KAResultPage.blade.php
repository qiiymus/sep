@extends('layout')

@section('content')
<style>
.page-title {
    font-size: 1.5rem;
    margin: 20px;
    font-weight: bold;
}
.card {
    display: inline-block;
    margin: 20px;
    padding: 20px;
    border: 1px solid #dee2e6;
}
.card-header, .card-body {
    font-size: 1rem;
    margin-bottom: 10px;
}
.label {
    font-weight: bold;
    margin-right: 5px;
}
</style>

<div class="page-title">
    Paparan Keputusan Pelajar
</div>

<div class="card">
    <div class="card-header">
        <span class="label">Nama Pelajar:</span>{{ $student->Name }}
    </div>
    <div class="card-body">
        <span class="label">Kelas:</span>{{ $student->class }}
    </div>
</div>

@endsection

