@extends('layout')
@section('title','Kemaskini Jadual Waktu Kelas')
@section('content')
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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
        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .image-container img {
            width: 150px;
            border-radius: 50%;
        }
        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
        }
        .form-inline label {
            margin: 5px 10px 5px 0;
        }
        .form-inline input {
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .schedule {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 8px;
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
    </style>
</head>
<body>
<div class="content-wrapper d-flex">
    @include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <form action="{{ route('timetable.update', $timetable->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="kelas-ustazah-container">
                <div class="form-inline">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas" value="{{ $timetable->kelas }}" required>
                </div>

                <div class="form-inline">
                    <label for="ustazah">Ustazah:</label>
                    <input type="text" id="ustazah" name="ustazah" value="{{ $timetable->ustazah }}" required>
                </div>
            </div>

            <section class="schedule">
                <table>
                    <thead>
                        <tr>
                            <th>Hari/Masa</th>
                            <th>2.00-2.30 pm</th>
                            <th>2.30-3.00 pm</th>
                            <th>3.00-3.30 pm</th>
                            <th>3.30-4.00 pm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Isnin</td>
                            <td><input type="text" name="subject1isnin" value="{{ $timetable->subject1isnin }}"></td>
                            <td><input type="text" name="subject2isnin" value="{{ $timetable->subject2isnin }}"></td>
                            <td class="rehat-row" rowspan="3">R E H A T</td>
                            <td><input type="text" name="subject3isnin" value="{{ $timetable->subject3isnin }}"></td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td><input type="text" name="subject1selasa" value="{{ $timetable->subject1selasa }}"></td>
                            <td><input type="text" name="subject2selasa" value="{{ $timetable->subject2selasa }}"></td>
                            <td><input type="text" name="subject3selasa" value="{{ $timetable->subject3selasa }}"></td>
                        </tr>
                        <tr>
                            <td>Khamis</td>
                            <td><input type="text" name="subject1khamis" value="{{ $timetable->subject1khamis }}"></td>
                            <td><input type="text" name="subject2khamis" value="{{ $timetable->subject2khamis }}"></td>
                            <td><input type="text" name="subject3khamis" value="{{ $timetable->subject3khamis }}"></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <div class="button-container">
                <form action="{{ route('KAViewTT') }}" method="GET">
                    <button type="submit">Batal</button>
                </form>
                <form action="{{ route('timetable.update', $timetable->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit">Kemaskini</button>
                </form>
            </div>
        </form>
    </div>
</div>

</body>
</html>
@endsection
