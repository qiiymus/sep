@extends('layout')
@section('title', 'Urus Jadual Waktu Kelas')
@section('content')
<head>
    <!--CSS for the elements-->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .main {
            flex-grow: 1;
            margin: 1.5rem;
            margin-left: 4rem;
            padding: 20px;
        }
        .main h1 {
            color: #18392b;
            font-weight: bold;
        }
        .search-container {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-top: 20px;
            gap: 10px;
        }
        .search-container p {
            margin: 0;
            font-weight: bold;
        }
        .search-container form {
            display: flex;
            gap: 10px;
        }
        .search-container input[type="text"] {
            width: 300px;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #006400;
            border-radius: 4px;
        }
        .search-container button {
            padding: 10px 15px;
            height: 40px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            align-items: center;
        }
        .search-container button:hover {
            background-color: #006400;
        }
        #add {
            padding: 10px 15px;
            margin-top: 5px;
            font-size: 16px;
            border: 1px solid #006400; /* Green border */
            background-color: white;
            color: #006400; /* Green font color */
            border-radius: 10px;
            cursor: pointer;
        }
        #add:hover {
            background-color: #006400;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #d7ddcd;
            margin-top: 20px;
        }
        thead {
            background-color: #D3D3D3;
            color: black;
        }
        th, td {
            padding: 12px;
            vertical-align: middle; /* Center content vertically */
            border: 1px solid;
        }
        th:first-child, td:first-child {
            width: 60%; /* Set wider width for first column */
            text-align: left; /* Align text left */
        }
        td:last-child {
            width: 40%; /* Set narrower width for second column */
            text-align: center; /* Align buttons center */
        }
        td button {
            margin-right: 5px;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button.view {
            background-color: #2196F3;
            color: white;
        }
        button.delete {
            background-color: #F44336;
            color: white;
        }
        button.view:hover {
            background-color: #1976D2;
        }
        button.delete:hover {
            background-color: #D32F2F;
        }
        .button-container {
            display: flex;
            justify-content: center; /* Center buttons horizontally */
        }
        .button-container form {
            margin: 0; /* Remove margin to eliminate extra space */
        }
    </style>
</head>

<!--Content starts here-->
<body>
<div class="content-wrapper d-flex">
    @include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <!--Search engine for searching specific class's timetable-->
        <div class="search-container">
            <p>Kelas:</p>
            <form action="{{ route('timetable.index') }}" method="GET">
                <input type="text" name="findclass" placeholder="Cari Kelas">
                <button type="submit">Cari</button>
            </form>
        </div>

        <!--Create new timetable button, will redirect to add timetable page-->
        <form action="{{ route('KAAddTT') }}">
            <button type="submit" id="add">+ Tambah Jadual Waktu Kelas</button>
        </form>

        <!--Display list of existing class's timetable-->
        <table>
            <thead>
                <tr>
                    <th><center>Kelas</center></th>
                    <th><center>Operasi</center></th>
                </tr>
            </thead>
            <tbody>
            @foreach($timetables as $timetable)
                <tr>
                    <td>{{ $timetable->kelas }}</td>
                    <td>
                        <div class="button-container">
                            <form action="{{ route('timetable.show', $timetable->id) }}" method="GET" style="margin: 0">
                                <button type="submit" class="view">Lihat</button>
                            </form>
                            <form action="{{ route('timetable.destroy', $timetable->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Buang</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
@endsection
