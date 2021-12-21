@extends('templates.master')

@section('title', 'Master Obat')

@section('content')
<div class="content">
    <div class="col-span-12 mt-8">
        <h2 class="text-lg font-medium truncate mr-5">
            Master Obat
        </h2>
        <div class="">
            <div class="intro-y overflow-auto lg:overflow-visible p-5 mt-5">
                <table class="table table-report sm:mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">NO</th>
                            <th class="whitespace-nowrap">KODE OBAT</th>
                            <th class="whitespace-nowrap">NAMA OBAT</th>
                            <th class="whitespace-nowrap">KODE GOL OBAT</th>
                            <th class="whitespace-nowrap">KODE SATUAN KECIL</th>
                            <th class="whitespace-nowrap">KODE SATUAN BESAR</th>
                            <th class="whitespace-nowrap">KODE TERAPI OBAT</th>
                            <th class="text-center whitespace-nowrap">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($obat as $data)
                        <tr class="intro-x">
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ ($obat->currentpage()-1) * $obat->perpage() + $loop->index + 1 }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->kode_obat }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->nama_obat }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->kode_gol_obat }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->kode_satuan_kecil }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->kode_satuan_besar }}</div>
                            </td>
                            <td>
                                <div class="text-gray-800 text-md whitespace-nowrap mt-0.5">{{ $data->kode_terapi_obat }}</div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> 
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Ubah 
                                    </a>
                                    <a class="flex items-center text-theme-6" href=""> 
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $obat->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
