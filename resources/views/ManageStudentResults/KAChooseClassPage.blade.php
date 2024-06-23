@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            @include('include.KAmenu')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Semak Keputusan Pelajar</h2>
                </div>
                <div class="card-body">
                    <p>Sila pilih kelas pelajar</p>
                    <form action="{{ route('students.list') }}" method="GET">
                        <select name="class" class="form-control" required>
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
        </div>
    </div>
</div>
@endsection

