<?php

namespace Database\Seeders;

use App\Models\DetailTransaksiObat;
use App\Models\MasterObat;
use App\Models\TransaksiObat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MasterObat::create([
            'kode_obat' => 'A01',
            'nama_obat' => 'Paracetamol',
            'kode_gol_obat' => 'A',
            'kode_satuan_kecil' => 'KG',
            'kode_satuan_besar' => 'KG',
            'kode_terapi_obat' => 'A01',
            'stok' => 10
        ]);

        TransaksiObat::create([
            'kode_transaksi' => 'TRS-001',
            'terima_dari' => 'RS. Dr. A.S.M.M.S',
            'nama_pengirim' => 'Dr. A.S.M.M.S',
            'kirim_ke' => 'RS. Dr. A.S.M.M.S',
            'catatan' => 'Catatan'
        ]);

        DetailTransaksiObat::create([
            'no_batch' => 'B01',
            'kode_transaksi' => 'TRS-001',
            'kode_obat' => 'A01',
            'nomor_faktur' => 'F01',
            'kadaluarsa' => '2020-01-01',
            'harga' => '10000',
            'jumlah' => '10',
            'tipe_transaksi' => 'masuk'
        ]);


    }
}
