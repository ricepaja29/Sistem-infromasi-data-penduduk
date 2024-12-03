<?php

namespace App\Http\Controllers;

use App\Models\data_penduduk;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function index()
    {
        $data_penduduk = data_penduduk::all();
        return view('home', [
            'data_penduduk' => $data_penduduk,
            'title' => 'Data Penduduk',
        ]);
    }

    public function destroy($id)
    {
        // Ambil model berdasarkan ID
        $penduduk = data_penduduk::findOrFail($id);

        // Hapus model
        $penduduk->delete();

        return redirect()->route('home')->with('success', 'Data berhasil dihapus.');
    }

    public function create()
    {
        return view('add-data-penduduk', [
            'title' => 'Tambah Data',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255', // Ganti 'posts' dengan 'data_penduduks'
            'alamat' => 'required',
            'agama' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'tahun_lahir' => 'required|date', // Pastikan tipe data tahun_lahir sesuai dengan tipe data di tabel
        ]);
        data_penduduk::create($validated);
        notify()->success('Data berhasil ditambahkan');
        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penduduk = data_penduduk::findOrFail($id);
        return view('edit-data-penduduk', [
            'title' => 'Edit Data',
            'penduduk' => $penduduk,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'agama' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'tahun_lahir' => 'required|date', // Pastikan tipe data tahun_lahir sesuai dengan tipe data di tabel
        ]);
        $penduduk = data_penduduk::findOrFail($id);
        $penduduk->update($validated);
        return redirect()->route('home')->with('success', 'Data berhasil diupdate.');
    }
}
