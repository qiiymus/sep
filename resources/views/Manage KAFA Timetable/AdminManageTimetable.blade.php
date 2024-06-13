@extends('layout')
@section('title','Urus Jadual Waktu Kelas')
@section('content')
<head>
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
            padding: 20px;
        }
        .main h1 {
            color: #18392b;
            font-weight: bold;
        }
        .search-container {
        	padding: 10px;
            display: flex;
            margin-top: 20px;
            gap: 10px;
        }
        .search-container input[type="text"] {
            width: 300px;
            height: 20px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #006400;
            border-radius: 4px 0 0 4px;
        }
        .search-container button {
            padding: 10px 15px;
            height: 40px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 10px;
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
            background-color: #9FB996;
            margin-top: 20px;
        }
        thead {
            background-color: #D3D3D3;
            color: black;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid;
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
        button.edit {
            background-color: #FFC107;
            color: white;
        }
        button.delete {
            background-color: #F44336;
            color: white;
        }
        button.view:hover {
            background-color: #1976D2;
        }
        button.edit:hover {
            background-color: #FFA000;
        }
        button.delete:hover {
            background-color: #D32F2F;
        }
    </style>
</head>
<body>
<div class="content-wrapper d-flex">
    @include('include.KAmenu')
    <div class="main flex-grow-1">
        <h1>Jadual Waktu Kelas</h1>
        <div class="search-container">
        	<p><b>Kelas</b></p>
            <input type="text">
            <button type="button">Cari</button>
        </div>
        <button type="button" id="add">+ Tambah Jadual Waktu</button>
        <table>
            <thead>
                <tr>
                    <th><center>Kelas</center></th>
                    <th><center>Operasi</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kelas 1</td>
                    <td>
                        <button class="view">View</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Kelas 2</td>
                    <td>
                        <button class="view">View</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
@endsection