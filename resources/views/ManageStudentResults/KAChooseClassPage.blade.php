@extends('layout')
@section('content')

<style>
.card {
        margin: 200px;
    }
</style>

<div class="card">
                    <div class="card-header">
            <h2>Semak Keputusan Pelajar</h2>
</div>
<div class="card-body">
            <p>Sila pilih kelas pelajar</p>
            <select>
                <option value="">-Sila pilih-</option>
                <!-- Add more options as needed -->
            </select>
            <br>
            <a href="{{ route('ManageStudentResults.index') }}" title="Continue">
            <button class="btn btn-info btn-sm">
                <i class="fa fa-eye" aria-hidden="true"></i> Teruskan
            </button>
        </a>
           
            </div>      


