<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksiObat;
use App\Models\FkStok;
use App\Models\MasterObat;
use App\Models\TransaksiObat;
use Illuminate\Http\Request;

class ObatMasukController extends Controller
{
    public function view()
    {
        // dd(session('cart')[0][key(session('cart')[0])]);
        // dd(key(session('cart')[0]));
        dd(session()->all());
        $data['state'] = 'Obat Masuk';
        $data['obat'] = MasterObat::orderBy('nama_obat', 'ASC')->with('stok')->get();
        return view('obatmasuk.obatmasuk', $data);
    }

    public function storeData(Request $request)
    {
        // try {
            $kode_penerimaan = $request->kode_penerimaan;
            $tanggal = $request->tanggal;
            $terima_dari = $request->terima_dari;
            $nama_pengirim = $request->nama_pengirim;
            $kirim_ke = $request->kirim_ke;
            $nama_penerima = $request->nama_penerima;
            $catatan = $request->catatan;

            $cart = session()->all();
            dd($cart);

            $transaksi_obat = [
                'kode_transaksi' => $kode_penerimaan,
                'terima_dari' => $terima_dari,
                'nama_pengirim' => $nama_pengirim,
                'kirim_ke' => $kirim_ke,
                'nama_penerima' => $nama_penerima,
                'catatan' => $catatan,
                'tanggal' => $tanggal,
            ];

            TransaksiObat::create($transaksi_obat);

            foreach ($cart as $key => $value) {
                $newDetailTransaksiObat = new DetailTransaksiObat;
                $newDetailTransaksiObat->no_batch = $value['no_batch'];
                $newDetailTransaksiObat->kode_transaksi = $transaksi_obat['kode_transaksi'];
                $newDetailTransaksiObat->kode_obat = $value['kode_obat'];
                $newDetailTransaksiObat->nomor_faktur = $value['no_faktur'];
                $newDetailTransaksiObat->kadaluarsa = $value['tanggal_kedaluwarsa'];
                $newDetailTransaksiObat->harga = $value['harga'];
                $newDetailTransaksiObat->jumlah = $value['jumlah'];
                $newDetailTransaksiObat->tipe_transaksi = 'masuk';
                $newDetailTransaksiObat->save();
            }

            foreach ($cart as $key => $value) {
                $stok = FkStok::where('kode_obat', $value['jumlah'])->where('id_user', session('user')['id_user'])->first();
                if ($stok) {
                    $stok->stok = $stok->stok + $value['jumlah'];
                    $stok->save();
                } else {
                    $newStok = new FkStok;
                    $newStok->kode_obat = $value['kode_obat'];
                    $newStok->id_user = session('user')['id_user'];
                    $newStok->stok = $value['jumlah'];
                    $newStok->save();
                }
            }

            session()->forget('cart');

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan',
            ]);
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => $th->getMessage(),
        //     ]);
        // }
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

    public function deleteSingleDataInCart(Request $request)
    {
        $id_cart = $request->id_cart;
        $cart = session()->pull('cart');
        if (($key = array_search($id_cart, $cart)) !== false) {
            unset($cart[$key]);
        }
        return redirect()->back()->with('success', 'success')->withInput();
    }

    public function emptyCart()
    {
        session()->forget('cart');
        return redirect()->back();
    }
}
