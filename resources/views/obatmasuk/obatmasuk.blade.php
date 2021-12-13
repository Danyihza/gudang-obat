@extends('templates.master')

@section('title', 'Obat Masuk Page')

@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Stok Obat Masuk
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 ">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Kode Penerimaan</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Kode Penerimaan">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nomor Faktur</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label class="form-label">Tanggal</label>
                    <input class="datepicker form-control w-full" name="tanggal_lahir" data-single-mode="true" required="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Terima Dari</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Pengirim</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Kirim Ke</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Penerima</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3"> 
                    <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row"> 
                        Catatan 
                    </label> 
                    <textarea id="validation-form-6" class="form-control" name="comment" placeholder="" minlength="10" required></textarea> 
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Stok Obat Masuk
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 ">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Kode Penerimaan</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Kode Penerimaan">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nomor Faktur</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label class="form-label">Tanggal</label>
                    <input class="datepicker form-control w-full" name="tanggal_lahir" data-single-mode="true" required="">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Terima Dari</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Pengirim</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Kirim Ke</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Nama Penerima</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Masukkan Nomor Faktur">
                </div>
                <div class="mt-3"> 
                    <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row"> 
                        Catatan 
                    </label> 
                    <textarea id="validation-form-6" class="form-control" name="comment" placeholder="" minlength="10" required></textarea> 
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
@endsection