{{-- KABulletinView --}}
@include('include.header')
@extends('Manage Bulletin.layouts')
<div class="d-flex">
    @include('include.teachermenu')
@section('content')
  
<div class="card" style="margin:20px;">
    <div class="card-header">
      <h1>KAFA Bulletin</h1>
    </div>
    <div class="card-body">
    <h2>Butiran Bulletin</h2>
    <br/>
    <br/>
        <div class="card-body">
        <h4 class="card-title">Daripada : {{ $bulletin->daripada }}</h5><hr>
        <h4 class="card-title">Kepada : {{ $bulletin->kepada }}</h5><hr>
        <h3 class="card-title">Tajuk : {{ $bulletin->tajuk }}</h5><hr>
        <p class="card-text">Tarikh : {{ $bulletin->tarikh }}</p><hr>
        <p class="card-text">Kepentingan : {{ $bulletin->kepentingan }}</p><hr>
        <p class="card-text">Status : {{ $bulletin->status }}</p><hr>
        <p class="card-text">Isi : {{ $bulletin->isi }}</p><hr>
  </div>
    </hr>
  </div>
</div>
</div>
  @endsection