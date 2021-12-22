<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_obat', function (Blueprint $table) {
            $table->string('kode_obat', 50)->primary();
            $table->string('nama_obat');
            $table->string('kode_gol_obat', 10);
            $table->string('kode_satuan_kecil', 10);
            $table->string('kode_satuan_besar', 10);
            $table->string('kode_terapi_obat', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_obat');
    }
}
