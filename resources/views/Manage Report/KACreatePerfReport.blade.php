@extends('layout')
@section('title','Cipta Laporan Pencapaian')
@section('content')
<div class="d-flex">
@include('include.KAmenu')
    <div class="container" class="flex-grow-1 p-3">
        <div style="text-align:left"><br>
            <h2 style="color:#2d532d">Borang Laporan Aktiviti</h2><br>
        </div>
        <form>
            <table class="table table-borderless">
                <tr>
                    <td scope="col">Pilih Sesi:</td>
                    <td scope="col" colspan="5">
                    <select id="session" name="session" class="form-control">
                        <option selected>Pilih sesi</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                    </td>
                    <td scope="col">Pilih Peperiksaan:</td>
                    <td scope="col" colspan="5">
                    <select id="exam_id" name="exam_id" class="form-control">
                        <option selected>Pilih peperiksaan</option>
                        <option value="1">Peperiksaan Pertengahan Tahun</option>
                        <option value="2">Peperiksaan Akhir Tahun</option>
                        <option value="3">Percubaan UPKK</option>
                        <option value="4">UPKK</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <table class="table table-bordered" 
                    style="text-alignment:center; width:900px; 
                    margin-left: auto; margin-right: auto; border:black">
                        <tr style="text-align:center; background-color:grey">
                            <th rowspan=2>Nama Kertas</th>
                            <th rowspan=2>Kod Kertas</th>
                            <th colspan=6>Bilangan Pencapaian Mengikut Gred</th>
                        </tr>
                        <tr style="text-alignment:center">
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>E</th>
                            <th>F</th>
                        </tr>
                        
                        @foreach($paper as $index => $row)
                        <tr>
                            <td>{{ $row->Paper_Name }}</td>
                            <td>{{ $row->id }}</td>
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_A_"{{ $row->id }}>
                            </td>
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_B">
                            </td>                            
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_C">
                            </td>                            
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_D">
                            </td>                            
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_E">
                            </td>
                            <td style="width:80px">
                                <input type="text" class="form-control" name="total_F">
                            </td>                        
                        </tr>
                        @endforeach
                    </table>
                </tr>
                            
                <tr>
                <td scope="col">Ulasan:</td><br>
                <td scope="col" >
                    <textarea class="form-control" name="summary"></textarea>
                </td>
                </tr>
            </table><br>

            <div style="text-align:center">
                <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
                style="background-color:#2d532d" style=width:300px>Kembali</button>
                <button type="button" class="btn btn-primary" onclick="document.location='KAReport'" 
                style="background-color:#2d532d" style=width:300px>Simpan</button>
                <button type="submit" class="btn btn-primary" style="background-color:#2d532d">Hantar</button>
            </div>
        </form>
    </div>
@endsection

