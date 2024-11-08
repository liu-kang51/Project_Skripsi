<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan;

class formPermintaan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permintaan.formPermintaan');
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
        // Remove non-numeric characters to ensure harga and jumlah are numeric
        $harga = (int) preg_replace('/\D/', '', $request->harga); 
        $jumlah = (int) $request->jumlah;

        // Calculate the total price
        $totalHarga = $harga * $jumlah;

        // Save data into the Permintaan model
        $permintaan = new Permintaan();
        $permintaan->nama_pengajuan = $request->nama_pengajuan;
        $permintaan->nama_barang = $request->nama_barang;
        $permintaan->nama_vendor = $request->nama_vendor;
        $permintaan->jenis = $request->jenis;
        $permintaan->harga = $harga; // Save unit price as an integer
        $permintaan->jumlah = $jumlah; // Save quantity as an integer
        $permintaan->total_harga = $totalHarga; // Save total price as an integer
        $permintaan->deskripsi = $request->deskripsi;
        $permintaan->save();

            return redirect()->route('reportPermintaan.index');

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
