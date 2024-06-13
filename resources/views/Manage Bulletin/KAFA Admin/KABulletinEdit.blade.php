

@extends('Manage Bulletin.layouts')
<div class="d-flex">
@include('include.KAmenu')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Sunting Bulletin</div>
  <div class="card-body">
       
      <form action="{{ url('bulletin/' .$bulletins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$bulletins->id}}" id="id" />
        <label>Daripada</label></br>
        <input type="text" name="daripada" id="daripada" value="{{$bulletins->daripada}}" class="form-control"></br>
        <label>Kepada</label></br>
        <input type="text" name="kepada" id="kepada" value="{{$bulletins->kepada}}" class="form-control"></br>
        <label>Tajuk</label></br>
        <input type="text" name="tajuk" id="tajuk" value="{{$bulletins->tajuk}}" class="form-control"></br>
        <label>Tarikh</label></br>
        <input type="date" name="tarikh" id="tarikh" value="{{$bulletins->tarikh}}" class="form-control"></br>
        <label>Kepentingan</label></br>
        <input type="text" name="kepentingan" id="kepentingan" value="{{$bulletins->kepentingan}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$bulletins->status}}" class="form-control"></br>
        <label>Isi</label></br>
        <input type="text" name="isi" id="isi" value="{{$bulletins->isi}}" class="form-control"></br>
        <input type="submit" value="Kemaskini" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop