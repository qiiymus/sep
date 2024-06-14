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
    margin: 2rem;
}
</style>

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
                    <tr>
                        <td>1</td>
                        <td>2 Fatanah</td>
                        <td>Upin bin Ipin</td>
                        <td>
                        <a href="{{ route('kareresults.index') }}" title="View Student">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2 Fatanah</td>
                        <td>Siti binti Ali</td>
                        <td>
                        <a href="{{ route('kareresults.index') }}" title="View Student">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2 Fatanah</td>
                        <td>Farhanah binti Mohd</td>
                        <td>
                        <a href="{{ route('kareresults.index') }}" title="View Student">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2 Fatanah</td>
                        <td>Ehsan bin Mail</td>
                        <td>
                        <a href="{{ route('kareresults.index') }}" title="View Student">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
