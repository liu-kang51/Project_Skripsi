<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class reportPermintaan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data permrntaan
        $permintaans = Permintaan::all();
        return view('permintaan.reportPermintaan', compact('permintaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
   
            $permintaans = Permintaan::findOrFail($id);
            return view('permintaan.showPermintaan', compact('permintaans'));
     
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permintaans = Permintaan::findOrFail($id);
        return view('permintaan.editPermintaan', compact('permintaans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $permintaan = Permintaan::findOrFail($id);
        $permintaans = $permintaan;

        // Hapus karakter non-numerik dari harga untuk memastikan harga dan jumlah adalah numerik
        $harga = (int) preg_replace('/\D/', '', $request->harga);
        $jumlah = (int) $request->jumlah;

        // Hitung total harga
        $totalHarga = $harga * $jumlah;

        // Update data pada model Permintaan
        $permintaan->nama_pengajuan = $request->nama_pengajuan;
        $permintaan->nama_barang = $request->nama_barang;
        $permintaan->nama_vendor = $request->nama_vendor;
        $permintaan->jenis = $request->jenis;
        $permintaan->harga = $harga;
        $permintaan->jumlah = $jumlah;
        $permintaan->total_harga = $totalHarga;
        $permintaan->deskripsi = $request->deskripsi;
        $permintaan->save();
        // return redirect()->back();

        return redirect()->route('reportPermintaan.index', compact('permintaans'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permintaan = Permintaan::findOrFail($id); 
        $permintaan->delete();
        $permintaans = $permintaan;
        return redirect()->route('reportPermintaan.index', compact('permintaans'));
    }

}
