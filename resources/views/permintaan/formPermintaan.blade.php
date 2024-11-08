@extends('layout.app')
@section('content')

  <!-- Sidebar -->
  <x-sidebar></x-sidebar>

  <div class="flex flex-col justify-between min-h-screen">
    <div>
      <!-- Header -->
      <x-headers></x-headers>

      <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
        <div class="page-content">
          <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">
              
              <div>
                <!-- Breadcrumb -->
                <div class="flex justify-between flex-wrap items-center mb-6">
                  <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 flex space-x-3 rtl:space-x-reverse mb-4 sm:mb-0">
                    <span><a href="/">Dashboard</a></span> > Form Permintaan
                  </h4>
                </div>
                @if($errors->any())
                @foreach ( $errors->all() as $error )
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                <!-- Form Card -->
                <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-md">
                  <h2 class="text-2xl font-bold mb-6 text-center">Form Permintaan Data Inventaris</h2>

                  <!-- Form -->
                  <form action="{{ route('formPermintaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Nama Pengajuan -->
                    <div class="mb-4">
                      <label for="nama_pengajuan" class="block text-slate-800 font-medium mb-2">Nama Pengajuan</label>
                      <input type="text" id="nama_pengajuan" name="nama_pengajuan" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan nama barang" required>
                    </div>

                    <!-- Nama Barang -->
                    <div class="mb-4">
                      <label for="nama_barang" class="block text-slate-800 font-medium mb-2">Nama Barang</label>
                      <input type="text" id="nama_barang" name="nama_barang" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan nama barang" required >
                    </div>

                    <!-- Nama Vendor -->
                    <div class="mb-4">
                      <label for="nama_vendor" class="block text-slate-800 font-medium mb-2">Nama Vendor</label>
                      <input type="text" id="nama_vendor" name="nama_vendor" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan Nama Vendor" required>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                      <label for="jenis" class="block text-slate-800 font-medium mb-2">Kategori</label>
                      <select id="jenis" name="jenis" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                        <option value="">Pilih kategori</option>
                        <option value="elektronik">Elektronik</option>
                        <option value="furniture">Furniture</option>
                        <option value="alat_tulis">Alat Tulis</option>
                        <option value="lainnya">Lainnya</option>
                      </select>
                    </div>

                    <!-- Jumlah -->
                   <!-- Harga per Unit -->
<div class="mb-4">
  <label for="harga" class="block text-slate-800 font-medium mb-2">Harga per Unit (Rp)</label>
  <input type="text" id="harga" name="harga" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan harga per unit" required>
</div>

<!-- Jumlah -->
<div class="mb-4">
  <label for="jumlah" class="block text-slate-800 font-medium mb-2">Jumlah</label>
  <input type="number" id="jumlah" name="jumlah" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan jumlah" required>
</div>

<!-- Total Harga -->
<!-- Total Harga (Formatted) -->
<div class="mb-4">
  <label for="total_harga" class="block text-slate-800 font-medium mb-2">Total Harga</label>
  <input type="text" id="total_harga" name="total_harga" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Total Harga" readonly>
</div>

<!-- Total Harga (Unformatted, Hidden) -->
<input type="hidden" id="total_harga_unformatted" name="total_harga_unformatted">

<script>
  // Function to format number as currency
  function formatCurrency(value) {
      return new Intl.NumberFormat('id-ID').format(value);
  }

  // Function to calculate total
  function calculateTotal() {
      const harga = parseInt(document.getElementById('harga').value.replace(/\D/g, '')) || 0;
      const jumlah = parseInt(document.getElementById('jumlah').value) || 0;
      const total = harga * jumlah;

      // Set the formatted total for display
      document.getElementById('total_harga').value = formatCurrency(total);

      // Set the unformatted total for database saving
      document.getElementById('total_harga_unformatted').value = total;
  }

  // Event listeners for input fields
  document.getElementById('harga').addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, ''); // Remove non-digit characters
      e.target.value = formatCurrency(value); // Update displayed value
      calculateTotal(); // Update total
  });

  document.getElementById('jumlah').addEventListener('input', calculateTotal);
</script>



                    <!-- Deskripsi -->
                    <div class="mb-4">
                      <label for="deskripsi" class="block text-slate-800 font-medium mb-2">Deskripsi</label>
                      <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan deskripsi barang" required></textarea>
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

@endsection
