{{-- KABulletinView --}}
@include('include.header')
@extends('Manage Bulletin.layouts')
<div class="d-flex">
@include('include.KAmenu')
@section('content')

<div class="card" style="margin:20px;">

  <div class="card-header">
    <h1>KAFA Bulletin</h1>
</div>
  <div class="card-body">
    <h2>Butiran Bulletin</h2><hr>
        <div class="card-body">
          <p class="card-title">Daripada : {{ $bulletins->daripada }}</p>
          <p class="card-title">Kepada : {{ $bulletins->kepada }}</p><hr>
          <h3 class="card-title">Tajuk : {{ $bulletins->tajuk }}</h3><hr>
          <p class="card-text">Tarikh : {{ $bulletins->tarikh }}</p>
          <p class="card-text">Kepentingan : {{ $bulletins->kepentingan }}</p>
          <p class="card-text">Status : {{ $bulletins->status }}</p><hr>
          <p class="card-text">Isi : {{ $bulletins->isi }}</p><hr>
  </div>
    </hr>
  </div>
</div>
</div>
@endsection