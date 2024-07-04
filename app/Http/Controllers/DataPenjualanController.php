<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class DataPenjualanController extends Controller
{
    public function index()
    {
        $data = Penjualan::all();
        return view('index', compact('data'));
    }

    public function getData()
    {
        $penjualans = Penjualan::all();
        return response()->json(['data' => $penjualans]);
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_produk' => 'required|string',
            'deskripsi' => 'nullable|string',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        // Simpan data baru
        $penjualan = new Penjualan();
        $penjualan->nama_produk = $request->nama_produk;
        $penjualan->deskripsi = $request->deskripsi;
        $penjualan->stok = $request->stok;
        $penjualan->harga = $request->harga;
        $penjualan->save();

        return response()->json([
            'message' => 'Data penjualan berhasil ditambahkan',
            'penjualan' => $penjualan,
        ]);
    }

    public function show($id)
    {
        $penjualan = Penjualan::findOrFail($id);

        return response()->json($penjualan);
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return response()->json($penjualan);
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::findOrFail($id);

        // Validasi request jika diperlukan
        $request->validate([
            'nama_produk' => 'required|string',
            'deskripsi' => 'nullable|string',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        // Simpan perubahan
        $penjualan->update($request->all());

        return response()->json([
            'message' => 'Data penjualan berhasil diperbarui',
            'penjualan' => $penjualan,
        ]);
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return response()->json(['message' => 'Data penjualan berhasil dihapus']);
    }
}
