@extends('layout')
@section('title','Registration')
@include('include.header')
@section('content')
    <div class="container">
        <div style="text-align:center"><br>
            <h1 style="color:#e98063">Daftar Murid Baru</h1><br>
        </div>
        <form action="{{route('registration.post')}}" method="POST" 
        style="width:800px" style="text-align:left" style="text-align:left">
            @csrf
            <h6 style="color:#e98063" style="font-weight: bold">MAKLUMAT PELAJAR</h6>
            <table style="font-weight: bold" style="padding: 15px" class="table table-borderless">
                <tr>
                    <td>GAMBAR</td>
                    <td colspan="3">
                        <input type="file" id="std_image" name="std_image"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>NAMA PENUH</td>
                    <td colspan="3"><input type="text" class="form-control" name="std_name"></td>
                </tr>
                <tr>
                    <td>NO. MYKID</td>
                    <td colspan="3"><input type="text" class="form-control" name="mykid"></td>
                </tr>
                <tr>
                    <td>NO. SURAT BERANAK</td>
                    <td colspan="3"><input type="text" class="form-control" name="birthcert"></td>
                </tr>
                <tr>
                    <td>TARIKH LAHIR</td>
                    <td><input type="date" class="form-control" name="std_bdate"></td>
                    <td>UMUR</td>
                    <td><input type="text" class="form-control" name="std_age"></td>
                </tr>
                <tr>
                    <td>ALAMAT RUMAH</td>
                    <td colspan="3"><input type="text" class="form-control" name="std_address"></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td colspan="3"><input type="text" class="form-control" name="std_class"></td>
                </tr>
            </table><br><br>

            <h6 style="color:#e98063" style="font-weight: bold">MAKLUMAT PENDAFTAR/WARIS</h6>
            <table style="font-weight: bold" style="padding: 15px" class="table table-borderless">
                <tr>
                    <td>NAMA PENUH</td>
                    <td colspan="3"><input type="text" class="form-control" name="p_name"></td>
                </tr>
                <tr>
                    <td>NO. MYKAD</td>
                    <td colspan="3"><input type="text" class="form-control" name="mykad"></td>
                </tr>
                <tr>
                    <td>NO. TELEFON</td>
                    <td colspan="3"><input type="text" class="form-control" name="phonenum"></td>
                </tr>
                <tr>
                    <td>ALAMAT E-MEL</td>
                    <td colspan="3"><input type="email" class="form-control" name="email"></td>
                </tr>
                <tr>
                    <td>HUBUNGAN DENGAN PELAJAR</td>
                    <td colspan="3">
                        <select id="relationship" name="relationship" class="form-control">
                            <option selected>Pilih hubungan</option>
                            <option value="mother">Ibu Kandung</option>
                            <option value="father">Bapa Kandung</option>
                            <option value="stepfam">Ibu/Bapa Tiri</option>
                            <option value="adopter">Ibu/Bapa Angkat</option>
                            <option value="sibling">Adik Beradik</option>
                            <option value="grandparent">Datuk/Nenek</option>
                            <option value="caregiver">Penjaga</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>TARIKH LAHIR</td>
                    <td><input type="date" class="form-control" name="p_bdate"></td>
                    <td>UMUR</td>
                    <td><input type="text" class="form-control" name="p_age"></td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td colspan="3"><input type="text" class="form-control" name="occupation"></td>
                </tr>
                <tr>
                    <td>ALAMAT RUMAH</td>
                    <td colspan="3"><input type="text" class="form-control" name="p_address"></td>
                </tr>
            </table><br>
            <button type="button" class="btn btn-primary" onclick="document.location='login'" 
            style="background-color:#e98063" style=width:300px>Kembali</button>
            <button type="submit" class="btn btn-primary" style="background-color:#e98063">Hantar</button>
        </form>
    </div>
@endsection
