@extends('layout')

@section('content')
<
                @include('include.KAmenu')
           
<style>
.page-title {
    font-size: 1.5rem;
    margin: 70px;
    font-weight: bold;
}
.card {
    display: block;
    margin: 70px;
    padding: 80px;
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
.card-break {
    margin-bottom: 30px; /* Adjust this value to give more or less space */
}
</style>

<div class="page-title">
    Paparan Keputusan Pelajar
</div>

<div class="card">
    <div class="card-body">
        <a href="{{ route('ManageStudentResults.create') }}" class="btn btn-success btn-sm" title="Add New Result">
            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Keputusan
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Nama Matapelajaran</th>
                        <th>Markah</th>
                        <th>Gred</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($results as $item)
                    <tr>
                        
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->marks }}</td>
                        <td>{{ $item->grade }}</td>
                        <td>
                        <a href="{{ route('ManageStudentResults.edit', $item->id) }}" title="Edit Result" class="btn btn-primary btn-sm">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
</a>
                        
                        <form method="POST" action="{{ url('/ManageStudentResults/' . $item->id) }}" style="display:inline">
                         @csrf
                          @method('DELETE')
                             <button type="submit" class="btn btn-danger btn-sm" title="Delete Result" onclick="return confirm('Confirm delete?')">
                              <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                             </button>
                        </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
