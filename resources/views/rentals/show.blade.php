@extends('layouts.main')
@section('title', 'Details')

@section('content')
    
<h3>Detail Data  {{$rentals['nama']}}</h3>

<div class="card mt-4" >
    <div class="card-header">
        Data {{$rentals['nama']}}
    </div>
    <div class="card body">
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$rentals['nama']}}</td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$rentals['alamat']}}</td>
                </tr>

                <tr>
                    <td>Type</td>
                    <td>:</td>
                    <td>{{$rentals['type']}}</td>
                </tr>

                <tr>
                    <td>Waktu Jam</td>
                    <td>:</td>
                    <td>{{$rentals['waktu_jam']}} Jam</td>
                </tr>

                <tr>
                    <td>Jam Mulai</td>
                    <td>:</td>
                    <td>{{$rentals['jam_mulai']}}</td>
                </tr>

                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>{{$rentals['total_harga']}}</td>
                </tr>


                <tr>
                    <td>Supir</td>
                    <td>:</td>
                    <td>{{$rentals['supir']}}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>{{$rentals['status']}}</td>
                </tr>
            </tbody>
        </table>

        <div class="mb-3 ms-2 ">
            <a href="/rental" class="btn btn-success"> Kembali</a>
        </div>
    </div>
</div>

    
@endsection