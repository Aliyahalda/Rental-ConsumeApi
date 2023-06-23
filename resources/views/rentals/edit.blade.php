@extends('layouts.main')
@section('title', 'Update')

@section('content')
    
    <h3>Edit Data {{$rentals['nama']}}</h3>

    <div class="card mt-3">
        <div class="card-header">Update Data {{$rentals['nama']}}</div>
        <div class="card-body">
            <form action="/rental/update/{{$rentals['id']}}" method="post">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="jam_selesai" class="form-label">Jam Selesai</label>
                    <input type="time" class="form-control" name="jam_selesai">
                </div>

                <div class="mb-3">
                    <label for="tempat_tujuan" class="form-label">Tempat Tujuan</label>
                    <input type="text" class="form-control" name="tempat_tujuan">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/rental" class="btn btn-warning ms-2">Kembali</a>
                </div>
            </form>

        </div>
    </div>

@endsection