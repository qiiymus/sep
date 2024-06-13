{{-- LKABulletinCreate --}}

@extends('Manage Bulletin.layouts')
<div class="d-flex">
@include('include.KAmenu')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Bulletins</div>
  <div class="card-body">
       
      <form action="{{ url('bulletin') }}" method="post">
        {!! csrf_field() !!}
        <label>Daripada</label></br>
        <input type="text" name="daripada" id="daripada" class="form-control"></br>
        <label>Kepada</label></br>
        <input type="text" name="kepada" id="kepada" class="form-control"></br>
        <label>Tajuk</label></br>
        <input type="text" name="tajuk" id="tajuk" class="form-control"></br>
        <label>Tarikh</label></br>
        <input type="date" name="tarikh" id="tarikh" class="form-control"></br>
        <label>Kepentingan</label></br>
        <input type="text" name="kepentingan" id="kepentingan" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <label>Isi</label></br>
        <input type="text" name="isi" id="isi" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        
    </form>
    
  </div>
</div>

@stop