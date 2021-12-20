<?php

namespace Database\Seeders;

use App\Models\MasterObat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            'kode_terapi_obat' => 'A01'
        ]);
    }
}
