@extends('layouts.main')
@section('title', 'rental')

@section('content')
    

<h3>Rental</h3>

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
                    <a href="/rental/create" class="badge bg-warning" style="text-decoration: none"><i class="bi bi-plus-circle-fill"> Tambah Data</i></a>
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
                        <th>selesai</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rental as $item)

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
                            <a href="/rental/selesai/{{$item['id']}}" class="badge bg-success" style="text-decoration: none"> Detail</a>
                        </td>
                        <td>
                            <a href="/rental/show/{{$item['id']}}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            <a href="/rental/edit/{{$item['id']}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <form action="/rental/delete/{{$item['id']}}" method="post">
                                @csrf    
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-x-circle-fill"></i></button>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection