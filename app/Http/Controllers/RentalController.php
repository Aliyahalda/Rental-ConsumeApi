<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class RentalController extends Controller
{

    public function dashboard()
    {
        $data = (new BaseApi)->index('/api/rental');
        $rental = $data->json();

        return view('rentals.dashboard')->with('rental', $rental['data']);
    }

    public function index()
    {
        $data = (new BaseApi)->index('/api/rental');
        $rental = $data->json();

        return view('rentals.rental')->with('rental', $rental['data']);
    }

    public function create()
    {
        return view('rentals.create');
    }

    public function store(Request $request)
    {
        $upload = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'type' => $request->type,
            'waktu_jam' => $request->waktu_jam,
            'jam_mulai' => $request->jam_mulai,
            'supir' => $request->supir,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/rental/store', $upload);
        
        return redirect('rental')->with('success', 'Data Berhasil ditambahkan!');
    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/rental/show', $id);
        $rentals = $data->json();

        return view('rentals.show')->with('rentals', $rentals['data']);
    }

    public function selesai($id)
    {
        $data = (new BaseApi)->detail('/api/rental/show', $id);
        $rentals = $data->json();

        return view('rentals.selesai')->with('rentals', $rentals['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/rental/show', $id);
        $rentals = $data->json();

        return view('rentals.edit')->with('rentals', $rentals['data']);
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'jam_selesai' => $request->jam_selesai,
            'tempat_tujuan' => $request->tempat_tujuan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/rental/update', $id, $payload);

        return redirect('rental')->with('success', 'Data Berhasil diUpdate!');
    }

    public function destroy($id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/rental/delete', $id);
    
        return redirect('/rental')->with('success', 'Berhasil Menghapus Data');
    }

    public function trashed()
    {
        $data = (new BaseApi)->onlyTrashed('/api/rental/trash/all');
        $rentals = $data->json();

        return view('rentals.trashed')->with('rentals', $rentals['data']);
    }

    public function restore($id)
    {
        $data = (new BaseApi)->restore('/api/rental/restore', $id);
        $detail = $data->json();

        return redirect()->back()->with('success', 'Data dikembalikan!');
    }

    public function deleted($id)
    {
        $data = (new BaseApi)->forceDelete('/api/rental/permanentDelete', $id);
        $detail = $data->json();

        return redirect()->back()->with('success', 'Data dihapus secara permanent!');
    }
}
