{{-- KABulletinList --}}

@extends('Manage Bulletin.layouts')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>KAFA Bulletin</h1>
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
                                        <td>{{ $item->Tajuk }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->Tarikh }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->Kepentingan }}</td> <!-- Ensure the column name matches exactly -->
                                        <td>{{ $item->Status }}</td> <!-- Ensure the column name matches exactly -->

                                        <td>
                                            <a href="{{ url('/bulletin/' . $item->id) }}" title="View Bulletin"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/bulletin/' . $item->id . '/edit') }}" title="Edit Bulletin"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sunting</button></a>

                                            <form method="POST" action="{{ url('/bulletin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Bulletin" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Buang</button>
                                            </form>
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
                <a href="{{ url('/bulletin/create') }}" class="btn btn-success btn-sm" title="Add New Bulletin">
                    Add New
                </a>
            </div>
            
        </div>
    </div>
@endsection