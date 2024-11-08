@extends('layout.app')
@section('content')
<x-sidebar> </x-sidebar> <!-- End: Sidebar -->
<div class="flex flex-col justify-between min-h-screen">
    <div>
        <x-headers></x-headers>
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div class="transition-all duration-150 container-fluid" id="page_layout">
                    <div id="content_layout">
                        <div>
                            <div class="flex justify-between flex-wrap items-center mb-6">
                                <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 flex space-x-3 rtl:space-x-reverse mb-4 sm:mb-0"> <span><a href="/"> Dashboard </a></span> > Form Perbaikan</h4>
                            </div>
                            @if($errors->any())
                            @foreach ( $errors->all() as $error )
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-md">
                                <!-- Title -->
                                <h2 class="text-2xl font-bold mb-6 text-center">Form Perbaikan Data Inventaris</h2>

                                <!-- Form -->
                                <form action="{{ route('formPerbaikan.store') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                    <!-- Nama Barang -->
                                    <div class="mb-4">
                                        <label for="nama_barang" class="block text-slate-800 font-medium mb-2">Nama Barang</label>
                                        <input type="text" id="nama_barang" name="nama_barang" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan nama barang">
                                    </div>

                                    <!-- Nama Pengajuan -->
                                    <div class="mb-4">
                                        <label for="nama_pengajuan" class="block text-slate-800 font-medium mb-2">Nama Pengajuan</label>
                                        <input type="text" id="nama_pengajuan" name="nama_pengajuan" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan nama pengajuan">
                                    </div>

                                    <!-- Kode Barang -->
                                    <div class="mb-4">
                                        <label for="kode_barang_plat" class="block text-slate-800 font-medium mb-2">Kode Barang / No Plat</label>
                                        <input type="text" id="kode_barang_plat" name="kode_barang_plat" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan kode barang / no plat">
                                    </div>

                                    <!-- Harga -->
                                    <div class="mb-4">
                                        <label for="harga" class="block text-slate-800 font-medium mb-2">Harga</label>
                                        <input type="text" id="harga" name="harga" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan harga" oninput="formatHarga(this)">
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="mb-4">
                                        <label for="tanggal" class="block text-slate-800 font-medium mb-2">Tanggal</label>
                                        <input type="text" id="tanggal" name="tanggal" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan tanggal">
                                    </div>

                                    <!-- Deskripsi -->
                                    <div class="mb-4">
                                        <label for="keterangan_kerusakan" class="block text-slate-800 font-medium mb-2">Jenis Kerusakan</label>
                                        <textarea id="keterangan_kerusakan" name="keterangan_kerusakan" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan jenis kerusakan"></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white font-medium rounded hover:bg-blue-600">Simpan Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
function formatHarga(input) {
    // Menghilangkan karakter non-digit
    let value = input.value.replace(/\D/g, '');
    // Mengformat angka menjadi format ribuan
    value = new Intl.NumberFormat('id-ID').format(value);
    input.value = value;
}
</script>
@endsection
