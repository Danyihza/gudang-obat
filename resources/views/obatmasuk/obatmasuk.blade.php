@extends('templates.master')

@section('title', 'Halaman Obat Masuk')

@section('content')
<div class="content">
    @if (session('success'))
        <div class="alert alert-success show flex items-center mt-6" role="alert"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> Data Obat Berhasil Ditambahkan Ke List. <a class="font-bold" href="#cart_obat">&nbsp; Proses Disini</a> </div>
    @endif
    <div class="intro-y flex items-center mt-4">
        <h2 class="text-lg font-medium mr-auto">
            Obat Masuk
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 ">
            <form action="{{ route('addToCart') }}" method="POST">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Kode Penerimaan</label>
                    <input id="crud-form-1" name="kode_penerimaan" value="{{ old('kode_penerimaan') }}" type="text" class="form-control w-full" placeholder="Masukkan Kode Penerimaan">
                </div>
                <div class="mt-3">
                    <label class="form-label">Tanggal</label>
                    <input class="datepicker form-control w-full" name="tanggal" value="{{ old('') }}" data-single-mode="true" required="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Terima Dari</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Terima Dari">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Pengirim</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nama Pengirim">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Kirim Ke</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Kirim Ke">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Penerima</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nama Penerima">
                </div>
                <div class="mt-3">
                    <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                        Catatan
                    </label>
                    <textarea id="validation-form-6" class="form-control" name="comment" placeholder="" minlength="10"></textarea>
                </div>
                <!-- <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div> -->
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    <!-- <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data Obat Masuk
        </h2>
    </div> -->
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 ">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                    @csrf
                    <div>
                        <label>Cari Obat</label>
                            <div class="mt-3"> 
                                <select name="kode_obat" data-placeholder="Cari Obat" class="tom-select w-full">
                                    <option value="" disabled selected></option>
                                    @foreach($obat as $data)
                                        <option value="{{ $data->kode_obat }}">{{ $data->nama_obat }} => Stok : {{ $data->stok }}</option>
                                    @endforeach
                                </select> 
                            </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Nomor Faktur</label>
                        <input id="crud-form-1" name="no_faktur" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">No. Batch</label>
                        <input id="crud-form-1" name="no_batch" type="text" class="form-control w-full" placeholder="Masukkan No Batch">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Kedaluwarsa</label>
                        <input class="datepicker form-control w-full" name="tanggal_kedaluwarsa" data-single-mode="true" required="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Jumlah</label>
                        <input id="crud-form-1" name="jumlah" type="text" class="form-control w-full" placeholder="Masukkan Jumlah">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Harga</label>
                        <input id="crud-form-1" name="harga" type="text" class="form-control w-full" placeholder="Masukkan Harga">
                    </div>
                    <div class="text-right mt-5">
                        <button type="reset" class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                        <button type="submit" class="btn btn-primary w-24">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    @if(session('cart'))
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 ">
                <div class="intro-y box p-5">
                    <h2 class="text-lg font-medium mr-auto">
                        List Obat Masuk
                    </h2>
                    <table id="cart_obat" class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">NO</th>
                                <th class="whitespace-nowrap">KODE OBAT</th>
                                <th class="whitespace-nowrap">NAMA OBAT</th>
                                <th class="whitespace-nowrap">NOMOR FAKTUR</th>
                                <th class="whitespace-nowrap">NOMOR BATCH</th>
                                <th class="whitespace-nowrap">KEDALUWARSA</th>
                                <th class="whitespace-nowrap">JUMLAH</th>
                                <th class="whitespace-nowrap">HARGA</th>
                                <th class="text-center whitespace-nowrap">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(session('cart') as $data)
                            <tr class="intro-x">
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $loop->iteration }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['kode_obat'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['nama_obat'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['no_faktur'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['no_batch'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['tanggal_kedaluwarsa'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['jumlah'] }}</div>
                                </td>
                                <td>
                                    <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['harga'] }}</div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-theme-6" href=""> 
                                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right mt-5">
                        <a href="{{ route('emptyCart') }}" onclick="return confirm('Apakah anda yakin ingin menghapus seluruh list?')" class="btn btn-danger mr-1">Hapus Semua</a>
                        <button type="button" class="btn btn-primary w-24">Proses</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection