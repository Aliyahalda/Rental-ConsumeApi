@extends('layouts.main')
@section('title', 'Dashboard')


@section('content')
<h3>Riwayat Perjalanan {{$rentals['nama']}}</h3>

<div class="card mt-3">
    <div class="card-header">{{$rentals['nama']}}</div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <td>jam Selesai</td>
                    <td>:</td>
                    <td>{{$rentals['jam_selesai']}}</td>
                </tr>
                <tr>
                    <td>Tempat Tujuan</td>
                    <td>:</td>
                    <td>{{$rentals['tempat_tujuan']}}</td>
                </tr> 
                <tr>
                    <td>Riwayat Perjalanan</td>
                    <td>:</td>
                    <td>{{$rentals['riwayat_perjalanan']}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>{{$rentals['status']}}</td>
                </tr>
            </tbody>
        </table>
        <div class="mb-3">
            <a href="/rental" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>



@endsection