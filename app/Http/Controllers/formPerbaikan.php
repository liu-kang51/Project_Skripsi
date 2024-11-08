<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;

class formPerbaikan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perbaikan.formPerbaikan');
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
        $harga = (int) preg_replace('/\D/', '', $request->harga); 

        $perbaikan = new perbaikan();
        $perbaikan->nama_barang = $request->nama_barang;
        $perbaikan->nama_pengajuan = $request->nama_pengajuan;
        $perbaikan->kode_barang_plat = $request->kode_barang_plat;
        $perbaikan->tanggal = $request->tanggal;
        $perbaikan->harga = $harga;
        $perbaikan->keterangan_kerusakan = $request->keterangan_kerusakan;
        $perbaikan->save();
        return redirect()->route('reportPerbaikan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
