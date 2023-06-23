@extends('layouts.main')
@section('title', 'Create')

@section('content')
    
    <h3>Create Data</h3>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card my-5 w-75">
            <div class="card-header">Form Tambah Data</div>
            <div class="card-body">
                <form action="/rental/store" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="type" class="form-label">type</label>
                            <input type="text" name="type" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="waktu_jam" class="form-label">waktu_jam</label>
                            <input type="number" name="waktu_jam" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="jam_mulai" class="form-label">jam_mulai</label>
                            <input type="time" name="jam_mulai" class="form-control">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="supir" class="form-label">supir</label>
                            <input type="text" name="supir" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
@endsection