<?php

namespace Database\Seeders;

use App\Models\DetailTransaksiObat;
use App\Models\FkStok;
use App\Models\MasterObat;
use App\Models\TransaksiObat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'id_user' => gen_uuid(),
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'password' => Hash::make('admin'),
        //     'last_login' => now(),
        // ]);
        $id1 = gen_uuid();
        $id2 = gen_uuid();
        User::create([
            'id_user' => $id1,
            'name' => 'Puskesmas Tlanakan',
            'username' => 'tlanakan',
            'password' => Hash::make('tlanakan'),
            'last_login' => now(),
        ]);

        User::create([
            'id_user' => $id2,
            'name' => 'Puskesmas Galis',
            'username' => 'galis',
            'password' => Hash::make('galis'),
            'last_login' => now(),
        ]);

        MasterObat::create([
            'kode_obat' => 'A01',
            'nama_obat' => 'Paracetamol',
            'kode_gol_obat' => 'A',
            'kode_satuan_kecil' => 'KG',
            'kode_satuan_besar' => 'KG',
            'kode_terapi_obat' => 'A01',
        ]);
        
        MasterObat::create([
            'kode_obat' => 'A02',
            'nama_obat' => 'Acyclovir',
            'kode_gol_obat' => 'B',
            'kode_satuan_kecil' => 'TAB',
            'kode_satuan_besar' => 'TAB',
            'kode_terapi_obat' => 'A02',
        ]);

        MasterObat::create([
            'kode_obat' => 'A03',
            'nama_obat' => 'Amoxicilin',
            'kode_gol_obat' => 'C',
            'kode_satuan_kecil' => 'SYR',
            'kode_satuan_besar' => 'SYR',
            'kode_terapi_obat' => 'A03',
        ]);

        FkStok::create([
            'kode_obat' => 'A01',
            'id_user' => $id1,
            'stok' => '100',
        ]);

        FkStok::create([
            'kode_obat' => 'A02',
            'id_user' => $id1,
            'stok' => '10',
        ]);
        
        FkStok::create([
            'kode_obat' => 'A03',
            'id_user' => $id1,
            'stok' => '50',
        ]);

        FkStok::create([
            'kode_obat' => 'A02',
            'id_user' => $id2,
            'stok' => '50',
        ]);

        TransaksiObat::create([
            'kode_transaksi' => 'TRS-001',
            'terima_dari' => 'RS. Dr. A.S.M.M.S',
            'nama_pengirim' => 'Dr. A.S.M.M.S',
            'kirim_ke' => 'RS. Dr. A.S.M.M.S',
            'catatan' => 'Catatan',
            'tanggal' => date('Y-m-d')
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
