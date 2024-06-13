@extends('layout')
@section('title', 'Kemaskini Jadual Waktu Kelas')
@section('content')
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .content-wrapper {
            display: flex;
        }
        .main {
            flex-grow: 1;
            margin: 1.5rem;
            padding: 20px;
        }
        .main h1 {
            color: #18392b;
            font-weight: bold;
        }
        .schedule {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            padding: 8px;
            border: 1px solid black;
        }
        td[rowspan="3"] {
            background-color: #9FB996;
        }
        button {
            margin-top: 20px;
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
        .button-container {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="content-wrapper d-flex">
    @include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <p><b>Kelas:</b> {{ $timetable->kelas }}</p>
        <p><b>Ustazah:</b> {{ $timetable->ustazah }}</p>
        <section class="schedule">
            <table>
                <tr>
                    <th>Hari/Masa</th>
                    <th>2.00-2.30 pm</th>
                    <th>2.30-3.00 pm</th>
                    <th>3.00-3.30 pm</th>
                    <th>3.30-4.00 pm</th>
                </tr>
                <tr>
                    <td>Isnin</td>
                    <td>{{ $timetable->subject1isnin }}</td>
                    <td>{{ $timetable->subject2isnin }}</td>
                    <td class="rehat-row" rowspan="3">R E H A T</td>
                    <td>{{ $timetable->subject3isnin }}</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>{{ $timetable->subject1selasa }}</td>
                    <td>{{ $timetable->subject2selasa }}</td>
                    <td>{{ $timetable->subject3selasa }}</td>
                </tr>
                <tr>
                    <td>Khamis</td>
                    <td>{{ $timetable->subject1khamis }}</td>
                    <td>{{ $timetable->subject2khamis }}</td>
                    <td>{{ $timetable->subject3khamis }}</td>
                </tr>
            </table>
        </section>
        <div class="button-container">
            <form action="{{ route('KAManageTT') }}" method="GET" style="margin: 0;">
                <button type="submit">Kembali</button>
            </form>
            <form action="{{ route('timetable.edit', $timetable->id) }}" method="GET" style="margin: 0;">
                <button type="submit">Kemaskini</button>
            </form>
        </div>
    </div>
</div>
</body>
@endsection
