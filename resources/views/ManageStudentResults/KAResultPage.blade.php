<!-- resources/views/ManageStudentResults/KAResultPage.blade.php -->

@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
    <p><strong>Student ID:</strong> {{ $student->student_id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    </div>
    <div class="card-body">
    <br/>
   //must change the table and add new table then change the model adn controller name to result
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID Pelajar</th>
                                        <th>Nama Pelajar</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ManageStudentResults as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->student_id }}</td>
                                        <td>{{ $item->name }}</td>
 
                                        <td>
                                            <a href="{{ url('/ManageStudentResults/KAResultPage' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Papar</button></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
    </div>
</div>

@endsection
