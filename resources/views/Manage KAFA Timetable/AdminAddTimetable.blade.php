@extends('layout')
@section('title','Tambah Jadual Waktu Kelas')
@section('content')
<head>
    <!--CSS for the elements-->
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
        th {
            background-color: #f2f2f2;
        }
        td[rowspan="3"] {
            background-color: #9FB996;
        }
        button {
        	margin-top:20px;
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
      	}
        .main h1 {
            color: #18392b;
            font-weight: bold;
        }
        .button-container {
            text-align: center;
        }
        .kelas-ustazah-container {
            display: flex;
            padding: 10px;
        }
    </style>
</head>

<!--Content starts here-->
<body>
<div class="content-wrapper d-flex">
@include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <!--To call controller to display the specific class's timetable details-->
        <form action="{{ route('timetable.store') }}" method="POST">
            @csrf
            <div class="kelas-ustazah-container">
                <div class="form-inline">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas">
                </div>

                <div class="form-inline">
                    <label for="ustazah">Ustazah:</label>
                    <input type="text" id="ustazah" name="ustazah">
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
                            <td><input type="text" name="subject1isnin"></td>
                            <td><input type="text" name="subject2isnin"></td>
                            <td class="rehat-row" rowspan="3">R E H A T</td>
                            <td><input type="text" name="subject3isnin"></td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td><input type="text" name="subject1selasa"></td>
                            <td><input type="text" name="subject2selasa"></td>
                            <td><input type="text" name="subject3selasa"></td>
                        </tr>
                        <tr>
                            <td>Khamis</td>
                            <td><input type="text" name="subject1khamis"></td>
                            <td><input type="text" name="subject2khamis"></td>
                            <td><input type="text" name="subject3khamis"></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <div class="button-container">
                <button type="submit">Simpan</button>
                <button type="reset">Batal</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection