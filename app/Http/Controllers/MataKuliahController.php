<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
        ]);

        // Simpan data ke database
        Matakuliah::create([
            'nama_mk' => $request->input('nama_mk'), // Perbaikan di sini
            'sks' => $request->input('sks'),       // Perbaikan di sini
        ]);

        // Redirect ke halaman daftar mata kuliah
        return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }

    public function edit($id){
        $mk = Matakuliah::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);
        $mk = Matakuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah berhasil diupdate.');
    }

    public function destroy($id){
       $mk = Matakuliah::findOrFail($id);
       $mk->delete();

       return redirect()->to('/matakuliah')->with('success', 'Mata Kuliah berhasil dihapus!');
    }

}