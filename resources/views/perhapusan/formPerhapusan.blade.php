@extends('layout.app')
@section('content')
  <!-- BEGIN: Sidebar -->
  <x-sidebar> </x-sidebar>
      <!-- End: Sidebar -->
      <div class="flex flex-col justify-between min-h-screen">
        <div>
         <x-headers></x-headers>
          <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
              <div class="transition-all duration-150 container-fluid" id="page_layout">
                <div id="content_layout">
  
                  <div>
                    <div class="flex justify-between flex-wrap items-center mb-6">
                      <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 flex space-x-3 rtl:space-x-reverse mb-4 sm:mb-0"> <span><a href="/"> Dashboard</a></span> > From Perhapusan</h4>
                  </div>
                  <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-md">
                    <!-- Title -->
                    <h2 class="text-2xl font-bold mb-6 text-center">Form Perhapusan Data Inventaris</h2>
                
                    <!-- Form -->
                    <form action="#" method="POST">
                        <!-- Nama Barang -->
                        <div class="mb-4">
                            <label for="nama_barang" class="block text-slate-800 font-medium mb-2">Nama Barang</label>
                            <input type="text" id="nama_barang" name="nama_barang" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan nama barang">
                        </div>
                
                        <!-- Kode Barang -->
                        <div class="mb-4">
                            <label for="kode_barang" class="block text-slate-800 font-medium mb-2">Kode Barang</label>
                            <input type="text" id="kode_barang" name="kode_barang" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan kode barang">
                        </div>
                
                        <!-- Kategori -->
                        <div class="mb-4">
                            <label for="kategori" class="block text-slate-800 font-medium mb-2">Kategori</label>
                            <select id="kategori" name="kategori" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                                <option value="">Pilih kategori</option>
                                <option value="elektronik">Elektronik</option>
                                <option value="furniture">Furniture</option>
                                <option value="alat_tulis">Alat Tulis</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                
                        <!-- Jumlah -->
                        <div class="mb-4">
                            <label for="jumlah" class="block text-slate-800 font-medium mb-2">Jumlah</label>
                            <input type="number" id="jumlah" name="jumlah" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan jumlah">
                        </div>
                
                        <!-- Harga per Unit -->
                        <div class="mb-4">
                            <label for="harga" class="block text-slate-800 font-medium mb-2">Harga per Unit (Rp)</label>
                            <input type="number" id="harga" name="harga" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan harga per unit">
                        </div>
                
                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-slate-800 font-medium mb-2">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Masukkan deskripsi barang"></textarea>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
      backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
          <a href="chat.html">
            <div>
              <span class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
            text-slate-900 ">
          <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
          <span class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
              justify-center rounded-full text-white z-[99]">
            10
          </span>
              </span>
              <span class="block text-[11px] text-slate-600 dark:text-slate-300">
          Messages
        </span>
            </div>
          </a>
          <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
        h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
            <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
              <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
            </div>
          </a>
          <a href="#">
            <div>
              <span class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
            text-slate-900">
          <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
          <span class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
              justify-center rounded-full text-white z-[99]">
            2
          </span>
              </span>
              <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
          Notifications
        </span>
            </div>
          </a>
        </div>
      </div>
@endsection    