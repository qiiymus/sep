@extends('layout')
@section('title', 'Jadual Waktu Kelas Guru')
@section('content')
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        color: #1c2e4a;
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
      border: 1px solid #000;
      text-align: center;
      padding: 8px;
    }
    .rehat-row {
      background-color:#b0d9e2;
    }
  </style>
</head>
<body>
<div class="content-wrapper d-flex">
  @include('include.teachermenu')
  <div class="main flex-grow-1">
    <h1>Jadual Waktu Kelas</h1>
    <p><b>Kelas:</b></p>
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
          <td>Subject 1</td>
          <td>Subject 2</td>
          <td class="rehat-row" rowspan="3">R E H A T</td>
          <td>Subject 3</td>
        </tr>
        <tr>
          <td>Selasa</td>
          <td>Subject 1</td>
          <td>Subject 2</td>
          <td>Subject 3</td>
        </tr>
        <tr>
          <td>Khamis</td>
          <td>Subject 1</td>
          <td>Subject 2</td>
          <td>Subject 3</td>
        </tr>
      </table>
    </section>
  </div>
</div>
</body>
@endsection
