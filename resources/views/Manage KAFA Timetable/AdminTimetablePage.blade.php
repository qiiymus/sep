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
            margin-left: 4rem;
            padding: 20px;
        }
        .main h1 {
            color: #18392b;
            font-weight: bold;
            margin-bottom: 10px; /* Added margin for better spacing */
        }
        .schedule {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px; /* Adjusted margin for better spacing */
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
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            margin-right: 10px; /* Added margin-right for button spacing */
        }
        .button-container {
            text-align: center;
            margin-top: 20px; /* Adjusted margin for better spacing */
        }
        .button-container form {
            display: inline; /* Ensures forms are inline */
            margin: 0;
        }
        .kelas-ustazah-container {
            display: flex;
            padding: 10px;
            justify-content: space-between; /*Align items with space between */
            margin-right: 400px;
        }
    </style>
</head>

<body>
<div class="content-wrapper d-flex">
    @include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <div class="kelas-ustazah-container">
            <h5><b>Kelas: {{ $timetable->kelas }}</b></h5>
            <h5><b>Ustazah: {{ $timetable->ustazah }}</b></h5>
        </div>
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
            <form action="{{ route('KAManageTT') }}" method="GET">
                <button type="submit">Kembali</button>
            </form>
            <form action="{{ route('timetable.edit', $timetable->id) }}" method="GET">
                <button type="submit">Kemaskini</button>
            </form>
        </div>
    </div>
</div>
</body>
@endsection
