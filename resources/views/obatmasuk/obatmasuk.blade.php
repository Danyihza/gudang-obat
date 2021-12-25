@extends('templates.master')

@section('title', 'Halaman Obat Masuk')

@section('content')
<div class="content">
    @if (session('success'))
    <div class="alert alert-success show flex items-center mt-6" role="alert"> <i data-feather="alert-triangle"
            class="w-6 h-6 mr-2"></i> Data Obat Berhasil Ditambahkan Ke List. <a class="font-bold"
            href="#cart_obat">&nbsp; Proses Disini</a> </div>
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
                        <input name="kode_penerimaan" id="kode_penerimaan" value="{{ old('kode_penerimaan') }}"
                            type="text" class="form-control w-full" placeholder="Masukkan Kode Penerimaan">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Tanggal</label>
                        <input class="datepicker form-control w-full" name="tanggal" id="tanggal"
                            value="{{ old('tanggal') }}" data-single-mode="true" required="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Terima Dari</label>
                        <input type="text" class="form-control w-full" name="terima_dari" id="terima_dari"
                            value="{{ old('terima_dari') }}" placeholder="Masukkan Terima Dari">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control w-full" name="nama_pengirim" id="nama_pengirim"
                            value="{{ old('nama_pengirim') }}" placeholder="Masukkan Nama Pengirim">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Kirim Ke</label>
                        <input type="text" class="form-control w-full" name="kirim_ke" id="kirim_ke"
                            value="{{ old('kirim_ke') }}" placeholder="Masukkan Kirim Ke">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control w-full" name="nama_penerima" id="nama_penerima"
                            value="{{ old('nama_penerima') }}" placeholder="Masukkan Nama Penerima">
                    </div>
                    <div class="mt-3">
                        <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                            Catatan
                        </label>
                        <textarea class="form-control" name="catatan" id="catatan"
                            placeholder="">{{ old('catatan') }}</textarea>
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
                            <option value="{{ $data->kode_obat }}">{{ $data->nama_obat }} => Stok :
                                {{ $data->stok->where('id_user', session('user')['id_user'])->first()->stok ?? 0 }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nomor Faktur</label>
                    <input name="no_faktur" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">No. Batch</label>
                    <input name="no_batch" onchange="checkNomorBatch()" id="no_batch" type="text" class="form-control w-full" placeholder="Masukkan No Batch">
                    <div id="alert_batch" class="text-theme-6 text-xs mt-2 hidden">Nomor Batch Telah Digunakan</div>
                </div>
                <div class="mt-3">
                    <label class="form-label">Kedaluwarsa</label>
                    <input class="datepicker form-control w-full" name="tanggal_kedaluwarsa" data-single-mode="true"
                        required="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Jumlah</label>
                    <input name="jumlah" type="text" class="form-control w-full" placeholder="Masukkan Jumlah">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Harga</label>
                    <input name="harga" type="text" class="form-control w-full" placeholder="Masukkan Harga">
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
                <div class="flex justify-start">
                    <h2 class="text-lg font-medium mr-auto">
                        List Obat Masuk
                    </h2>
                    <p>
                        Count Obat : <b>{{ count(session('cart')) }}</b>
                    </p>

                </div>
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
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['kode_obat'] }}
                                </div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['nama_obat'] }}
                                </div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['no_faktur'] }}
                                </div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['no_batch'] }}
                                </div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">
                                    {{ $data['tanggal_kedaluwarsa'] }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['jumlah'] }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data['harga'] }}</div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-theme-6"
                                        href="{{ route('deleteSingleDataInCart') }}?id_cart={{ $data['id_cart'] }}">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right mt-5">
                    <a href="{{ route('emptyCart') }}"
                        onclick="return confirm('Apakah anda yakin ingin menghapus seluruh list?')"
                        class="btn btn-danger mr-1">Hapus Semua</a>
                    <button type="button" id="proses_button" onclick="storeData()"
                        class="btn btn-primary w-24">Proses</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section('js')
<script>
    async function storeData() {
        const kode_penerimaan = document.querySelector('#kode_penerimaan').value;
        const tanggal = document.querySelector('#tanggal').value;
        const terima_dari = document.querySelector('#terima_dari').value;
        const nama_pengirim = document.querySelector('#nama_pengirim').value;
        const kirim_ke = document.querySelector('#kirim_ke').value;
        const nama_penerima = document.querySelector('#nama_penerima').value;
        const catatan = document.querySelector('#catatan').value;

        const cart = `{{ json_encode(session('cart')) }}`;

        const json = JSON.parse(cart.replace(/&quot;/g, '"'));

        console.log(kode_penerimaan, tanggal, terima_dari, nama_pengirim, kirim_ke, nama_penerima, catatan);

        const data = await fetch(`{{ route('api.obatMasukStoreData') }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    kode_penerimaan: kode_penerimaan,
                    tanggal: tanggal,
                    terima_dari: terima_dari,
                    nama_pengirim: nama_pengirim,
                    kirim_ke: kirim_ke,
                    nama_penerima: nama_penerima,
                    catatan: catatan,
                    cart: json
                })
            })
            .then(response => response.json())
            .then(result => result)
            .catch(error => console.error(error));

        console.log(data);

        if (data.success == true) {
            Swal.fire({
                title: 'Obat Berhasil Ditambahkan',
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Kembali Tambahkan Obat'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{ route('obatmasukView') }}`;
                }
            })
        } else {
            Swal.fire({
                title: 'Obat Gagal Ditambahkan',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Coba Lagi'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{ route('obatmasukView') }}`;
                }
            })
        }
    }

    async function checkNomorBatch(){
        const no_batch = document.querySelector('#no_batch').value;
        const alert = document.querySelector('#alert_batch');

        const result = await fetch(`{{ route('api.checkNomorBatch') }}?no_batch=${no_batch}`)
            .then(response => response.json())
            .then(result => result)
            .catch(error => console.error(error));
        
        if (result.success == false) {
            alert.classList.remove('hidden');
        } else {
            alert.classList.add('hidden');
        }
    }

</script>
@endsection
