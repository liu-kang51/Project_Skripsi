<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;

class reportPerbaikan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perbaikans = Perbaikan::all();
        return view('perbaikan.reportPerbaikan',compact('perbaikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perbaikans = Perbaikan::findOrFail($id);
        return view('perbaikan.showPerbaikan', compact('perbaikans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perbaikans = Perbaikan::findOrFail($id);
        return view('perbaikan.editPerbaikan', compact('perbaikans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $perbaikan = Perbaikan::findOrFail($id);
        $perbaikans = $perbaikan;

        // Hapus karakter non-numerik dari harga untuk memastikan harga dan jumlah adalah numerik
        $harga = (int) preg_replace('/\D/', '', $request->harga);

        // Update data pada model Permintaan
        $perbaikan->nama_barang = $request->nama_barang;
        $perbaikan->nama_pengajuan = $request->nama_pengajuan;
        $perbaikan->kode_barang_plat = $request->kode_barang_plat;
        $perbaikan->harga = $harga;
        $perbaikan->tanggal = $request->tanggal;
        $perbaikan->keterangan_kerusakan = $request->keterangan_kerusakan;
        $perbaikan->save();
        // return redirect()->back();

        return redirect()->route('reportPerbaikan.index', compact('perbaikans'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perbaikan = Perbaikan::findOrFail($id); 
        $perbaikan->delete();
        $perbaikans = $perbaikan;
        return redirect()->route('reportPerbaikan.index', compact('perbaikans'));
    }
}
