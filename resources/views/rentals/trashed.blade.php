@extends('layouts.main')
@section('title', 'Trashed')

@section('content')
    <h3>Trashed</h3>

    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif

<div class="card mt-4">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">Rental Mobil</div>
            <div class="col-lg-6 d-flex justify-content-end">
                <a href="/rental" class="badge bg-warning" style="text-decoration: none"><i class="bi bi-skip-backward-circle"> Rental</i></a>
            </div>
        </div>
        
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Type</th>
                    <th>jam Mulai</th>
                    <th>Waktu Jam</th>
                    <th>Total Harga</th>
                    <th>Supir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rentals as $item)

                <tr>
                    <td class="text-center"> {{$loop->iteration}}</td>
                    <td class="text-center">{{$item['nama']}}</td>
                    <td class="text-center">{{$item['alamat']}}</td>
                    <td class="text-center">{{$item['type']}}</td>
                    <td class="text-center">{{$item['jam_mulai']}}</td>
                    <td class="text-center">{{$item['waktu_jam']}}  jam</td>
                    <td class="text-center">{{$item['total_harga']}}</td>
                    <td class="text-center">{{$item['supir']}}</td>
                    <td>
                        <a href="/rental/restore/{{$item['id']}}" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i></a>
                        <a href="/rental/permanentDeletes/{{$item['id']}}" class="btn btn-danger"><i class="bi bi-trash2-fill"></i></a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>
@endsection