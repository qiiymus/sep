{{-- KABulletinList --}}
@include('include.header')
@extends('Manage Bulletin.layouts')
<div class="d-flex">
    @include('include.parentmenu')
@section('content')
<style>
    .card-header {
        background-color: #FFF6A0;
    }
  </style>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>KAFA Bulletin Parents</h1>
                    </div>
                    <div class="card-body">
                        <h2>Senarai Bulletin</h2>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tajuk</th>
                                        <th>Tarikh</th>
                                        <th>Kepentingan</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bulletins as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tajuk }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->tarikh }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->kepentingan }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->status }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>
                                            <a href="{{ url('/viewbulletinParents/' . $item->id) }}" title="View Bulletin">
                                                <button class="btn btn-info btn-sm" style="background-color: #FFF6A0; border-color: #FFF6A0;">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> Lihat
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <br/>
                <br/>
            </div>
            
        </div>
    </div>
@endsection