@extends('layout')
@section('title','Homepage')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:center; margin-top:250px"><br>
            <h1 style="color:#2d532d">Welcome to the KAFA Management System.</h1>
        </div>
    </div>
@endsection
