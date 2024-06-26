@extends('layout')
@section('title', 'Jadual Waktu Kelas Murid untuk Ibu Bapa')
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
        color: #f4bc1c;
        font-weight: bold;
    }
    .schedule {
      margin-top: 10px;
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
      background-color: #fff6a0;
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
<div class="content-wrapper">
  @include('include.parentmenu')
  <div class="main">
    <h1>Jadual Waktu Kelas</h1>
    <div class="kelas-ustazah-container">
      <h5><b>Kelas: 2 Fatanah</b></h5>
      <h5><b>Ustazah: Ustazah Faridah</b></h5>
    </div>
    <section class="schedule">
      <table>
        <tr>
          <th>Hari/Masa</th>
          <th><b>2.00-2.30 pm</b></th>
          <th><b>2.30-3.00 pm</b></th>
          <th><b>3.00-3.30 pm</b></th>
          <th><b>3.30-4.00 pm</b></th>
        </tr>
        <tr>
        <tr>
          <td>Isnin</td>
          <td>AL-QURAN</td>
          <td>SIRAH</td>
          <td class="rehat-row" rowspan="3">R E H A T</td>
          <td>AKIDAH</td></td>
        </tr>
        <tr>
          <td>Selasa</td>
          <td>AL-QURAN</td>
          <td>JAWI/KHAT</td>
          <td>IBADAH</td>
        </tr>
        <tr>
          <td>Khamis</td>
          <td>AL-QURAN</td>
          <td>BAHASA ARAB</td>
          <td>ADAB</td>
        </tr>
      </table>
    </section>
  </div>
</div>
</body>
@endsection
