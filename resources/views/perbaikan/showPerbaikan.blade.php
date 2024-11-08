@extends('layout.app')

@section('content')
<x-sidebar></x-sidebar>
<x-header></x-header>

<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <header class="card-header noborder flex justify-between items-center">
                    <h4 class="card-title">Detail Permintaan</h4>
                    <!-- Print Button -->
                    <button onclick="window.print()" class="btn btn-secondary">
                        <iconify-icon icon="heroicons:printer" class="mr-2"></iconify-icon> Print
                    </button>
                </header>
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Display fields with their values in a structured format -->
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Nama Barang:</label>
                            <span class="text-slate-900">{{ $perbaikans->nama_barang }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Nama Pengajuan:</label>
                            <span class="text-slate-900">{{ $perbaikans->nama_pengajuan }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Kode Barang Plat</label>
                            <span class="text-slate-900">{{ $perbaikans->kode_barang_plat }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Jumlah:</label>
                            <span class="text-slate-900">{{ $perbaikans->jumlah }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Jenis:</label>
                            <span class="text-slate-900">{{ $perbaikans->jenis }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Total Harga:</label>
                            <span class="text-slate-900">Rp {{ number_format($perbaikans->total_harga, 0, ',', '.') }}</span>
                        </div>
                        <div class="mb-4 ml-6">
                            <label class="font-medium text-slate-700">Deskripsi:</label>
                            <span class="text-slate-900">{{ $perbaikans->deskripsi }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-10 ml-5">
                    <a href="" class="btn btn-primary">Kembali</a>
                    <a href="" class="btn btn-primary">setuju</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Print Styles -->
<style>
    /* Hide sidebar and header when printing */
    @media print {
        .sidebar, .header, .btn, .card-footer {
            display: none;
        }
        /* Full-width content for print */
        .content-wrapper {
            margin: 0;
            padding: 20px; /* Add padding for better spacing */
            width: 100%;
            font-size: 12pt; /* Increase font size for readability */
            line-height: 1.5; /* Increase line height for better spacing */
        }
        /* Specific styles for printed content */
        .card-title {
            font-size: 18pt; /* Make title larger for emphasis */
            text-align: center; /* Center align the title */
        }
        label {
            font-weight: bold; /* Bold labels for clarity */
        }
    }
</style>

@endsection
