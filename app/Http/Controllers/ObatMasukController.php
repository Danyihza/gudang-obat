<?php

namespace App\Http\Controllers;

use App\Models\MasterObat;
use Illuminate\Http\Request;

class ObatMasukController extends Controller
{
    public function view()
    {
        // dd(session('cart')[0]);
        $data['state'] = 'Obat Masuk';
        $data['obat'] = MasterObat::orderBy('nama_obat', 'ASC')->with('stok')->get();
        return view('obatmasuk.obatmasuk', $data);
    }

    public function addToCart(Request $request)
    {
        $kode_obat = $request->kode_obat;
        $no_faktur = $request->no_faktur;
        $no_batch = $request->no_batch;
        $tanggal_kedaluwarsa = $request->tanggal_kedaluwarsa;
        $jumlah = $request->jumlah;
        $harga = $request->harga;

        $nama_obat = MasterObat::where('kode_obat', $kode_obat)->first()->nama_obat;
        session()->push('cart', [
            'id_cart' => gen_uuid(),
            'kode_obat' => $kode_obat,
            'nama_obat' => $nama_obat,
            'no_faktur' => $no_faktur,
            'no_batch' => $no_batch,
            'tanggal_kedaluwarsa' => $tanggal_kedaluwarsa,
            'jumlah' => $jumlah,
            'harga' => $harga
        ]);
        return redirect()->back()->with('success', 'success')->withInput();
    }

    public function emptyCart()
    {
        session()->forget('cart');
        return redirect()->back();
    }
}
