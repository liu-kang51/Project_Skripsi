@extends('layout.app')
@section('content')
<x-sidebar> </x-sidebar>
<x-header> </x-header>

<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
  <div class="page-content">
    <div class="transition-all duration-150 container-fluid" id="page_layout">
      <div id="content_layout">
        <div class="card">
          <header class="card-header noborder">
            <h4 class="card-title">Tabel Permintaan</h4>
          </header>
          <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6 dashcode-data-table">
              <span class="col-span-8 hidden"></span>
              <span class="col-span-4 hidden"></span>
              <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                    <thead class="bg-slate-200 dark:bg-slate-700">
                      <tr>
                        <th scope="col" class="table-th">No</th>
                        <th scope="col" class="table-th">Nama Pengajuan</th>
                        <th scope="col" class="table-th">Nama Barang</th>
                        <th scope="col" class="table-th">Nama Vendor</th>
                        <th scope="col" class="table-th">Jumlah</th>
                        <th scope="col" class="table-th">Jenis</th>
                        <th scope="col" class="table-th">Total Harga</th>
                        <th scope="col" class="table-th">Action</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                      @foreach($permintaans as $permintaan)
                      <tr>
                        <th scope="table-td">{{ $loop->iteration }}</th>
                        <td class="table-td">{{ $permintaan->nama_pengajuan }}</td>
                        <td class="table-td">{{ $permintaan->nama_barang }}</td>
                        <td class="table-td">{{ $permintaan->nama_vendor }}</td>
                        <td class="table-td">{{ $permintaan->jumlah }}</td>
                        <td class="table-td">{{ $permintaan->jenis }}</td>
                        <td class="table-td">{{ number_format($permintaan->total_harga, 0, ',', '.') }}</td>
                        <td class="table-td">
                          <div class="flex space-x-3">
                            <a href="{{ route('reportPermintaan.show', $permintaan->id) }}" class="action-btn">
                              <iconify-icon icon="heroicons:eye"></iconify-icon>
                            </a>
                            <a href="{{ route('reportPermintaan.edit', $permintaan->id) }}" class="action-btn">
                              <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                            </a>
                            <form id="form-{{ $permintaan->id }}"action="{{ route('reportPermintaan.destroy', $permintaan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="action-btn">
                                  <iconify-icon icon="heroicons:trash"></iconify-icon>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
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
