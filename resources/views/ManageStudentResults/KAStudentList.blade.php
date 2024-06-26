@extends('layout')

@section('content')
<style>
.table-responsive {
    overflow-x: auto;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
.table th,
.table td {
    padding: 1.5rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}
.table .table {
    background-color: #f8f9fa;
}
.card {
    margin: 4rem;
}
</style>

@include('include.KAmenu')

<div class="card">
    <div class="card-header">
        <h2>Senarai nama pelajar kelas {{ $class }}</h2>
    </div>
    <div class="card-body">
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kelas</th>
                        <th>Nama Pelajar</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $class }}</td>
                            <td>{{ $student['name'] }}</td>
                            <td>
                                <a href="{{ route('kareresults.index') }}" title="View Student">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
