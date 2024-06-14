@extends('layout')
@section('title','Login')
@include('include.header')
@section('content')
    <div class="container">
        <div style="text-align:center"><br>
            <h6>Ingin sertai kami di KAFA Al-Fawwaz?</h6>
            <button type="button" class="btn btn-primary" onclick="document.location='registration'" 
            style="background-color:#e98063" style=width:300px>Daftar Anak Anda Sekarang!</button>
            <br><br><h5>ATAU</h5><br>
            <h6>Sudah mempunyai akaun?</h6><br>
            <h1 style="color:#e98063">Log Masuk</h1>
        </div>
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style=width:300px>
            @csrf
            <div class="mb-3" style="text-align:center">
                <input type="text" class="form-control" name="id" placeholder="No. ID"><br>
                <input type="password" class="form-control" name="password" placeholder="Kata Laluan"><br>
                <select id="role" name="role" class="form-control">
                    <option selected>Pilih peranan</option>
                    <option value="parent">Ibu Bapa/Penjaga</option>
                    <option value="teacher">Guru</option>
                    <option value="KAFA admin">Admin KAFA</option>
                    <option value="MUIP admin">Admin MUIP</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:#e98063" 
            style="text-align:center" style="width:300px">Log Masuk</button>
        </form>
    </div>
@endsection
