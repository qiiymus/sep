{{-- KABulletinView --}}

@extends('Manage Bulletin.layouts')
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
        <h4 class="card-title">Daripada : {{ $bulletins->Daripada }}</h5><hr>
        <h4 class="card-title">Kepada : {{ $bulletins->Kepada }}</h5><hr>
        <h3 class="card-title">Tajuk : {{ $bulletins->Tajuk }}</h5><hr>
        <p class="card-text">Tarikh : {{ $bulletins->Tarikh }}</p><hr>
        <p class="card-text">Kepentingan : {{ $bulletins->Kepentingan }}</p><hr>
        <p class="card-text">Status : {{ $bulletins->Status }}</p><hr>
        <p class="card-text">Isi : {{ $bulletins->Isi }}</p><hr>
  </div>
    </hr>
  </div>
</div>